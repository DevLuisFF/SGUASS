<?php




$tdatausuarios = array();
$tdatausuarios[".searchableFields"] = array();
	$tdatausuarios[".truncateText"] = true;
	$tdatausuarios[".NumberOfChars"] = 80;
	$tdatausuarios[".ShortName"] = "usuarios";
	$tdatausuarios[".OwnerID"] = "";
	$tdatausuarios[".OriginalTable"] = "usuarios";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatausuarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausuarios[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsusuarios = array();
$fieldToolTipsusuarios = array();
$pageTitlesusuarios = array();
$placeHoldersusuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuarios["Spanish"] = array();
	$fieldToolTipsusuarios["Spanish"] = array();
	$placeHoldersusuarios["Spanish"] = array();
	$pageTitlesusuarios["Spanish"] = array();
	$fieldLabelsusuarios["Spanish"]["id"] = "Id";
	$fieldToolTipsusuarios["Spanish"]["id"] = "";
	$placeHoldersusuarios["Spanish"]["id"] = "";
	$fieldLabelsusuarios["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsusuarios["Spanish"]["nombre"] = "";
	$placeHoldersusuarios["Spanish"]["nombre"] = "";
	$fieldLabelsusuarios["Spanish"]["email"] = "Email";
	$fieldToolTipsusuarios["Spanish"]["email"] = "";
	$placeHoldersusuarios["Spanish"]["email"] = "";
	$fieldLabelsusuarios["Spanish"]["password"] = "Password";
	$fieldToolTipsusuarios["Spanish"]["password"] = "";
	$placeHoldersusuarios["Spanish"]["password"] = "";
	$fieldLabelsusuarios["Spanish"]["activo"] = "Activo";
	$fieldToolTipsusuarios["Spanish"]["activo"] = "";
	$placeHoldersusuarios["Spanish"]["activo"] = "";
	$fieldLabelsusuarios["Spanish"]["creado_en"] = "Creado En";
	$fieldToolTipsusuarios["Spanish"]["creado_en"] = "";
	$placeHoldersusuarios["Spanish"]["creado_en"] = "";
	if (count($fieldToolTipsusuarios["Spanish"]))
		$tdatausuarios[".isUseToolTips"] = true;
}


	$tdatausuarios[".NCSearch"] = true;



$tdatausuarios[".shortTableName"] = "usuarios";
$tdatausuarios[".nSecOptions"] = 0;

$tdatausuarios[".mainTableOwnerID"] = "";
$tdatausuarios[".entityType"] = 0;

$tdatausuarios[".strOriginalTableName"] = "usuarios";

	



$tdatausuarios[".showAddInPopup"] = false;

$tdatausuarios[".showEditInPopup"] = false;

$tdatausuarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausuarios[".listAjax"] = false;
//	temporary
$tdatausuarios[".listAjax"] = false;

	$tdatausuarios[".audit"] = false;

	$tdatausuarios[".locking"] = false;


$pages = $tdatausuarios[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuarios[".edit"] = true;
	$tdatausuarios[".afterEditAction"] = 1;
	$tdatausuarios[".closePopupAfterEdit"] = 1;
	$tdatausuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuarios[".add"] = true;
$tdatausuarios[".afterAddAction"] = 1;
$tdatausuarios[".closePopupAfterAdd"] = 1;
$tdatausuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuarios[".list"] = true;
}



$tdatausuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuarios[".printFriendly"] = true;
}



$tdatausuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuarios[".isUseAjaxSuggest"] = true;

$tdatausuarios[".rowHighlite"] = true;



																											
$tdatausuarios[".flexibleSearch"] = true;


$tdatausuarios[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios[".buttonsAdded"] = false;

$tdatausuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios[".isUseTimeForSearch"] = false;


$tdatausuarios[".badgeColor"] = "CD5C5C";


$tdatausuarios[".allSearchFields"] = array();
$tdatausuarios[".filterFields"] = array();
$tdatausuarios[".requiredSearchFields"] = array();

$tdatausuarios[".googleLikeFields"] = array();
$tdatausuarios[".googleLikeFields"][] = "id";
$tdatausuarios[".googleLikeFields"][] = "nombre";
$tdatausuarios[".googleLikeFields"][] = "email";
$tdatausuarios[".googleLikeFields"][] = "password";
$tdatausuarios[".googleLikeFields"][] = "activo";
$tdatausuarios[".googleLikeFields"][] = "creado_en";



$tdatausuarios[".tableType"] = "list";

$tdatausuarios[".printerPageOrientation"] = 0;
$tdatausuarios[".nPrinterPageScale"] = 100;

$tdatausuarios[".nPrinterSplitRecords"] = 40;

$tdatausuarios[".nPrinterPDFSplitRecords"] = 40;


$tdatausuarios[".geocodingEnabled"] = false;










$tdatausuarios[".pageSize"] = 20;

$tdatausuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausuarios[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios[".orderindexes"] = array();

$tdatausuarios[".sqlHead"] = "SELECT id,  	nombre,  	email,  	password,  	activo,  	creado_en";
$tdatausuarios[".sqlFrom"] = "FROM usuarios";
$tdatausuarios[".sqlWhereExpr"] = "";
$tdatausuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios[".highlightSearchResults"] = true;

$tableKeysusuarios = array();
$tableKeysusuarios[] = "id";
$tdatausuarios[".Keys"] = $tableKeysusuarios;


$tdatausuarios[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","id");
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


	$tdatausuarios["id"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","nombre");
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


	$tdatausuarios["nombre"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "nombre";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatausuarios["email"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "email";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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


	$tdatausuarios["password"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "password";
//	activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "activo";
	$fdata["GoodName"] = "activo";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","activo");
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


	$tdatausuarios["activo"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "activo";
//	creado_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creado_en";
	$fdata["GoodName"] = "creado_en";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","creado_en");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "creado_en";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creado_en";

	
	
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


	$tdatausuarios["creado_en"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "creado_en";


$tables_data["usuarios"]=&$tdatausuarios;
$field_labels["usuarios"] = &$fieldLabelsusuarios;
$fieldToolTips["usuarios"] = &$fieldToolTipsusuarios;
$placeHolders["usuarios"] = &$placeHoldersusuarios;
$page_titles["usuarios"] = &$pageTitlesusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usuarios"] = array();
//	estudiantes
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="estudiantes";
		$detailsParam["dOriginalTable"] = "estudiantes";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "estudiantes";
	$detailsParam["dCaptionTable"] = GetTableCaption("estudiantes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["usuarios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["usuarios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["usuarios"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["usuarios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["usuarios"][$dIndex]["detailKeys"][]="usuario_id";
//	profesores
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="profesores";
		$detailsParam["dOriginalTable"] = "profesores";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "profesores";
	$detailsParam["dCaptionTable"] = GetTableCaption("profesores");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["usuarios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["usuarios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["usuarios"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["usuarios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["usuarios"][$dIndex]["detailKeys"][]="usuario_id";

// tables which are master tables for current table (detail)
$masterTablesData["usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	email,  	password,  	activo,  	creado_en";
$proto0["m_strFrom"] = "FROM usuarios";
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
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto12["m_sql"] = "password";
$proto12["m_srcTableName"] = "usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "activo",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto14["m_sql"] = "activo";
$proto14["m_srcTableName"] = "usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_en",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto16["m_sql"] = "creado_en";
$proto16["m_srcTableName"] = "usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "usuarios";
$proto19["m_srcTableName"] = "usuarios";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "nombre";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "password";
$proto19["m_columns"][] = "activo";
$proto19["m_columns"][] = "creado_en";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "usuarios";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "usuarios";
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
$proto0["m_srcTableName"]="usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios = createSqlQuery_usuarios();


	
		;

						

$tdatausuarios[".sqlquery"] = $queryData_usuarios;

include_once(getabspath("include/usuarios_events.php"));
$tableEvents["usuarios"] = new eventclass_usuarios;
$tdatausuarios[".hasEvents"] = true;

?>