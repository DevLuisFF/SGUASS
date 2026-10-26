<?php




$tdataperiodos = array();
$tdataperiodos[".searchableFields"] = array();
	$tdataperiodos[".truncateText"] = true;
	$tdataperiodos[".NumberOfChars"] = 80;
	$tdataperiodos[".ShortName"] = "periodos";
	$tdataperiodos[".OwnerID"] = "";
	$tdataperiodos[".OriginalTable"] = "periodos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataperiodos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataperiodos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsperiodos = array();
$fieldToolTipsperiodos = array();
$pageTitlesperiodos = array();
$placeHoldersperiodos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsperiodos["Spanish"] = array();
	$fieldToolTipsperiodos["Spanish"] = array();
	$placeHoldersperiodos["Spanish"] = array();
	$pageTitlesperiodos["Spanish"] = array();
	$fieldLabelsperiodos["Spanish"]["id"] = "Id";
	$fieldToolTipsperiodos["Spanish"]["id"] = "";
	$placeHoldersperiodos["Spanish"]["id"] = "";
	$fieldLabelsperiodos["Spanish"]["nombre"] = "Periodo Lectivo (ej. 2026-1)";
	$fieldToolTipsperiodos["Spanish"]["nombre"] = "";
	$placeHoldersperiodos["Spanish"]["nombre"] = "";
	$fieldLabelsperiodos["Spanish"]["fecha_inicio"] = "	Fecha de Apertura";
	$fieldToolTipsperiodos["Spanish"]["fecha_inicio"] = "";
	$placeHoldersperiodos["Spanish"]["fecha_inicio"] = "";
	$fieldLabelsperiodos["Spanish"]["fecha_fin"] = "Fecha de Clausura";
	$fieldToolTipsperiodos["Spanish"]["fecha_fin"] = "";
	$placeHoldersperiodos["Spanish"]["fecha_fin"] = "";
	$fieldLabelsperiodos["Spanish"]["activo"] = "Periodo Vigente";
	$fieldToolTipsperiodos["Spanish"]["activo"] = "";
	$placeHoldersperiodos["Spanish"]["activo"] = "";
	if (count($fieldToolTipsperiodos["Spanish"]))
		$tdataperiodos[".isUseToolTips"] = true;
}


	$tdataperiodos[".NCSearch"] = true;



$tdataperiodos[".shortTableName"] = "periodos";
$tdataperiodos[".nSecOptions"] = 0;

$tdataperiodos[".mainTableOwnerID"] = "";
$tdataperiodos[".entityType"] = 0;

$tdataperiodos[".strOriginalTableName"] = "periodos";

	



$tdataperiodos[".showAddInPopup"] = false;

$tdataperiodos[".showEditInPopup"] = false;

$tdataperiodos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataperiodos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataperiodos[".listAjax"] = false;
//	temporary
$tdataperiodos[".listAjax"] = false;

	$tdataperiodos[".audit"] = false;

	$tdataperiodos[".locking"] = false;


$pages = $tdataperiodos[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperiodos[".edit"] = true;
	$tdataperiodos[".afterEditAction"] = 1;
	$tdataperiodos[".closePopupAfterEdit"] = 1;
	$tdataperiodos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperiodos[".add"] = true;
$tdataperiodos[".afterAddAction"] = 1;
$tdataperiodos[".closePopupAfterAdd"] = 1;
$tdataperiodos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperiodos[".list"] = true;
}



$tdataperiodos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperiodos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperiodos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperiodos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperiodos[".printFriendly"] = true;
}



$tdataperiodos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperiodos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperiodos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperiodos[".isUseAjaxSuggest"] = true;

$tdataperiodos[".rowHighlite"] = true;



																											
$tdataperiodos[".flexibleSearch"] = true;


$tdataperiodos[".ajaxCodeSnippetAdded"] = false;

$tdataperiodos[".buttonsAdded"] = false;

$tdataperiodos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperiodos[".isUseTimeForSearch"] = false;


$tdataperiodos[".badgeColor"] = "CD5C5C";


$tdataperiodos[".allSearchFields"] = array();
$tdataperiodos[".filterFields"] = array();
$tdataperiodos[".requiredSearchFields"] = array();

$tdataperiodos[".googleLikeFields"] = array();
$tdataperiodos[".googleLikeFields"][] = "id";
$tdataperiodos[".googleLikeFields"][] = "nombre";
$tdataperiodos[".googleLikeFields"][] = "fecha_inicio";
$tdataperiodos[".googleLikeFields"][] = "fecha_fin";
$tdataperiodos[".googleLikeFields"][] = "activo";



$tdataperiodos[".tableType"] = "list";

$tdataperiodos[".printerPageOrientation"] = 0;
$tdataperiodos[".nPrinterPageScale"] = 100;

$tdataperiodos[".nPrinterSplitRecords"] = 40;

$tdataperiodos[".nPrinterPDFSplitRecords"] = 40;


$tdataperiodos[".geocodingEnabled"] = false;










$tdataperiodos[".pageSize"] = 20;

$tdataperiodos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataperiodos[".strOrderBy"] = $tstrOrderBy;

$tdataperiodos[".orderindexes"] = array();

$tdataperiodos[".sqlHead"] = "SELECT id,  	nombre,  	fecha_inicio,  	fecha_fin,  	activo";
$tdataperiodos[".sqlFrom"] = "FROM periodos";
$tdataperiodos[".sqlWhereExpr"] = "";
$tdataperiodos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperiodos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperiodos[".arrGroupsPerPage"] = $arrGPP;

$tdataperiodos[".highlightSearchResults"] = true;

$tableKeysperiodos = array();
$tableKeysperiodos[] = "id";
$tdataperiodos[".Keys"] = $tableKeysperiodos;


$tdataperiodos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "periodos";
	$fdata["Label"] = GetFieldLabel("periodos","id");
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


	$tdataperiodos["id"] = $fdata;
		$tdataperiodos[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "periodos";
	$fdata["Label"] = GetFieldLabel("periodos","nombre");
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


	$tdataperiodos["nombre"] = $fdata;
		$tdataperiodos[".searchableFields"][] = "nombre";
//	fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_inicio";
	$fdata["GoodName"] = "fecha_inicio";
	$fdata["ownerTable"] = "periodos";
	$fdata["Label"] = GetFieldLabel("periodos","fecha_inicio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_inicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_inicio";

	
	
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

	
	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataperiodos["fecha_inicio"] = $fdata;
		$tdataperiodos[".searchableFields"][] = "fecha_inicio";
//	fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_fin";
	$fdata["GoodName"] = "fecha_fin";
	$fdata["ownerTable"] = "periodos";
	$fdata["Label"] = GetFieldLabel("periodos","fecha_fin");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_fin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_fin";

	
	
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

	
	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataperiodos["fecha_fin"] = $fdata;
		$tdataperiodos[".searchableFields"][] = "fecha_fin";
//	activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "activo";
	$fdata["GoodName"] = "activo";
	$fdata["ownerTable"] = "periodos";
	$fdata["Label"] = GetFieldLabel("periodos","activo");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "activo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activo";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Sí";
	$edata["LookupValues"][] = "No";

	
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


	$tdataperiodos["activo"] = $fdata;
		$tdataperiodos[".searchableFields"][] = "activo";


$tables_data["periodos"]=&$tdataperiodos;
$field_labels["periodos"] = &$fieldLabelsperiodos;
$fieldToolTips["periodos"] = &$fieldToolTipsperiodos;
$placeHolders["periodos"] = &$placeHoldersperiodos;
$page_titles["periodos"] = &$pageTitlesperiodos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["periodos"] = array();
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


		
	$detailsTablesData["periodos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["periodos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["periodos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["periodos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["periodos"][$dIndex]["detailKeys"][]="periodo_id";
//	pagos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pagos";
		$detailsParam["dOriginalTable"] = "pagos";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pagos";
	$detailsParam["dCaptionTable"] = GetTableCaption("pagos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["periodos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["periodos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["periodos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["periodos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["periodos"][$dIndex]["detailKeys"][]="periodo_id";

// tables which are master tables for current table (detail)
$masterTablesData["periodos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_periodos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	fecha_inicio,  	fecha_fin,  	activo";
$proto0["m_strFrom"] = "FROM periodos";
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
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "periodos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "periodos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inicio",
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos"
));

$proto10["m_sql"] = "fecha_inicio";
$proto10["m_srcTableName"] = "periodos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_fin",
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos"
));

$proto12["m_sql"] = "fecha_fin";
$proto12["m_srcTableName"] = "periodos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "activo",
	"m_strTable" => "periodos",
	"m_srcTableName" => "periodos"
));

$proto14["m_sql"] = "activo";
$proto14["m_srcTableName"] = "periodos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "periodos";
$proto17["m_srcTableName"] = "periodos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "fecha_inicio";
$proto17["m_columns"][] = "fecha_fin";
$proto17["m_columns"][] = "activo";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "periodos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "periodos";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="periodos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_periodos = createSqlQuery_periodos();


	
		;

					

$tdataperiodos[".sqlquery"] = $queryData_periodos;

include_once(getabspath("include/periodos_events.php"));
$tableEvents["periodos"] = new eventclass_periodos;
$tdataperiodos[".hasEvents"] = true;

?>