<?php




$tdatacarrera_materia = array();
$tdatacarrera_materia[".searchableFields"] = array();
	$tdatacarrera_materia[".truncateText"] = true;
	$tdatacarrera_materia[".NumberOfChars"] = 80;
	$tdatacarrera_materia[".ShortName"] = "carrera_materia";
	$tdatacarrera_materia[".OwnerID"] = "";
	$tdatacarrera_materia[".OriginalTable"] = "carrera_materia";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacarrera_materia[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacarrera_materia[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscarrera_materia = array();
$fieldToolTipscarrera_materia = array();
$pageTitlescarrera_materia = array();
$placeHolderscarrera_materia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarrera_materia["Spanish"] = array();
	$fieldToolTipscarrera_materia["Spanish"] = array();
	$placeHolderscarrera_materia["Spanish"] = array();
	$pageTitlescarrera_materia["Spanish"] = array();
	$fieldLabelscarrera_materia["Spanish"]["id"] = "Id";
	$fieldToolTipscarrera_materia["Spanish"]["id"] = "";
	$placeHolderscarrera_materia["Spanish"]["id"] = "";
	$fieldLabelscarrera_materia["Spanish"]["carrera_id"] = "Carrera";
	$fieldToolTipscarrera_materia["Spanish"]["carrera_id"] = "";
	$placeHolderscarrera_materia["Spanish"]["carrera_id"] = "";
	$fieldLabelscarrera_materia["Spanish"]["materia_id"] = "Asignatura";
	$fieldToolTipscarrera_materia["Spanish"]["materia_id"] = "";
	$placeHolderscarrera_materia["Spanish"]["materia_id"] = "";
	$fieldLabelscarrera_materia["Spanish"]["semestre"] = "Semestre / Nivel Académico";
	$fieldToolTipscarrera_materia["Spanish"]["semestre"] = "";
	$placeHolderscarrera_materia["Spanish"]["semestre"] = "";
	if (count($fieldToolTipscarrera_materia["Spanish"]))
		$tdatacarrera_materia[".isUseToolTips"] = true;
}


	$tdatacarrera_materia[".NCSearch"] = true;



$tdatacarrera_materia[".shortTableName"] = "carrera_materia";
$tdatacarrera_materia[".nSecOptions"] = 0;

$tdatacarrera_materia[".mainTableOwnerID"] = "";
$tdatacarrera_materia[".entityType"] = 0;

$tdatacarrera_materia[".strOriginalTableName"] = "carrera_materia";

	



$tdatacarrera_materia[".showAddInPopup"] = false;

$tdatacarrera_materia[".showEditInPopup"] = false;

$tdatacarrera_materia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarrera_materia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarrera_materia[".listAjax"] = false;
//	temporary
$tdatacarrera_materia[".listAjax"] = false;

	$tdatacarrera_materia[".audit"] = false;

	$tdatacarrera_materia[".locking"] = false;


$pages = $tdatacarrera_materia[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarrera_materia[".edit"] = true;
	$tdatacarrera_materia[".afterEditAction"] = 1;
	$tdatacarrera_materia[".closePopupAfterEdit"] = 1;
	$tdatacarrera_materia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarrera_materia[".add"] = true;
$tdatacarrera_materia[".afterAddAction"] = 1;
$tdatacarrera_materia[".closePopupAfterAdd"] = 1;
$tdatacarrera_materia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarrera_materia[".list"] = true;
}



$tdatacarrera_materia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarrera_materia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarrera_materia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarrera_materia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarrera_materia[".printFriendly"] = true;
}



$tdatacarrera_materia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarrera_materia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarrera_materia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarrera_materia[".isUseAjaxSuggest"] = true;

$tdatacarrera_materia[".rowHighlite"] = true;



																																																																																	
$tdatacarrera_materia[".flexibleSearch"] = true;


$tdatacarrera_materia[".ajaxCodeSnippetAdded"] = false;

$tdatacarrera_materia[".buttonsAdded"] = false;

$tdatacarrera_materia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarrera_materia[".isUseTimeForSearch"] = false;


$tdatacarrera_materia[".badgeColor"] = "3CB371";


$tdatacarrera_materia[".allSearchFields"] = array();
$tdatacarrera_materia[".filterFields"] = array();
$tdatacarrera_materia[".requiredSearchFields"] = array();

$tdatacarrera_materia[".googleLikeFields"] = array();
$tdatacarrera_materia[".googleLikeFields"][] = "id";
$tdatacarrera_materia[".googleLikeFields"][] = "carrera_id";
$tdatacarrera_materia[".googleLikeFields"][] = "materia_id";
$tdatacarrera_materia[".googleLikeFields"][] = "semestre";



$tdatacarrera_materia[".tableType"] = "list";

$tdatacarrera_materia[".printerPageOrientation"] = 0;
$tdatacarrera_materia[".nPrinterPageScale"] = 100;

$tdatacarrera_materia[".nPrinterSplitRecords"] = 40;

$tdatacarrera_materia[".nPrinterPDFSplitRecords"] = 40;


$tdatacarrera_materia[".geocodingEnabled"] = false;










$tdatacarrera_materia[".pageSize"] = 20;

$tdatacarrera_materia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarrera_materia[".strOrderBy"] = $tstrOrderBy;

$tdatacarrera_materia[".orderindexes"] = array();

$tdatacarrera_materia[".sqlHead"] = "SELECT id,  	carrera_id,  	materia_id,  	semestre";
$tdatacarrera_materia[".sqlFrom"] = "FROM carrera_materia";
$tdatacarrera_materia[".sqlWhereExpr"] = "";
$tdatacarrera_materia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarrera_materia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarrera_materia[".arrGroupsPerPage"] = $arrGPP;

$tdatacarrera_materia[".highlightSearchResults"] = true;

$tableKeyscarrera_materia = array();
$tableKeyscarrera_materia[] = "id";
$tdatacarrera_materia[".Keys"] = $tableKeyscarrera_materia;


$tdatacarrera_materia[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carrera_materia";
	$fdata["Label"] = GetFieldLabel("carrera_materia","id");
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


	$tdatacarrera_materia["id"] = $fdata;
		$tdatacarrera_materia[".searchableFields"][] = "id";
//	carrera_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "carrera_id";
	$fdata["GoodName"] = "carrera_id";
	$fdata["ownerTable"] = "carrera_materia";
	$fdata["Label"] = GetFieldLabel("carrera_materia","carrera_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "carrera_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carrera_id";

	
	
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
	$edata["LookupTable"] = "carreras";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatacarrera_materia["carrera_id"] = $fdata;
		$tdatacarrera_materia[".searchableFields"][] = "carrera_id";
//	materia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "materia_id";
	$fdata["GoodName"] = "materia_id";
	$fdata["ownerTable"] = "carrera_materia";
	$fdata["Label"] = GetFieldLabel("carrera_materia","materia_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "materia_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "materia_id";

	
	
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
	$edata["LookupTable"] = "materias";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT(nombre, IF(descripcion IS NOT NULL AND descripcion != '', CONCAT(' (', SUBSTRING(descripcion, 1, 40), '...)'), ''))";

	

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


	$tdatacarrera_materia["materia_id"] = $fdata;
		$tdatacarrera_materia[".searchableFields"][] = "materia_id";
//	semestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "semestre";
	$fdata["GoodName"] = "semestre";
	$fdata["ownerTable"] = "carrera_materia";
	$fdata["Label"] = GetFieldLabel("carrera_materia","semestre");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "semestre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "semestre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

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
	$edata["LookupValues"][] = "1° Semestre";
	$edata["LookupValues"][] = "2° Semestre";
	$edata["LookupValues"][] = "3° Semestre";
	$edata["LookupValues"][] = "4° Semestre";
	$edata["LookupValues"][] = "5° Semestre";
	$edata["LookupValues"][] = "6° Semestre";
	$edata["LookupValues"][] = "7° Semestre";
	$edata["LookupValues"][] = "8° Semestre";
	$edata["LookupValues"][] = "9° Semestre";
	$edata["LookupValues"][] = "10° Semestre";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
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


	$tdatacarrera_materia["semestre"] = $fdata;
		$tdatacarrera_materia[".searchableFields"][] = "semestre";


$tables_data["carrera_materia"]=&$tdatacarrera_materia;
$field_labels["carrera_materia"] = &$fieldLabelscarrera_materia;
$fieldToolTips["carrera_materia"] = &$fieldToolTipscarrera_materia;
$placeHolders["carrera_materia"] = &$placeHolderscarrera_materia;
$page_titles["carrera_materia"] = &$pageTitlescarrera_materia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carrera_materia"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carrera_materia"] = array();



	
				$strOriginalDetailsTable="carreras";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="carreras";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "carreras";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["carrera_materia"][0] = $masterParams;
				$masterTablesData["carrera_materia"][0]["masterKeys"] = array();
	$masterTablesData["carrera_materia"][0]["masterKeys"][]="id";
				$masterTablesData["carrera_materia"][0]["detailKeys"] = array();
	$masterTablesData["carrera_materia"][0]["detailKeys"][]="carrera_id";
		
	
				$strOriginalDetailsTable="materias";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="materias";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "materias";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["carrera_materia"][1] = $masterParams;
				$masterTablesData["carrera_materia"][1]["masterKeys"] = array();
	$masterTablesData["carrera_materia"][1]["masterKeys"][]="id";
				$masterTablesData["carrera_materia"][1]["detailKeys"] = array();
	$masterTablesData["carrera_materia"][1]["detailKeys"][]="materia_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_carrera_materia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	carrera_id,  	materia_id,  	semestre";
$proto0["m_strFrom"] = "FROM carrera_materia";
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
	"m_strTable" => "carrera_materia",
	"m_srcTableName" => "carrera_materia"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "carrera_materia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "carrera_id",
	"m_strTable" => "carrera_materia",
	"m_srcTableName" => "carrera_materia"
));

$proto8["m_sql"] = "carrera_id";
$proto8["m_srcTableName"] = "carrera_materia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "materia_id",
	"m_strTable" => "carrera_materia",
	"m_srcTableName" => "carrera_materia"
));

$proto10["m_sql"] = "materia_id";
$proto10["m_srcTableName"] = "carrera_materia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "semestre",
	"m_strTable" => "carrera_materia",
	"m_srcTableName" => "carrera_materia"
));

$proto12["m_sql"] = "semestre";
$proto12["m_srcTableName"] = "carrera_materia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "carrera_materia";
$proto15["m_srcTableName"] = "carrera_materia";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "carrera_id";
$proto15["m_columns"][] = "materia_id";
$proto15["m_columns"][] = "semestre";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "carrera_materia";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "carrera_materia";
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
$proto0["m_srcTableName"]="carrera_materia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carrera_materia = createSqlQuery_carrera_materia();


	
		;

				

$tdatacarrera_materia[".sqlquery"] = $queryData_carrera_materia;

include_once(getabspath("include/carrera_materia_events.php"));
$tableEvents["carrera_materia"] = new eventclass_carrera_materia;
$tdatacarrera_materia[".hasEvents"] = true;

?>