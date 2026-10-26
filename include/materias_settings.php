<?php




$tdatamaterias = array();
$tdatamaterias[".searchableFields"] = array();
	$tdatamaterias[".truncateText"] = true;
	$tdatamaterias[".NumberOfChars"] = 80;
	$tdatamaterias[".ShortName"] = "materias";
	$tdatamaterias[".OwnerID"] = "";
	$tdatamaterias[".OriginalTable"] = "materias";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatamaterias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamaterias[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsmaterias = array();
$fieldToolTipsmaterias = array();
$pageTitlesmaterias = array();
$placeHoldersmaterias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmaterias["Spanish"] = array();
	$fieldToolTipsmaterias["Spanish"] = array();
	$placeHoldersmaterias["Spanish"] = array();
	$pageTitlesmaterias["Spanish"] = array();
	$fieldLabelsmaterias["Spanish"]["id"] = "Id";
	$fieldToolTipsmaterias["Spanish"]["id"] = "";
	$placeHoldersmaterias["Spanish"]["id"] = "";
	$fieldLabelsmaterias["Spanish"]["nombre"] = "Nombre de la Asignatura";
	$fieldToolTipsmaterias["Spanish"]["nombre"] = "";
	$placeHoldersmaterias["Spanish"]["nombre"] = "";
	$fieldLabelsmaterias["Spanish"]["descripcion"] = "Programa / Contenido Temático";
	$fieldToolTipsmaterias["Spanish"]["descripcion"] = "";
	$placeHoldersmaterias["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsmaterias["Spanish"]))
		$tdatamaterias[".isUseToolTips"] = true;
}


	$tdatamaterias[".NCSearch"] = true;



$tdatamaterias[".shortTableName"] = "materias";
$tdatamaterias[".nSecOptions"] = 0;

$tdatamaterias[".mainTableOwnerID"] = "";
$tdatamaterias[".entityType"] = 0;

$tdatamaterias[".strOriginalTableName"] = "materias";

	



$tdatamaterias[".showAddInPopup"] = false;

$tdatamaterias[".showEditInPopup"] = false;

$tdatamaterias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaterias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaterias[".listAjax"] = false;
//	temporary
$tdatamaterias[".listAjax"] = false;

	$tdatamaterias[".audit"] = false;

	$tdatamaterias[".locking"] = false;


$pages = $tdatamaterias[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamaterias[".edit"] = true;
	$tdatamaterias[".afterEditAction"] = 1;
	$tdatamaterias[".closePopupAfterEdit"] = 1;
	$tdatamaterias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamaterias[".add"] = true;
$tdatamaterias[".afterAddAction"] = 1;
$tdatamaterias[".closePopupAfterAdd"] = 1;
$tdatamaterias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamaterias[".list"] = true;
}



$tdatamaterias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamaterias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamaterias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamaterias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamaterias[".printFriendly"] = true;
}



$tdatamaterias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamaterias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamaterias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamaterias[".isUseAjaxSuggest"] = true;

$tdatamaterias[".rowHighlite"] = true;



																											
$tdatamaterias[".flexibleSearch"] = true;


$tdatamaterias[".ajaxCodeSnippetAdded"] = false;

$tdatamaterias[".buttonsAdded"] = false;

$tdatamaterias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaterias[".isUseTimeForSearch"] = false;


$tdatamaterias[".badgeColor"] = "DAA520";


$tdatamaterias[".allSearchFields"] = array();
$tdatamaterias[".filterFields"] = array();
$tdatamaterias[".requiredSearchFields"] = array();

$tdatamaterias[".googleLikeFields"] = array();
$tdatamaterias[".googleLikeFields"][] = "id";
$tdatamaterias[".googleLikeFields"][] = "nombre";
$tdatamaterias[".googleLikeFields"][] = "descripcion";



$tdatamaterias[".tableType"] = "list";

$tdatamaterias[".printerPageOrientation"] = 0;
$tdatamaterias[".nPrinterPageScale"] = 100;

$tdatamaterias[".nPrinterSplitRecords"] = 40;

$tdatamaterias[".nPrinterPDFSplitRecords"] = 40;


$tdatamaterias[".geocodingEnabled"] = false;










$tdatamaterias[".pageSize"] = 20;

$tdatamaterias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaterias[".strOrderBy"] = $tstrOrderBy;

$tdatamaterias[".orderindexes"] = array();

$tdatamaterias[".sqlHead"] = "SELECT id,  	nombre,  	descripcion";
$tdatamaterias[".sqlFrom"] = "FROM materias";
$tdatamaterias[".sqlWhereExpr"] = "";
$tdatamaterias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamaterias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaterias[".arrGroupsPerPage"] = $arrGPP;

$tdatamaterias[".highlightSearchResults"] = true;

$tableKeysmaterias = array();
$tableKeysmaterias[] = "id";
$tdatamaterias[".Keys"] = $tableKeysmaterias;


$tdatamaterias[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "materias";
	$fdata["Label"] = GetFieldLabel("materias","id");
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


	$tdatamaterias["id"] = $fdata;
		$tdatamaterias[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "materias";
	$fdata["Label"] = GetFieldLabel("materias","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamaterias["nombre"] = $fdata;
		$tdatamaterias[".searchableFields"][] = "nombre";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "materias";
	$fdata["Label"] = GetFieldLabel("materias","descripcion");
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

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatamaterias["descripcion"] = $fdata;
		$tdatamaterias[".searchableFields"][] = "descripcion";


$tables_data["materias"]=&$tdatamaterias;
$field_labels["materias"] = &$fieldLabelsmaterias;
$fieldToolTips["materias"] = &$fieldToolTipsmaterias;
$placeHolders["materias"] = &$placeHoldersmaterias;
$page_titles["materias"] = &$pageTitlesmaterias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["materias"] = array();
//	carrera_materia
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="carrera_materia";
		$detailsParam["dOriginalTable"] = "carrera_materia";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "carrera_materia";
	$detailsParam["dCaptionTable"] = GetTableCaption("carrera_materia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["materias"][$dIndex] = $detailsParam;

	
		$detailsTablesData["materias"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["materias"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["materias"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["materias"][$dIndex]["detailKeys"][]="materia_id";
//	cursos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cursos";
		$detailsParam["dOriginalTable"] = "cursos";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cursos";
	$detailsParam["dCaptionTable"] = GetTableCaption("cursos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["materias"][$dIndex] = $detailsParam;

	
		$detailsTablesData["materias"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["materias"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["materias"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["materias"][$dIndex]["detailKeys"][]="materia_id";

// tables which are master tables for current table (detail)
$masterTablesData["materias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_materias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	descripcion";
$proto0["m_strFrom"] = "FROM materias";
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
	"m_strTable" => "materias",
	"m_srcTableName" => "materias"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "materias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "materias",
	"m_srcTableName" => "materias"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "materias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "materias",
	"m_srcTableName" => "materias"
));

$proto10["m_sql"] = "descripcion";
$proto10["m_srcTableName"] = "materias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "materias";
$proto13["m_srcTableName"] = "materias";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "nombre";
$proto13["m_columns"][] = "descripcion";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "materias";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "materias";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="materias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_materias = createSqlQuery_materias();


	
		;

			

$tdatamaterias[".sqlquery"] = $queryData_materias;

include_once(getabspath("include/materias_events.php"));
$tableEvents["materias"] = new eventclass_materias;
$tdatamaterias[".hasEvents"] = true;

?>