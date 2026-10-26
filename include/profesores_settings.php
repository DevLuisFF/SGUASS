<?php




$tdataprofesores = array();
$tdataprofesores[".searchableFields"] = array();
	$tdataprofesores[".truncateText"] = true;
	$tdataprofesores[".NumberOfChars"] = 80;
	$tdataprofesores[".ShortName"] = "profesores";
	$tdataprofesores[".OwnerID"] = "";
	$tdataprofesores[".OriginalTable"] = "profesores";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataprofesores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprofesores[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsprofesores = array();
$fieldToolTipsprofesores = array();
$pageTitlesprofesores = array();
$placeHoldersprofesores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprofesores["Spanish"] = array();
	$fieldToolTipsprofesores["Spanish"] = array();
	$placeHoldersprofesores["Spanish"] = array();
	$pageTitlesprofesores["Spanish"] = array();
	$fieldLabelsprofesores["Spanish"]["id"] = "Id";
	$fieldToolTipsprofesores["Spanish"]["id"] = "";
	$placeHoldersprofesores["Spanish"]["id"] = "";
	$fieldLabelsprofesores["Spanish"]["usuario_id"] = "	Nombre del Docente";
	$fieldToolTipsprofesores["Spanish"]["usuario_id"] = "";
	$placeHoldersprofesores["Spanish"]["usuario_id"] = "";
	$fieldLabelsprofesores["Spanish"]["especialidad"] = "Área / Especialidad";
	$fieldToolTipsprofesores["Spanish"]["especialidad"] = "";
	$placeHoldersprofesores["Spanish"]["especialidad"] = "";
	$fieldLabelsprofesores["Spanish"]["fecha_ingreso"] = "Fecha de Incorporación";
	$fieldToolTipsprofesores["Spanish"]["fecha_ingreso"] = "";
	$placeHoldersprofesores["Spanish"]["fecha_ingreso"] = "";
	if (count($fieldToolTipsprofesores["Spanish"]))
		$tdataprofesores[".isUseToolTips"] = true;
}


	$tdataprofesores[".NCSearch"] = true;



$tdataprofesores[".shortTableName"] = "profesores";
$tdataprofesores[".nSecOptions"] = 0;

$tdataprofesores[".mainTableOwnerID"] = "";
$tdataprofesores[".entityType"] = 0;

$tdataprofesores[".strOriginalTableName"] = "profesores";

	



$tdataprofesores[".showAddInPopup"] = false;

$tdataprofesores[".showEditInPopup"] = false;

$tdataprofesores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprofesores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprofesores[".listAjax"] = false;
//	temporary
$tdataprofesores[".listAjax"] = false;

	$tdataprofesores[".audit"] = false;

	$tdataprofesores[".locking"] = false;


$pages = $tdataprofesores[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprofesores[".edit"] = true;
	$tdataprofesores[".afterEditAction"] = 1;
	$tdataprofesores[".closePopupAfterEdit"] = 1;
	$tdataprofesores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprofesores[".add"] = true;
$tdataprofesores[".afterAddAction"] = 1;
$tdataprofesores[".closePopupAfterAdd"] = 1;
$tdataprofesores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprofesores[".list"] = true;
}



$tdataprofesores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprofesores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprofesores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprofesores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprofesores[".printFriendly"] = true;
}



$tdataprofesores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprofesores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprofesores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprofesores[".isUseAjaxSuggest"] = true;

$tdataprofesores[".rowHighlite"] = true;



																																																						
$tdataprofesores[".flexibleSearch"] = true;


$tdataprofesores[".ajaxCodeSnippetAdded"] = false;

$tdataprofesores[".buttonsAdded"] = false;

$tdataprofesores[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprofesores[".isUseTimeForSearch"] = false;


$tdataprofesores[".badgeColor"] = "4682B4";


$tdataprofesores[".allSearchFields"] = array();
$tdataprofesores[".filterFields"] = array();
$tdataprofesores[".requiredSearchFields"] = array();

$tdataprofesores[".googleLikeFields"] = array();
$tdataprofesores[".googleLikeFields"][] = "id";
$tdataprofesores[".googleLikeFields"][] = "usuario_id";
$tdataprofesores[".googleLikeFields"][] = "especialidad";
$tdataprofesores[".googleLikeFields"][] = "fecha_ingreso";



$tdataprofesores[".tableType"] = "list";

$tdataprofesores[".printerPageOrientation"] = 0;
$tdataprofesores[".nPrinterPageScale"] = 100;

$tdataprofesores[".nPrinterSplitRecords"] = 40;

$tdataprofesores[".nPrinterPDFSplitRecords"] = 40;


$tdataprofesores[".geocodingEnabled"] = false;










$tdataprofesores[".pageSize"] = 20;

$tdataprofesores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprofesores[".strOrderBy"] = $tstrOrderBy;

$tdataprofesores[".orderindexes"] = array();

$tdataprofesores[".sqlHead"] = "SELECT id,  	usuario_id,  	especialidad,  	fecha_ingreso";
$tdataprofesores[".sqlFrom"] = "FROM profesores";
$tdataprofesores[".sqlWhereExpr"] = "";
$tdataprofesores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprofesores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprofesores[".arrGroupsPerPage"] = $arrGPP;

$tdataprofesores[".highlightSearchResults"] = true;

$tableKeysprofesores = array();
$tableKeysprofesores[] = "id";
$tdataprofesores[".Keys"] = $tableKeysprofesores;


$tdataprofesores[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "profesores";
	$fdata["Label"] = GetFieldLabel("profesores","id");
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


	$tdataprofesores["id"] = $fdata;
		$tdataprofesores[".searchableFields"][] = "id";
//	usuario_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usuario_id";
	$fdata["GoodName"] = "usuario_id";
	$fdata["ownerTable"] = "profesores";
	$fdata["Label"] = GetFieldLabel("profesores","usuario_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usuario_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario_id";

	
	
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
	$edata["LookupTable"] = "usuarios";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT(nombre, ' — ', email)";

	

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


	$tdataprofesores["usuario_id"] = $fdata;
		$tdataprofesores[".searchableFields"][] = "usuario_id";
//	especialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "especialidad";
	$fdata["GoodName"] = "especialidad";
	$fdata["ownerTable"] = "profesores";
	$fdata["Label"] = GetFieldLabel("profesores","especialidad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "especialidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "especialidad";

	
	
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


	$tdataprofesores["especialidad"] = $fdata;
		$tdataprofesores[".searchableFields"][] = "especialidad";
//	fecha_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_ingreso";
	$fdata["GoodName"] = "fecha_ingreso";
	$fdata["ownerTable"] = "profesores";
	$fdata["Label"] = GetFieldLabel("profesores","fecha_ingreso");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_ingreso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ingreso";

	
	
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


	$tdataprofesores["fecha_ingreso"] = $fdata;
		$tdataprofesores[".searchableFields"][] = "fecha_ingreso";


$tables_data["profesores"]=&$tdataprofesores;
$field_labels["profesores"] = &$fieldLabelsprofesores;
$fieldToolTips["profesores"] = &$fieldToolTipsprofesores;
$placeHolders["profesores"] = &$placeHoldersprofesores;
$page_titles["profesores"] = &$pageTitlesprofesores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["profesores"] = array();
//	cursos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cursos";
		$detailsParam["dOriginalTable"] = "cursos";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cursos";
	$detailsParam["dCaptionTable"] = GetTableCaption("cursos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["profesores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["profesores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["profesores"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["profesores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["profesores"][$dIndex]["detailKeys"][]="profesor_id";

// tables which are master tables for current table (detail)
$masterTablesData["profesores"] = array();



	
				$strOriginalDetailsTable="usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["profesores"][0] = $masterParams;
				$masterTablesData["profesores"][0]["masterKeys"] = array();
	$masterTablesData["profesores"][0]["masterKeys"][]="id";
				$masterTablesData["profesores"][0]["detailKeys"] = array();
	$masterTablesData["profesores"][0]["detailKeys"][]="usuario_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_profesores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	usuario_id,  	especialidad,  	fecha_ingreso";
$proto0["m_strFrom"] = "FROM profesores";
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
	"m_strTable" => "profesores",
	"m_srcTableName" => "profesores"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "profesores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario_id",
	"m_strTable" => "profesores",
	"m_srcTableName" => "profesores"
));

$proto8["m_sql"] = "usuario_id";
$proto8["m_srcTableName"] = "profesores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "especialidad",
	"m_strTable" => "profesores",
	"m_srcTableName" => "profesores"
));

$proto10["m_sql"] = "especialidad";
$proto10["m_srcTableName"] = "profesores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ingreso",
	"m_strTable" => "profesores",
	"m_srcTableName" => "profesores"
));

$proto12["m_sql"] = "fecha_ingreso";
$proto12["m_srcTableName"] = "profesores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "profesores";
$proto15["m_srcTableName"] = "profesores";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "usuario_id";
$proto15["m_columns"][] = "especialidad";
$proto15["m_columns"][] = "fecha_ingreso";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "profesores";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "profesores";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="profesores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_profesores = createSqlQuery_profesores();


	
		;

				

$tdataprofesores[".sqlquery"] = $queryData_profesores;

include_once(getabspath("include/profesores_events.php"));
$tableEvents["profesores"] = new eventclass_profesores;
$tdataprofesores[".hasEvents"] = true;

?>