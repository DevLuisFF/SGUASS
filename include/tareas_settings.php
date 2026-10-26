<?php




$tdatatareas = array();
$tdatatareas[".searchableFields"] = array();
	$tdatatareas[".truncateText"] = true;
	$tdatatareas[".NumberOfChars"] = 80;
	$tdatatareas[".ShortName"] = "tareas";
	$tdatatareas[".OwnerID"] = "";
	$tdatatareas[".OriginalTable"] = "tareas";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatareas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatareas[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstareas = array();
$fieldToolTipstareas = array();
$pageTitlestareas = array();
$placeHolderstareas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstareas["Spanish"] = array();
	$fieldToolTipstareas["Spanish"] = array();
	$placeHolderstareas["Spanish"] = array();
	$pageTitlestareas["Spanish"] = array();
	$fieldLabelstareas["Spanish"]["id"] = "Id";
	$fieldToolTipstareas["Spanish"]["id"] = "";
	$placeHolderstareas["Spanish"]["id"] = "";
	$fieldLabelstareas["Spanish"]["curso_id"] = "Cátedra / Materia";
	$fieldToolTipstareas["Spanish"]["curso_id"] = "";
	$placeHolderstareas["Spanish"]["curso_id"] = "";
	$fieldLabelstareas["Spanish"]["titulo"] = "Título de la Actividad";
	$fieldToolTipstareas["Spanish"]["titulo"] = "";
	$placeHolderstareas["Spanish"]["titulo"] = "";
	$fieldLabelstareas["Spanish"]["descripcion"] = "Instrucciones / Consigna";
	$fieldToolTipstareas["Spanish"]["descripcion"] = "";
	$placeHolderstareas["Spanish"]["descripcion"] = "";
	$fieldLabelstareas["Spanish"]["link"] = "Material de Apoyo / Enlace";
	$fieldToolTipstareas["Spanish"]["link"] = "";
	$placeHolderstareas["Spanish"]["link"] = "";
	$fieldLabelstareas["Spanish"]["fecha_entrega"] = "Plazo Límite de Entrega";
	$fieldToolTipstareas["Spanish"]["fecha_entrega"] = "";
	$placeHolderstareas["Spanish"]["fecha_entrega"] = "";
	if (count($fieldToolTipstareas["Spanish"]))
		$tdatatareas[".isUseToolTips"] = true;
}


	$tdatatareas[".NCSearch"] = true;



$tdatatareas[".shortTableName"] = "tareas";
$tdatatareas[".nSecOptions"] = 0;

$tdatatareas[".mainTableOwnerID"] = "";
$tdatatareas[".entityType"] = 0;

$tdatatareas[".strOriginalTableName"] = "tareas";

	



$tdatatareas[".showAddInPopup"] = false;

$tdatatareas[".showEditInPopup"] = false;

$tdatatareas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatareas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatareas[".listAjax"] = false;
//	temporary
$tdatatareas[".listAjax"] = false;

	$tdatatareas[".audit"] = false;

	$tdatatareas[".locking"] = false;


$pages = $tdatatareas[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatareas[".edit"] = true;
	$tdatatareas[".afterEditAction"] = 1;
	$tdatatareas[".closePopupAfterEdit"] = 1;
	$tdatatareas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatareas[".add"] = true;
$tdatatareas[".afterAddAction"] = 1;
$tdatatareas[".closePopupAfterAdd"] = 1;
$tdatatareas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatareas[".list"] = true;
}



$tdatatareas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatareas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatareas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatareas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatareas[".printFriendly"] = true;
}



$tdatatareas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatareas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatareas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatareas[".isUseAjaxSuggest"] = true;

$tdatatareas[".rowHighlite"] = true;



																																																						
$tdatatareas[".flexibleSearch"] = true;


$tdatatareas[".ajaxCodeSnippetAdded"] = false;

$tdatatareas[".buttonsAdded"] = false;

$tdatatareas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatareas[".isUseTimeForSearch"] = false;


$tdatatareas[".badgeColor"] = "7B68EE";


$tdatatareas[".allSearchFields"] = array();
$tdatatareas[".filterFields"] = array();
$tdatatareas[".requiredSearchFields"] = array();

$tdatatareas[".googleLikeFields"] = array();
$tdatatareas[".googleLikeFields"][] = "id";
$tdatatareas[".googleLikeFields"][] = "curso_id";
$tdatatareas[".googleLikeFields"][] = "titulo";
$tdatatareas[".googleLikeFields"][] = "descripcion";
$tdatatareas[".googleLikeFields"][] = "link";
$tdatatareas[".googleLikeFields"][] = "fecha_entrega";



$tdatatareas[".tableType"] = "list";

$tdatatareas[".printerPageOrientation"] = 0;
$tdatatareas[".nPrinterPageScale"] = 100;

$tdatatareas[".nPrinterSplitRecords"] = 40;

$tdatatareas[".nPrinterPDFSplitRecords"] = 40;


$tdatatareas[".geocodingEnabled"] = false;










$tdatatareas[".pageSize"] = 20;

$tdatatareas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatareas[".strOrderBy"] = $tstrOrderBy;

$tdatatareas[".orderindexes"] = array();

$tdatatareas[".sqlHead"] = "SELECT id,  	curso_id,  	titulo,  	descripcion,  	link,  	fecha_entrega";
$tdatatareas[".sqlFrom"] = "FROM tareas";
$tdatatareas[".sqlWhereExpr"] = "";
$tdatatareas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatareas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatareas[".arrGroupsPerPage"] = $arrGPP;

$tdatatareas[".highlightSearchResults"] = true;

$tableKeystareas = array();
$tableKeystareas[] = "id";
$tdatatareas[".Keys"] = $tableKeystareas;


$tdatatareas[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tareas";
	$fdata["Label"] = GetFieldLabel("tareas","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatareas["id"] = $fdata;
		$tdatatareas[".searchableFields"][] = "id";
//	curso_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "curso_id";
	$fdata["GoodName"] = "curso_id";
	$fdata["ownerTable"] = "tareas";
	$fdata["Label"] = GetFieldLabel("tareas","curso_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "curso_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "curso_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cursos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT((SELECT m.nombre FROM materias m WHERE m.id = cursos.materia_id), ' - Aula: ', COALESCE(cursos.aula, 'S/A'), ' (', (SELECT p.nombre FROM periodos p WHERE p.id = cursos.periodo_id), ')')";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatareas["curso_id"] = $fdata;
		$tdatatareas[".searchableFields"][] = "curso_id";
//	titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "titulo";
	$fdata["GoodName"] = "titulo";
	$fdata["ownerTable"] = "tareas";
	$fdata["Label"] = GetFieldLabel("tareas","titulo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "titulo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatareas["titulo"] = $fdata;
		$tdatatareas[".searchableFields"][] = "titulo";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "tareas";
	$fdata["Label"] = GetFieldLabel("tareas","descripcion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatareas["descripcion"] = $fdata;
		$tdatatareas[".searchableFields"][] = "descripcion";
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "tareas";
	$fdata["Label"] = GetFieldLabel("tareas","link");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "link";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatareas["link"] = $fdata;
		$tdatatareas[".searchableFields"][] = "link";
//	fecha_entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_entrega";
	$fdata["GoodName"] = "fecha_entrega";
	$fdata["ownerTable"] = "tareas";
	$fdata["Label"] = GetFieldLabel("tareas","fecha_entrega");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_entrega";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_entrega";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatareas["fecha_entrega"] = $fdata;
		$tdatatareas[".searchableFields"][] = "fecha_entrega";


$tables_data["tareas"]=&$tdatatareas;
$field_labels["tareas"] = &$fieldLabelstareas;
$fieldToolTips["tareas"] = &$fieldToolTipstareas;
$placeHolders["tareas"] = &$placeHolderstareas;
$page_titles["tareas"] = &$pageTitlestareas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tareas"] = array();
//	tarea_entregas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tarea_entregas";
		$detailsParam["dOriginalTable"] = "tarea_entregas";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tarea_entregas";
	$detailsParam["dCaptionTable"] = GetTableCaption("tarea_entregas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tareas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tareas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tareas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["tareas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tareas"][$dIndex]["detailKeys"][]="tarea_id";

// tables which are master tables for current table (detail)
$masterTablesData["tareas"] = array();



	
				$strOriginalDetailsTable="cursos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cursos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cursos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tareas"][0] = $masterParams;
				$masterTablesData["tareas"][0]["masterKeys"] = array();
	$masterTablesData["tareas"][0]["masterKeys"][]="id";
				$masterTablesData["tareas"][0]["detailKeys"] = array();
	$masterTablesData["tareas"][0]["detailKeys"][]="curso_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tareas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	curso_id,  	titulo,  	descripcion,  	link,  	fecha_entrega";
$proto0["m_strFrom"] = "FROM tareas";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "tareas",
	"m_srcTableName" => "tareas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tareas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "curso_id",
	"m_strTable" => "tareas",
	"m_srcTableName" => "tareas"
));

$proto8["m_sql"] = "curso_id";
$proto8["m_srcTableName"] = "tareas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo",
	"m_strTable" => "tareas",
	"m_srcTableName" => "tareas"
));

$proto10["m_sql"] = "titulo";
$proto10["m_srcTableName"] = "tareas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "tareas",
	"m_srcTableName" => "tareas"
));

$proto12["m_sql"] = "descripcion";
$proto12["m_srcTableName"] = "tareas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "link",
	"m_strTable" => "tareas",
	"m_srcTableName" => "tareas"
));

$proto14["m_sql"] = "link";
$proto14["m_srcTableName"] = "tareas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_entrega",
	"m_strTable" => "tareas",
	"m_srcTableName" => "tareas"
));

$proto16["m_sql"] = "fecha_entrega";
$proto16["m_srcTableName"] = "tareas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tareas";
$proto19["m_srcTableName"] = "tareas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "curso_id";
$proto19["m_columns"][] = "titulo";
$proto19["m_columns"][] = "descripcion";
$proto19["m_columns"][] = "link";
$proto19["m_columns"][] = "fecha_entrega";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tareas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tareas";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tareas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tareas = createSqlQuery_tareas();


	
		;

						

$tdatatareas[".sqlquery"] = $queryData_tareas;

include_once(getabspath("include/tareas_events.php"));
$tableEvents["tareas"] = new eventclass_tareas;
$tdatatareas[".hasEvents"] = true;

?>