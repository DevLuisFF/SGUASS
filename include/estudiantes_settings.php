<?php




$tdataestudiantes = array();
$tdataestudiantes[".searchableFields"] = array();
	$tdataestudiantes[".truncateText"] = true;
	$tdataestudiantes[".NumberOfChars"] = 80;
	$tdataestudiantes[".ShortName"] = "estudiantes";
	$tdataestudiantes[".OwnerID"] = "";
	$tdataestudiantes[".OriginalTable"] = "estudiantes";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataestudiantes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataestudiantes[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsestudiantes = array();
$fieldToolTipsestudiantes = array();
$pageTitlesestudiantes = array();
$placeHoldersestudiantes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsestudiantes["Spanish"] = array();
	$fieldToolTipsestudiantes["Spanish"] = array();
	$placeHoldersestudiantes["Spanish"] = array();
	$pageTitlesestudiantes["Spanish"] = array();
	$fieldLabelsestudiantes["Spanish"]["id"] = "Id";
	$fieldToolTipsestudiantes["Spanish"]["id"] = "";
	$placeHoldersestudiantes["Spanish"]["id"] = "";
	$fieldLabelsestudiantes["Spanish"]["usuario_id"] = "Nombre y Correo";
	$fieldToolTipsestudiantes["Spanish"]["usuario_id"] = "";
	$placeHoldersestudiantes["Spanish"]["usuario_id"] = "";
	$fieldLabelsestudiantes["Spanish"]["matricula"] = "N° de Matrícula";
	$fieldToolTipsestudiantes["Spanish"]["matricula"] = "";
	$placeHoldersestudiantes["Spanish"]["matricula"] = "";
	$fieldLabelsestudiantes["Spanish"]["carrera_id"] = "Carrera";
	$fieldToolTipsestudiantes["Spanish"]["carrera_id"] = "";
	$placeHoldersestudiantes["Spanish"]["carrera_id"] = "";
	$fieldLabelsestudiantes["Spanish"]["fecha_ingreso"] = "Fecha Ingreso";
	$fieldToolTipsestudiantes["Spanish"]["fecha_ingreso"] = "";
	$placeHoldersestudiantes["Spanish"]["fecha_ingreso"] = "";
	$fieldLabelsestudiantes["Spanish"]["numero_cedula"] = "N° de Cédula de Identidad";
	$fieldToolTipsestudiantes["Spanish"]["numero_cedula"] = "";
	$placeHoldersestudiantes["Spanish"]["numero_cedula"] = "";
	if (count($fieldToolTipsestudiantes["Spanish"]))
		$tdataestudiantes[".isUseToolTips"] = true;
}


	$tdataestudiantes[".NCSearch"] = true;



$tdataestudiantes[".shortTableName"] = "estudiantes";
$tdataestudiantes[".nSecOptions"] = 0;

$tdataestudiantes[".mainTableOwnerID"] = "";
$tdataestudiantes[".entityType"] = 0;

$tdataestudiantes[".strOriginalTableName"] = "estudiantes";

	



$tdataestudiantes[".showAddInPopup"] = false;

$tdataestudiantes[".showEditInPopup"] = false;

$tdataestudiantes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataestudiantes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataestudiantes[".listAjax"] = false;
//	temporary
$tdataestudiantes[".listAjax"] = false;

	$tdataestudiantes[".audit"] = false;

	$tdataestudiantes[".locking"] = false;


$pages = $tdataestudiantes[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataestudiantes[".edit"] = true;
	$tdataestudiantes[".afterEditAction"] = 1;
	$tdataestudiantes[".closePopupAfterEdit"] = 1;
	$tdataestudiantes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataestudiantes[".add"] = true;
$tdataestudiantes[".afterAddAction"] = 1;
$tdataestudiantes[".closePopupAfterAdd"] = 1;
$tdataestudiantes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataestudiantes[".list"] = true;
}



$tdataestudiantes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataestudiantes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataestudiantes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataestudiantes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataestudiantes[".printFriendly"] = true;
}



$tdataestudiantes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataestudiantes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataestudiantes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataestudiantes[".isUseAjaxSuggest"] = true;

$tdataestudiantes[".rowHighlite"] = true;



																																																																																	
$tdataestudiantes[".flexibleSearch"] = true;


$tdataestudiantes[".ajaxCodeSnippetAdded"] = false;

$tdataestudiantes[".buttonsAdded"] = false;

$tdataestudiantes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestudiantes[".isUseTimeForSearch"] = false;


$tdataestudiantes[".badgeColor"] = "CFAE83";


$tdataestudiantes[".allSearchFields"] = array();
$tdataestudiantes[".filterFields"] = array();
$tdataestudiantes[".requiredSearchFields"] = array();

$tdataestudiantes[".googleLikeFields"] = array();
$tdataestudiantes[".googleLikeFields"][] = "id";
$tdataestudiantes[".googleLikeFields"][] = "usuario_id";
$tdataestudiantes[".googleLikeFields"][] = "matricula";
$tdataestudiantes[".googleLikeFields"][] = "carrera_id";
$tdataestudiantes[".googleLikeFields"][] = "fecha_ingreso";
$tdataestudiantes[".googleLikeFields"][] = "numero_cedula";



$tdataestudiantes[".tableType"] = "list";

$tdataestudiantes[".printerPageOrientation"] = 0;
$tdataestudiantes[".nPrinterPageScale"] = 100;

$tdataestudiantes[".nPrinterSplitRecords"] = 40;

$tdataestudiantes[".nPrinterPDFSplitRecords"] = 40;


$tdataestudiantes[".geocodingEnabled"] = false;










$tdataestudiantes[".pageSize"] = 20;

$tdataestudiantes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataestudiantes[".strOrderBy"] = $tstrOrderBy;

$tdataestudiantes[".orderindexes"] = array();

$tdataestudiantes[".sqlHead"] = "SELECT id,  	usuario_id,  	matricula,  	carrera_id,  	fecha_ingreso,  	numero_cedula";
$tdataestudiantes[".sqlFrom"] = "FROM estudiantes";
$tdataestudiantes[".sqlWhereExpr"] = "";
$tdataestudiantes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestudiantes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestudiantes[".arrGroupsPerPage"] = $arrGPP;

$tdataestudiantes[".highlightSearchResults"] = true;

$tableKeysestudiantes = array();
$tableKeysestudiantes[] = "id";
$tdataestudiantes[".Keys"] = $tableKeysestudiantes;


$tdataestudiantes[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","id");
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


	$tdataestudiantes["id"] = $fdata;
		$tdataestudiantes[".searchableFields"][] = "id";
//	usuario_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usuario_id";
	$fdata["GoodName"] = "usuario_id";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","usuario_id");
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
	$edata["DisplayField"] = "CONCAT(nombre, ' (', email, ')')";

	

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


	$tdataestudiantes["usuario_id"] = $fdata;
		$tdataestudiantes[".searchableFields"][] = "usuario_id";
//	matricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "matricula";
	$fdata["GoodName"] = "matricula";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","matricula");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "matricula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "matricula";

	
	
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


	$tdataestudiantes["matricula"] = $fdata;
		$tdataestudiantes[".searchableFields"][] = "matricula";
//	carrera_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "carrera_id";
	$fdata["GoodName"] = "carrera_id";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","carrera_id");
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
	$edata["DisplayField"] = "CONCAT(nombre, IF(estado = 'Activo', '', ' [INACTIVA]'))";

	

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


	$tdataestudiantes["carrera_id"] = $fdata;
		$tdataestudiantes[".searchableFields"][] = "carrera_id";
//	fecha_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_ingreso";
	$fdata["GoodName"] = "fecha_ingreso";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","fecha_ingreso");
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


	$tdataestudiantes["fecha_ingreso"] = $fdata;
		$tdataestudiantes[".searchableFields"][] = "fecha_ingreso";
//	numero_cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numero_cedula";
	$fdata["GoodName"] = "numero_cedula";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","numero_cedula");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "numero_cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero_cedula";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataestudiantes["numero_cedula"] = $fdata;
		$tdataestudiantes[".searchableFields"][] = "numero_cedula";


$tables_data["estudiantes"]=&$tdataestudiantes;
$field_labels["estudiantes"] = &$fieldLabelsestudiantes;
$fieldToolTips["estudiantes"] = &$fieldToolTipsestudiantes;
$placeHolders["estudiantes"] = &$placeHoldersestudiantes;
$page_titles["estudiantes"] = &$pageTitlesestudiantes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["estudiantes"] = array();
//	inscripciones
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="inscripciones";
		$detailsParam["dOriginalTable"] = "inscripciones";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "inscripciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("inscripciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["estudiantes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["estudiantes"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["estudiantes"][$dIndex]["detailKeys"][]="estudiante_id";
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


		
	$detailsTablesData["estudiantes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["estudiantes"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["estudiantes"][$dIndex]["detailKeys"][]="estudiante_id";
//	tarea_entregas
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tarea_entregas";
		$detailsParam["dOriginalTable"] = "tarea_entregas";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tarea_entregas";
	$detailsParam["dCaptionTable"] = GetTableCaption("tarea_entregas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["estudiantes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["estudiantes"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["estudiantes"][$dIndex]["detailKeys"][]="estudiante_id";

// tables which are master tables for current table (detail)
$masterTablesData["estudiantes"] = array();



	
				$strOriginalDetailsTable="carreras";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="carreras";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "carreras";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["estudiantes"][0] = $masterParams;
				$masterTablesData["estudiantes"][0]["masterKeys"] = array();
	$masterTablesData["estudiantes"][0]["masterKeys"][]="id";
				$masterTablesData["estudiantes"][0]["detailKeys"] = array();
	$masterTablesData["estudiantes"][0]["detailKeys"][]="carrera_id";
		
	
				$strOriginalDetailsTable="usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["estudiantes"][1] = $masterParams;
				$masterTablesData["estudiantes"][1]["masterKeys"] = array();
	$masterTablesData["estudiantes"][1]["masterKeys"][]="id";
				$masterTablesData["estudiantes"][1]["detailKeys"] = array();
	$masterTablesData["estudiantes"][1]["detailKeys"][]="usuario_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_estudiantes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	usuario_id,  	matricula,  	carrera_id,  	fecha_ingreso,  	numero_cedula";
$proto0["m_strFrom"] = "FROM estudiantes";
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
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "estudiantes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario_id",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto8["m_sql"] = "usuario_id";
$proto8["m_srcTableName"] = "estudiantes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto10["m_sql"] = "matricula";
$proto10["m_srcTableName"] = "estudiantes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "carrera_id",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto12["m_sql"] = "carrera_id";
$proto12["m_srcTableName"] = "estudiantes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ingreso",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto14["m_sql"] = "fecha_ingreso";
$proto14["m_srcTableName"] = "estudiantes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_cedula",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto16["m_sql"] = "numero_cedula";
$proto16["m_srcTableName"] = "estudiantes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "estudiantes";
$proto19["m_srcTableName"] = "estudiantes";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "usuario_id";
$proto19["m_columns"][] = "matricula";
$proto19["m_columns"][] = "carrera_id";
$proto19["m_columns"][] = "fecha_ingreso";
$proto19["m_columns"][] = "numero_cedula";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "estudiantes";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "estudiantes";
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
$proto0["m_srcTableName"]="estudiantes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estudiantes = createSqlQuery_estudiantes();


	
		;

						

$tdataestudiantes[".sqlquery"] = $queryData_estudiantes;

include_once(getabspath("include/estudiantes_events.php"));
$tableEvents["estudiantes"] = new eventclass_estudiantes;
$tdataestudiantes[".hasEvents"] = true;

?>