<?php
class PDLayout
{
	var $bootstrapTheme = "";
	var $customCssPageName = "";
	var $page;
	var $table;
	var $version = 4;
	var $bootstrapSize;
	var $name="";
	var $style="";

	function __construct( $table, $page, $theme, $size = "normal" )
	{
		$this->page = $page;
		$this->table = $table;
		$this->bootstrapTheme = $theme;
		$this->bootstrapSize = $size;
		
	}

	
	/**
	 *  Returns list of CSS files required for displaying the layout
	 */
	public function getCSSFiles($rtl = false, $mobile = false, $pdf = false)
	{
		$files = array();
		$suffix = "";
		if( $rtl )
			$suffix = "RTL";
			
			$files[] = "styles/bootstrap/".$this->bootstrapTheme."/".$this->bootstrapSize."/style.css";

		$files[] = "styles/bs".$suffix.".css";

		$files[] = "styles/font-awesome/css/font-awesome.min.css";

		if( file_exists( getabspath( "styles/custom/custom.css" ) ) )
		$files[] = "styles/custom/custom".$suffix.".css";

		$files[] = "styles/pages/".$this->table."_".$this->page["id"].".css";


		return $files;
	}

	
	/**
     *	Hide items and grid cells that should be hidden 
 	 *	@param XTempl @xt	
	 *	@param array $itemsToHide
	 *	@param ProjectSettings ps
	 *	@return {object} copy of cell map with hidden rows and cols removed
	 */
	public function & prepareGrid( $xt, $itemsToHide, &$cellMap, $location )
	{
		//	mark cells that can be removed or hidden
		foreach( $cellMap->cells as $cell => $dummy ) {
			$cMapRef = &$cellMap->cells[$cell];
			if( $cMapRef["fixedAtClient"] )
				continue;
			$empty = false;
			if( !$cMapRef["fixedAtServer"] ) {
				$empty = true;
				foreach( $cMapRef["tags"] as $i => $item ) {
					if( $xt->getVar( $item ) )
					{
						$empty = false;
						break;
					}
				}
			} 
			$hidden = true;
			foreach( $cMapRef["items"] as $i => $item ) {
				if( !$itemsToHide[ $item ] )
				{
					$hidden = false;
					break;
				}
			}
			if( $empty )
				$cMapRef["removable"] = true;
			if( $hidden )
				$cMapRef["hidable"] = true;
		}

		// mark rows and cols that cna be removed
		$removedRows = $cellMap->removeRowsColumns("removable");

		// mark rows and cols that cna be hidden
		$hidingMap = $cellMap->makeClone();
		$hiddenRows =  $hidingMap->removeRowsColumns("hidable");
		
		
		// do actual removal and hiding

		//	hide rows first
		foreach( $removedRows as $row ) {
			$xt->assign( "row_" . $location . "_" . $row, 'data-hidden' );
		}
		foreach( $hiddenRows as $row ) {
			$xt->assign( "row_" . $location . "_" . $row, 'data-hidden' );
		}
		foreach( $cellMap->cells as $cell => $cMap ) {
			
			if( 0 == count( $cMap["rows"] ) ||  0 == count( $cMap["cols"] )) {
				//	don't display cell
				continue;
			}
		
			//	display cell
			$xt->assign( "cellblock_" . $location . "_" . $cell, true );
			
			//	add cell attributes
			
			$cellAttrs = array();
			$hCell =& $hidingMap->cells[$cell];

			if( 0 == count( $hCell["rows"] ) ||  0 == count( $hCell["cols"] )) {
				//	display cell hidden
				$cellAttrs[] = 'data-hidden';
			}
			
			if( count( $hCell["cols"] ) > 1 ) {
				$cellAttrs[] = 'colspan="' . count( $hCell["cols"] ) . '"';
			}
			if( count( $hCell["rows"] ) > 1 ) {
				$cellAttrs[] = 'rowspan="' . count( $hCell["rows"] ) . '"';
			}
			//	specify which cols and rows are visible

			if( count( $cellAttrs ) ) {
				$xt->assign( "cell_".$location."_" . $cell, implode( " ", $cellAttrs ) );
			}
			
		}
		return $hidingMap;
		
	}

	public function visibleOnMedia( $media, $visibilty ) {
		if( $media == 0 ) {
			return $visibilty == 0 
				|| $visibilty == 3
				|| $visibilty == 4
				|| $visibilty == 5;
		
		} else if( $media == 1 ) {
			return $visibilty == 0 
				|| $visibilty == 2
				|| $visibilty == 4;
		}
}

	/**
	 * @param {array} $itemToHide - array of items to be hidden. Pairs of [itemId] => true
	 */
	public function prepareForms( $xt, $itemsToHide, $recordItemsToHide, $pageObject ) {
		
		/* desktop=0, mobile=1 */

		if( $pageObject ) {
			$ps = $pageObject->pSet;
		} else {
			$ps = new ProjectSettings( GetTableByShort($this->table), $this->page["type"], $this->page["id"] );
		}

		$helper =& $ps->helperFormItems();

		//	make array of items hidden by application or media type
		$invisibleItems = $itemsToHide;
		foreach( $helper["itemVisiblity"] as $itemId => $visibility ) {
			if( !$this->visibleOnMedia( getMediaType(), $visibility )) {
				$invisibleItems[ $itemId ] = true;
			}
		}

		
		$visibleCellsMap = array();
		$cellMaps =& $ps->helperCellMaps();
		foreach( array_keys($cellMaps) as $loc ) {
			$hMap =& $this->prepareGrid($xt, $invisibleItems, new CellMapPD( $cellMaps[ $loc ] ), $loc );
			if( $pageObject ) {
				$visibleCellsMap[ $loc ] = & $this->prepareClientCellMap( $cellMaps[ $loc ], $hMap );
			}
		}
		if( $pageObject ) {
			$pageObject->setPageData("cellMaps", $visibleCellsMap );
		}

		//	hide items 
		foreach( array_keys($invisibleItems) as $item ) {
			if( $itemsToHide[ $item ] )
				$xt->assign( "item_" . $item, 'data-hidden' );
			else 
				$xt->assign( "item_" . $item, 'data-media-hidden' );
		}

		//	hide items in records
		if( $pageObject ) {
			foreach( $recordItemsToHide as $item => $itemRecords ) {
				foreach( array_keys( $itemRecords ) as $recordId ) {
					$pageObject->hideRecordItem( $item, $recordId );
				}
			}
		}

		$xt->assign("firstAboveGridCell", true); 

		//	hide other cells & forms
		
		$formTags =& $helper["formXtTags"];
		foreach( array_keys($formTags) as $loc ) {
			$present = false;
			foreach( $formTags[$loc] as $tag ) {
				if( $xt->getvar( $tag ) ) {
					$present = true;
					break;
				}
			}
			if( !$present ) {
				// hide the whole form
				$xt->assign(  $loc."_block", false );
			}
	}



		$formItems =& $helper["formItems"];
		foreach( array_keys($formItems) as $loc ) {
			$present = false;
			foreach( $formItems[$loc] as $item ) {
				if( !isset( $invisibleItems[$item] ) ) {
					$present = true;
					break;
				}
			}
			if( !$present ) {
				// hide the whole form
				$xt->assign( "form_" . $loc, 'data-hidden' );
			}
		}
	}
	protected function & prepareClientCellMap( &$allCells, &$visibleCells ) {
		foreach( array_keys( $visibleCells->cells ) as $cellId )  {
			$allCells["cells"][$cellId]["visibleCols"] = $visibleCells->cells[$cellId]["cols"];
		}
		return $allCells;
	}

}

class CellMapPD {
	public $cells;
	public $height;
	public $width;
	
	function __construct( &$map ) {
		$this->cells = &$map["cells"];
		$this->height = $map["height"];
		$this->width = $map["width"];
	}
	
	function makeClone() {
		$newMap = array(
			"cells" => cloneArray( $this->cells ),
			"height" => $this->height,
			"width" => $this->width,
		);
		return new CellMapPD( $newMap );
	}
	
	public function getColumnCells( $col ) {
		$ret = array();
		foreach( $this->cells as $cell => $cMap ) {
			if( array_search( $col, $cMap["cols"] ) !== FALSE )
				$ret[] = $cell;
		}
		return $ret;
	}
	
	public function getRowCells( $row ) {
		$ret = array();
		foreach( $this->cells as $cell => $cMap ) {
			if( array_search( $row, $cMap["rows"] ) !== FALSE )
				$ret[] = $cell;
		}
		return $ret;
	}
	
	/**
	 * Returns array of row indices that can be removed
	 */
	public function removeRowsColumns( $cellRemoveFlag ) {
		
		//	remove unnecessary columns
		for( $col = 0; $col < $this->width; ++$col ) {
			$colCells = $this->getColumnCells( $col );
			$canDeleteCol = true;
			foreach( $colCells as $cell ) {
				if( !$this->cells[$cell][ $cellRemoveFlag ] && count($this->cells[$cell]["cols"]) == 1  ) {
					$canDeleteCol = false;
					break;
				}
			}
			if( !$canDeleteCol )
				continue;
			for( $i = 0; $i < count($colCells); ++$i ) {
				$cell = $colCells[$i];
				$colIdx = array_search( $col, $this->cells[$cell]["cols"] );
				array_splice( $this->cells[$cell]["cols"], $colIdx, 1 );
							}
		}

		$ret = array();

		//	remove unnecessary rows
		for( $row = 0; $row < $this->height; ++$row ) {
			$rowCells = $this->getRowCells( $row );
			$canDeleteRow = true;
			foreach( $rowCells as $cell ) {
				if( !$this->cells[$cell][ $cellRemoveFlag ] && count($this->cells[$cell]["rows"]) == 1  ) {
					$canDeleteRow = false;
					break;
				}
			}
			if( !$canDeleteRow )
				continue;
			for( $i = 0; $i < count($rowCells); ++$i ) {
				$cell = $rowCells[$i];
				$rowIdx = array_search( $row, $this->cells[$cell]["rows"] );
				array_splice( $this->cells[$cell]["rows"], $rowIdx, 1 );
							}
			$ret[] = $row;
		}
		return $ret;
	}

}
?>