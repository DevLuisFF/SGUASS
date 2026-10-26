<?php




$tdatamatriculas_semestre = array();
$tdatamatriculas_semestre[".searchableFields"] = array();
	$tdatamatriculas_semestre[".truncateText"] = true;
	$tdatamatriculas_semestre[".NumberOfChars"] = 80;
	$tdatamatriculas_semestre[".ShortName"] = "matriculas_semestre";
	$tdatamatriculas_semestre[".OwnerID"] = "";
	$tdatamatriculas_semestre[".OriginalTable"] = "matriculas_semestre";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatamatriculas_semestre[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamatriculas_semestre[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsmatriculas_semestre = array();
$fieldToolTipsmatriculas_semestre = array();
$pageTitlesmatriculas_semestre = array();
$placeHoldersmatriculas_semestre = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmatriculas_semestre["Spanish"] = array();
	$fieldToolTipsmatriculas_semestre["Spanish"] = array();
	$placeHoldersmatriculas_semestre["Spanish"] = array();
	$pageTitlesmatriculas_semestre["Spanish"] = array();
	$fieldLabelsmatriculas_semestre["Spanish"]["id"] = "Id";
	$fieldToolTipsmatriculas_semestre["Spanish"]["id"] = "";
	$placeHoldersmatriculas_semestre["Spanish"]["id"] = "";
	$fieldLabelsmatriculas_semestre["Spanish"]["estudiante_id"] = "Estudiante";
	$fieldToolTipsmatriculas_semestre["Spanish"]["estudiante_id"] = "";
	$placeHoldersmatriculas_semestre["Spanish"]["estudiante_id"] = "";
	$fieldLabelsmatriculas_semestre["Spanish"]["carrera_id"] = "Carrera";
	$fieldToolTipsmatriculas_semestre["Spanish"]["carrera_id"] = "";
	$placeHoldersmatriculas_semestre["Spanish"]["carrera_id"] = "";
	$fieldLabelsmatriculas_semestre["Spanish"]["periodo_id"] = "Periodo Académico";
	$fieldToolTipsmatriculas_semestre["Spanish"]["periodo_id"] = "";
	$placeHoldersmatriculas_semestre["Spanish"]["periodo_id"] = "";
	$fieldLabelsmatriculas_semestre["Spanish"]["semestre"] = "Semestre a Cursar";
	$fieldToolTipsmatriculas_semestre["Spanish"]["semestre"] = "";
	$placeHoldersmatriculas_semestre["Spanish"]["semestre"] = "";
	$fieldLabelsmatriculas_semestre["Spanish"]["fecha_matricula"] = "Fecha de Matriculación";
	$fieldToolTipsmatriculas_semestre["Spanish"]["fecha_matricula"] = "";
	$placeHoldersmatriculas_semestre["Spanish"]["fecha_matricula"] = "";
	$fieldLabelsmatriculas_semestre["Spanish"]["estado"] = "Condición del Alumno";
	$fieldToolTipsmatriculas_semestre["Spanish"]["estado"] = "";
	$placeHoldersmatriculas_semestre["Spanish"]["estado"] = "";
	$fieldLabelsmatriculas_semestre["Spanish"]["observaciones"] = "Observaciones Generales";
	$fieldToolTipsmatriculas_semestre["Spanish"]["observaciones"] = "";
	$placeHoldersmatriculas_semestre["Spanish"]["observaciones"] = "";
	if (count($fieldToolTipsmatriculas_semestre["Spanish"]))
		$tdatamatriculas_semestre[".isUseToolTips"] = true;
}


	$tdatamatriculas_semestre[".NCSearch"] = true;



$tdatamatriculas_semestre[".shortTableName"] = "matriculas_semestre";
$tdatamatriculas_semestre[".nSecOptions"] = 0;

$tdatamatriculas_semestre[".mainTableOwnerID"] = "";
$tdatamatriculas_semestre[".entityType"] = 0;

$tdatamatriculas_semestre[".strOriginalTableName"] = "matriculas_semestre";

	



$tdatamatriculas_semestre[".showAddInPopup"] = false;

$tdatamatriculas_semestre[".showEditInPopup"] = false;

$tdatamatriculas_semestre[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamatriculas_semestre[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamatriculas_semestre[".listAjax"] = false;
//	temporary
$tdatamatriculas_semestre[".listAjax"] = false;

	$tdatamatriculas_semestre[".audit"] = false;

	$tdatamatriculas_semestre[".locking"] = false;


$pages = $tdatamatriculas_semestre[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamatriculas_semestre[".edit"] = true;
	$tdatamatriculas_semestre[".afterEditAction"] = 1;
	$tdatamatriculas_semestre[".closePopupAfterEdit"] = 1;
	$tdatamatriculas_semestre[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamatriculas_semestre[".add"] = true;
$tdatamatriculas_semestre[".afterAddAction"] = 1;
$tdatamatriculas_semestre[".closePopupAfterAdd"] = 1;
$tdatamatriculas_semestre[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamatriculas_semestre[".list"] = true;
}



$tdatamatriculas_semestre[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamatriculas_semestre[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamatriculas_semestre[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamatriculas_semestre[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamatriculas_semestre[".printFriendly"] = true;
}



$tdatamatriculas_semestre[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamatriculas_semestre[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamatriculas_semestre[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamatriculas_semestre[".isUseAjaxSuggest"] = true;

$tdatamatriculas_semestre[".rowHighlite"] = true;



																											
$tdatamatriculas_semestre[".flexibleSearch"] = true;


$tdatamatriculas_semestre[".ajaxCodeSnippetAdded"] = false;

$tdatamatriculas_semestre[".buttonsAdded"] = false;

$tdatamatriculas_semestre[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamatriculas_semestre[".isUseTimeForSearch"] = false;


$tdatamatriculas_semestre[".badgeColor"] = "DC143C";


$tdatamatriculas_semestre[".allSearchFields"] = array();
$tdatamatriculas_semestre[".filterFields"] = array();
$tdatamatriculas_semestre[".requiredSearchFields"] = array();

$tdatamatriculas_semestre[".googleLikeFields"] = array();
$tdatamatriculas_semestre[".googleLikeFields"][] = "id";
$tdatamatriculas_semestre[".googleLikeFields"][] = "estudiante_id";
$tdatamatriculas_semestre[".googleLikeFields"][] = "carrera_id";
$tdatamatriculas_semestre[".googleLikeFields"][] = "periodo_id";
$tdatamatriculas_semestre[".googleLikeFields"][] = "semestre";
$tdatamatriculas_semestre[".googleLikeFields"][] = "fecha_matricula";
$tdatamatriculas_semestre[".googleLikeFields"][] = "estado";
$tdatamatriculas_semestre[".googleLikeFields"][] = "observaciones";



$tdatamatriculas_semestre[".tableType"] = "list";

$tdatamatriculas_semestre[".printerPageOrientation"] = 0;
$tdatamatriculas_semestre[".nPrinterPageScale"] = 100;

$tdatamatriculas_semestre[".nPrinterSplitRecords"] = 40;

$tdatamatriculas_semestre[".nPrinterPDFSplitRecords"] = 40;


$tdatamatriculas_semestre[".geocodingEnabled"] = false;










$tdatamatriculas_semestre[".pageSize"] = 20;

$tdatamatriculas_semestre[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamatriculas_semestre[".strOrderBy"] = $tstrOrderBy;

$tdatamatriculas_semestre[".orderindexes"] = array();

$tdatamatriculas_semestre[".sqlHead"] = "SELECT id,  	estudiante_id,  	carrera_id,  	periodo_id,  	semestre,  	fecha_matricula,  	estado,  	observaciones";
$tdatamatriculas_semestre[".sqlFrom"] = "FROM matriculas_semestre";
$tdatamatriculas_semestre[".sqlWhereExpr"] = "";
$tdatamatriculas_semestre[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamatriculas_semestre[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamatriculas_semestre[".arrGroupsPerPage"] = $arrGPP;

$tdatamatriculas_semestre[".highlightSearchResults"] = true;

$tableKeysmatriculas_semestre = array();
$tableKeysmatriculas_semestre[] = "id";
$tdatamatriculas_semestre[".Keys"] = $tableKeysmatriculas_semestre;


$tdatamatriculas_semestre[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "matriculas_semestre";
	$fdata["Label"] = GetFieldLabel("matriculas_semestre","id");
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


	$tdatamatriculas_semestre["id"] = $fdata;
		$tdatamatriculas_semestre[".searchableFields"][] = "id";
//	estudiante_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estudiante_id";
	$fdata["GoodName"] = "estudiante_id";
	$fdata["ownerTable"] = "matriculas_semestre";
	$fdata["Label"] = GetFieldLabel("matriculas_semestre","estudiante_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "estudiante_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estudiante_id";

	
	
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
	$edata["LookupTable"] = "estudiantes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CONCAT((SELECT u.nombre FROM usuarios u WHERE u.id = estudiantes.usuario_id), ' | C.I.: ', COALESCE(estudiantes.numero_cedula, 'S/C'), ' | Mat.: ', COALESCE(estudiantes.matricula, 'S/M'))";

	

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


	$tdatamatriculas_semestre["estudiante_id"] = $fdata;
		$tdatamatriculas_semestre[".searchableFields"][] = "estudiante_id";
//	carrera_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "carrera_id";
	$fdata["GoodName"] = "carrera_id";
	$fdata["ownerTable"] = "matriculas_semestre";
	$fdata["Label"] = GetFieldLabel("matriculas_semestre","carrera_id");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "carreras.nombre";

	

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


	$tdatamatriculas_semestre["carrera_id"] = $fdata;
		$tdatamatriculas_semestre[".searchableFields"][] = "carrera_id";
//	periodo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "periodo_id";
	$fdata["GoodName"] = "periodo_id";
	$fdata["ownerTable"] = "matriculas_semestre";
	$fdata["Label"] = GetFieldLabel("matriculas_semestre","periodo_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "periodo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_id";

	
	
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
	$edata["LookupTable"] = "periodos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CONCAT(periodos.nombre, ' (', DATE_FORMAT(periodos.fecha_inicio, '%d/%m/%Y'), ' al ', DATE_FORMAT(periodos.fecha_fin, '%d/%m/%Y'), ')')";

	

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


	$tdatamatriculas_semestre["periodo_id"] = $fdata;
		$tdatamatriculas_semestre[".searchableFields"][] = "periodo_id";
//	semestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "semestre";
	$fdata["GoodName"] = "semestre";
	$fdata["ownerTable"] = "matriculas_semestre";
	$fdata["Label"] = GetFieldLabel("matriculas_semestre","semestre");
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


	$tdatamatriculas_semestre["semestre"] = $fdata;
		$tdatamatriculas_semestre[".searchableFields"][] = "semestre";
//	fecha_matricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_matricula";
	$fdata["GoodName"] = "fecha_matricula";
	$fdata["ownerTable"] = "matriculas_semestre";
	$fdata["Label"] = GetFieldLabel("matriculas_semestre","fecha_matricula");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_matricula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_matricula";

	
	
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


	$tdatamatriculas_semestre["fecha_matricula"] = $fdata;
		$tdatamatriculas_semestre[".searchableFields"][] = "fecha_matricula";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "matriculas_semestre";
	$fdata["Label"] = GetFieldLabel("matriculas_semestre","estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Condicional";
	$edata["LookupValues"][] = "Retirado";
	$edata["LookupValues"][] = "Culminado";

	
	
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


	$tdatamatriculas_semestre["estado"] = $fdata;
		$tdatamatriculas_semestre[".searchableFields"][] = "estado";
//	observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "observaciones";
	$fdata["GoodName"] = "observaciones";
	$fdata["ownerTable"] = "matriculas_semestre";
	$fdata["Label"] = GetFieldLabel("matriculas_semestre","observaciones");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observaciones";

	
	
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


	$tdatamatriculas_semestre["observaciones"] = $fdata;
		$tdatamatriculas_semestre[".searchableFields"][] = "observaciones";


$tables_data["matriculas_semestre"]=&$tdatamatriculas_semestre;
$field_labels["matriculas_semestre"] = &$fieldLabelsmatriculas_semestre;
$fieldToolTips["matriculas_semestre"] = &$fieldToolTipsmatriculas_semestre;
$placeHolders["matriculas_semestre"] = &$placeHoldersmatriculas_semestre;
$page_titles["matriculas_semestre"] = &$pageTitlesmatriculas_semestre;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["matriculas_semestre"] = array();
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


		
	$detailsTablesData["matriculas_semestre"][$dIndex] = $detailsParam;

	
		$detailsTablesData["matriculas_semestre"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["matriculas_semestre"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["matriculas_semestre"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["matriculas_semestre"][$dIndex]["detailKeys"][]="matricula_semestre_id";

// tables which are master tables for current table (detail)
$masterTablesData["matriculas_semestre"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_matriculas_semestre()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	estudiante_id,  	carrera_id,  	periodo_id,  	semestre,  	fecha_matricula,  	estado,  	observaciones";
$proto0["m_strFrom"] = "FROM matriculas_semestre";
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
	"m_strTable" => "matriculas_semestre",
	"m_srcTableName" => "matriculas_semestre"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "matriculas_semestre";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estudiante_id",
	"m_strTable" => "matriculas_semestre",
	"m_srcTableName" => "matriculas_semestre"
));

$proto8["m_sql"] = "estudiante_id";
$proto8["m_srcTableName"] = "matriculas_semestre";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "carrera_id",
	"m_strTable" => "matriculas_semestre",
	"m_srcTableName" => "matriculas_semestre"
));

$proto10["m_sql"] = "carrera_id";
$proto10["m_srcTableName"] = "matriculas_semestre";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_id",
	"m_strTable" => "matriculas_semestre",
	"m_srcTableName" => "matriculas_semestre"
));

$proto12["m_sql"] = "periodo_id";
$proto12["m_srcTableName"] = "matriculas_semestre";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "semestre",
	"m_strTable" => "matriculas_semestre",
	"m_srcTableName" => "matriculas_semestre"
));

$proto14["m_sql"] = "semestre";
$proto14["m_srcTableName"] = "matriculas_semestre";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_matricula",
	"m_strTable" => "matriculas_semestre",
	"m_srcTableName" => "matriculas_semestre"
));

$proto16["m_sql"] = "fecha_matricula";
$proto16["m_srcTableName"] = "matriculas_semestre";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "matriculas_semestre",
	"m_srcTableName" => "matriculas_semestre"
));

$proto18["m_sql"] = "estado";
$proto18["m_srcTableName"] = "matriculas_semestre";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "matriculas_semestre",
	"m_srcTableName" => "matriculas_semestre"
));

$proto20["m_sql"] = "observaciones";
$proto20["m_srcTableName"] = "matriculas_semestre";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "matriculas_semestre";
$proto23["m_srcTableName"] = "matriculas_semestre";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "estudiante_id";
$proto23["m_columns"][] = "carrera_id";
$proto23["m_columns"][] = "periodo_id";
$proto23["m_columns"][] = "semestre";
$proto23["m_columns"][] = "fecha_matricula";
$proto23["m_columns"][] = "estado";
$proto23["m_columns"][] = "observaciones";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "matriculas_semestre";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "matriculas_semestre";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="matriculas_semestre";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_matriculas_semestre = createSqlQuery_matriculas_semestre();


	
		;

								

$tdatamatriculas_semestre[".sqlquery"] = $queryData_matriculas_semestre;

include_once(getabspath("include/matriculas_semestre_events.php"));
$tableEvents["matriculas_semestre"] = new eventclass_matriculas_semestre;
$tdatamatriculas_semestre[".hasEvents"] = true;

?>