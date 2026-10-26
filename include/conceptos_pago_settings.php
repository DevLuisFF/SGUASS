<?php




$tdataconceptos_pago = array();
$tdataconceptos_pago[".searchableFields"] = array();
	$tdataconceptos_pago[".truncateText"] = true;
	$tdataconceptos_pago[".NumberOfChars"] = 80;
	$tdataconceptos_pago[".ShortName"] = "conceptos_pago";
	$tdataconceptos_pago[".OwnerID"] = "";
	$tdataconceptos_pago[".OriginalTable"] = "conceptos_pago";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataconceptos_pago[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconceptos_pago[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsconceptos_pago = array();
$fieldToolTipsconceptos_pago = array();
$pageTitlesconceptos_pago = array();
$placeHoldersconceptos_pago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconceptos_pago["Spanish"] = array();
	$fieldToolTipsconceptos_pago["Spanish"] = array();
	$placeHoldersconceptos_pago["Spanish"] = array();
	$pageTitlesconceptos_pago["Spanish"] = array();
	$fieldLabelsconceptos_pago["Spanish"]["id"] = "Id";
	$fieldToolTipsconceptos_pago["Spanish"]["id"] = "";
	$placeHoldersconceptos_pago["Spanish"]["id"] = "";
	$fieldLabelsconceptos_pago["Spanish"]["nombre"] = "Concepto / Arancel";
	$fieldToolTipsconceptos_pago["Spanish"]["nombre"] = "";
	$placeHoldersconceptos_pago["Spanish"]["nombre"] = "";
	$fieldLabelsconceptos_pago["Spanish"]["descripcion"] = "Detalle del Arancel";
	$fieldToolTipsconceptos_pago["Spanish"]["descripcion"] = "";
	$placeHoldersconceptos_pago["Spanish"]["descripcion"] = "";
	$fieldLabelsconceptos_pago["Spanish"]["monto"] = "Importe Base";
	$fieldToolTipsconceptos_pago["Spanish"]["monto"] = "";
	$placeHoldersconceptos_pago["Spanish"]["monto"] = "";
	if (count($fieldToolTipsconceptos_pago["Spanish"]))
		$tdataconceptos_pago[".isUseToolTips"] = true;
}


	$tdataconceptos_pago[".NCSearch"] = true;



$tdataconceptos_pago[".shortTableName"] = "conceptos_pago";
$tdataconceptos_pago[".nSecOptions"] = 0;

$tdataconceptos_pago[".mainTableOwnerID"] = "";
$tdataconceptos_pago[".entityType"] = 0;

$tdataconceptos_pago[".strOriginalTableName"] = "conceptos_pago";

	



$tdataconceptos_pago[".showAddInPopup"] = false;

$tdataconceptos_pago[".showEditInPopup"] = false;

$tdataconceptos_pago[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataconceptos_pago[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconceptos_pago[".listAjax"] = false;
//	temporary
$tdataconceptos_pago[".listAjax"] = false;

	$tdataconceptos_pago[".audit"] = false;

	$tdataconceptos_pago[".locking"] = false;


$pages = $tdataconceptos_pago[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconceptos_pago[".edit"] = true;
	$tdataconceptos_pago[".afterEditAction"] = 1;
	$tdataconceptos_pago[".closePopupAfterEdit"] = 1;
	$tdataconceptos_pago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconceptos_pago[".add"] = true;
$tdataconceptos_pago[".afterAddAction"] = 1;
$tdataconceptos_pago[".closePopupAfterAdd"] = 1;
$tdataconceptos_pago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconceptos_pago[".list"] = true;
}



$tdataconceptos_pago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconceptos_pago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconceptos_pago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconceptos_pago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconceptos_pago[".printFriendly"] = true;
}



$tdataconceptos_pago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconceptos_pago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconceptos_pago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconceptos_pago[".isUseAjaxSuggest"] = true;

$tdataconceptos_pago[".rowHighlite"] = true;



																											
$tdataconceptos_pago[".flexibleSearch"] = true;


$tdataconceptos_pago[".ajaxCodeSnippetAdded"] = false;

$tdataconceptos_pago[".buttonsAdded"] = false;

$tdataconceptos_pago[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconceptos_pago[".isUseTimeForSearch"] = false;


$tdataconceptos_pago[".badgeColor"] = "778899";


$tdataconceptos_pago[".allSearchFields"] = array();
$tdataconceptos_pago[".filterFields"] = array();
$tdataconceptos_pago[".requiredSearchFields"] = array();

$tdataconceptos_pago[".googleLikeFields"] = array();
$tdataconceptos_pago[".googleLikeFields"][] = "id";
$tdataconceptos_pago[".googleLikeFields"][] = "nombre";
$tdataconceptos_pago[".googleLikeFields"][] = "descripcion";
$tdataconceptos_pago[".googleLikeFields"][] = "monto";



$tdataconceptos_pago[".tableType"] = "list";

$tdataconceptos_pago[".printerPageOrientation"] = 0;
$tdataconceptos_pago[".nPrinterPageScale"] = 100;

$tdataconceptos_pago[".nPrinterSplitRecords"] = 40;

$tdataconceptos_pago[".nPrinterPDFSplitRecords"] = 40;


$tdataconceptos_pago[".geocodingEnabled"] = false;










$tdataconceptos_pago[".pageSize"] = 20;

$tdataconceptos_pago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconceptos_pago[".strOrderBy"] = $tstrOrderBy;

$tdataconceptos_pago[".orderindexes"] = array();

$tdataconceptos_pago[".sqlHead"] = "SELECT id,  	nombre,  	descripcion,  	monto";
$tdataconceptos_pago[".sqlFrom"] = "FROM conceptos_pago";
$tdataconceptos_pago[".sqlWhereExpr"] = "";
$tdataconceptos_pago[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconceptos_pago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconceptos_pago[".arrGroupsPerPage"] = $arrGPP;

$tdataconceptos_pago[".highlightSearchResults"] = true;

$tableKeysconceptos_pago = array();
$tableKeysconceptos_pago[] = "id";
$tdataconceptos_pago[".Keys"] = $tableKeysconceptos_pago;


$tdataconceptos_pago[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "conceptos_pago";
	$fdata["Label"] = GetFieldLabel("conceptos_pago","id");
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


	$tdataconceptos_pago["id"] = $fdata;
		$tdataconceptos_pago[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "conceptos_pago";
	$fdata["Label"] = GetFieldLabel("conceptos_pago","nombre");
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


	$tdataconceptos_pago["nombre"] = $fdata;
		$tdataconceptos_pago[".searchableFields"][] = "nombre";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "conceptos_pago";
	$fdata["Label"] = GetFieldLabel("conceptos_pago","descripcion");
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


	$tdataconceptos_pago["descripcion"] = $fdata;
		$tdataconceptos_pago[".searchableFields"][] = "descripcion";
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "conceptos_pago";
	$fdata["Label"] = GetFieldLabel("conceptos_pago","monto");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "monto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataconceptos_pago["monto"] = $fdata;
		$tdataconceptos_pago[".searchableFields"][] = "monto";


$tables_data["conceptos_pago"]=&$tdataconceptos_pago;
$field_labels["conceptos_pago"] = &$fieldLabelsconceptos_pago;
$fieldToolTips["conceptos_pago"] = &$fieldToolTipsconceptos_pago;
$placeHolders["conceptos_pago"] = &$placeHoldersconceptos_pago;
$page_titles["conceptos_pago"] = &$pageTitlesconceptos_pago;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["conceptos_pago"] = array();
//	pagos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pagos";
		$detailsParam["dOriginalTable"] = "pagos";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pagos";
	$detailsParam["dCaptionTable"] = GetTableCaption("pagos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["conceptos_pago"][$dIndex] = $detailsParam;

	
		$detailsTablesData["conceptos_pago"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["conceptos_pago"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["conceptos_pago"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["conceptos_pago"][$dIndex]["detailKeys"][]="concepto_id";

// tables which are master tables for current table (detail)
$masterTablesData["conceptos_pago"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_conceptos_pago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	descripcion,  	monto";
$proto0["m_strFrom"] = "FROM conceptos_pago";
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
	"m_strTable" => "conceptos_pago",
	"m_srcTableName" => "conceptos_pago"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "conceptos_pago";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "conceptos_pago",
	"m_srcTableName" => "conceptos_pago"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "conceptos_pago";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "conceptos_pago",
	"m_srcTableName" => "conceptos_pago"
));

$proto10["m_sql"] = "descripcion";
$proto10["m_srcTableName"] = "conceptos_pago";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "conceptos_pago",
	"m_srcTableName" => "conceptos_pago"
));

$proto12["m_sql"] = "monto";
$proto12["m_srcTableName"] = "conceptos_pago";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "conceptos_pago";
$proto15["m_srcTableName"] = "conceptos_pago";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "nombre";
$proto15["m_columns"][] = "descripcion";
$proto15["m_columns"][] = "monto";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "conceptos_pago";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "conceptos_pago";
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
$proto0["m_srcTableName"]="conceptos_pago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conceptos_pago = createSqlQuery_conceptos_pago();


	
		;

				

$tdataconceptos_pago[".sqlquery"] = $queryData_conceptos_pago;

include_once(getabspath("include/conceptos_pago_events.php"));
$tableEvents["conceptos_pago"] = new eventclass_conceptos_pago;
$tdataconceptos_pago[".hasEvents"] = true;

?>