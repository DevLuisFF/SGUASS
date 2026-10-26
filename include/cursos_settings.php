<?php




$tdatacursos = array();
$tdatacursos[".searchableFields"] = array();
	$tdatacursos[".truncateText"] = true;
	$tdatacursos[".NumberOfChars"] = 80;
	$tdatacursos[".ShortName"] = "cursos";
	$tdatacursos[".OwnerID"] = "";
	$tdatacursos[".OriginalTable"] = "cursos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacursos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacursos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscursos = array();
$fieldToolTipscursos = array();
$pageTitlescursos = array();
$placeHolderscursos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscursos["Spanish"] = array();
	$fieldToolTipscursos["Spanish"] = array();
	$placeHolderscursos["Spanish"] = array();
	$pageTitlescursos["Spanish"] = array();
	$fieldLabelscursos["Spanish"]["id"] = "Id";
	$fieldToolTipscursos["Spanish"]["id"] = "";
	$placeHolderscursos["Spanish"]["id"] = "";
	$fieldLabelscursos["Spanish"]["materia_id"] = "Asignatura";
	$fieldToolTipscursos["Spanish"]["materia_id"] = "";
	$placeHolderscursos["Spanish"]["materia_id"] = "";
	$fieldLabelscursos["Spanish"]["profesor_id"] = "Docente Responsable";
	$fieldToolTipscursos["Spanish"]["profesor_id"] = "";
	$placeHolderscursos["Spanish"]["profesor_id"] = "";
	$fieldLabelscursos["Spanish"]["periodo_id"] = "Periodo Académico";
	$fieldToolTipscursos["Spanish"]["periodo_id"] = "";
	$placeHolderscursos["Spanish"]["periodo_id"] = "";
	$fieldLabelscursos["Spanish"]["cupo"] = "Cupo Máximo";
	$fieldToolTipscursos["Spanish"]["cupo"] = "";
	$placeHolderscursos["Spanish"]["cupo"] = "";
	$fieldLabelscursos["Spanish"]["aula"] = "Aula / Sala de Clase";
	$fieldToolTipscursos["Spanish"]["aula"] = "";
	$placeHolderscursos["Spanish"]["aula"] = "";
	$fieldLabelscursos["Spanish"]["horario"] = "Días y Horarios";
	$fieldToolTipscursos["Spanish"]["horario"] = "";
	$placeHolderscursos["Spanish"]["horario"] = "";
	$fieldLabelscursos["Spanish"]["estado"] = "Estado de la Cátedra";
	$fieldToolTipscursos["Spanish"]["estado"] = "";
	$placeHolderscursos["Spanish"]["estado"] = "";
	$fieldLabelscursos["Spanish"]["carrera_id"] = "Carrera";
	$fieldToolTipscursos["Spanish"]["carrera_id"] = "";
	$placeHolderscursos["Spanish"]["carrera_id"] = "";
	$fieldLabelscursos["Spanish"]["semestre"] = "Semestre";
	$fieldToolTipscursos["Spanish"]["semestre"] = "";
	$placeHolderscursos["Spanish"]["semestre"] = "";
	if (count($fieldToolTipscursos["Spanish"]))
		$tdatacursos[".isUseToolTips"] = true;
}


	$tdatacursos[".NCSearch"] = true;



$tdatacursos[".shortTableName"] = "cursos";
$tdatacursos[".nSecOptions"] = 0;

$tdatacursos[".mainTableOwnerID"] = "";
$tdatacursos[".entityType"] = 0;

$tdatacursos[".strOriginalTableName"] = "cursos";

	



$tdatacursos[".showAddInPopup"] = false;

$tdatacursos[".showEditInPopup"] = false;

$tdatacursos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacursos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacursos[".listAjax"] = false;
//	temporary
$tdatacursos[".listAjax"] = false;

	$tdatacursos[".audit"] = false;

	$tdatacursos[".locking"] = false;


$pages = $tdatacursos[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacursos[".edit"] = true;
	$tdatacursos[".afterEditAction"] = 1;
	$tdatacursos[".closePopupAfterEdit"] = 1;
	$tdatacursos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacursos[".add"] = true;
$tdatacursos[".afterAddAction"] = 1;
$tdatacursos[".closePopupAfterAdd"] = 1;
$tdatacursos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacursos[".list"] = true;
}



$tdatacursos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacursos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacursos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacursos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacursos[".printFriendly"] = true;
}



$tdatacursos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacursos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacursos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacursos[".isUseAjaxSuggest"] = true;

$tdatacursos[".rowHighlite"] = true;



																																																																																																												
$tdatacursos[".flexibleSearch"] = true;


$tdatacursos[".ajaxCodeSnippetAdded"] = false;

$tdatacursos[".buttonsAdded"] = false;

$tdatacursos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacursos[".isUseTimeForSearch"] = false;


$tdatacursos[".badgeColor"] = "008B8B";


$tdatacursos[".allSearchFields"] = array();
$tdatacursos[".filterFields"] = array();
$tdatacursos[".requiredSearchFields"] = array();

$tdatacursos[".googleLikeFields"] = array();
$tdatacursos[".googleLikeFields"][] = "id";
$tdatacursos[".googleLikeFields"][] = "carrera_id";
$tdatacursos[".googleLikeFields"][] = "semestre";
$tdatacursos[".googleLikeFields"][] = "materia_id";
$tdatacursos[".googleLikeFields"][] = "profesor_id";
$tdatacursos[".googleLikeFields"][] = "periodo_id";
$tdatacursos[".googleLikeFields"][] = "cupo";
$tdatacursos[".googleLikeFields"][] = "aula";
$tdatacursos[".googleLikeFields"][] = "horario";
$tdatacursos[".googleLikeFields"][] = "estado";



$tdatacursos[".tableType"] = "list";

$tdatacursos[".printerPageOrientation"] = 0;
$tdatacursos[".nPrinterPageScale"] = 100;

$tdatacursos[".nPrinterSplitRecords"] = 40;

$tdatacursos[".nPrinterPDFSplitRecords"] = 40;


$tdatacursos[".geocodingEnabled"] = false;










$tdatacursos[".pageSize"] = 20;

$tdatacursos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacursos[".strOrderBy"] = $tstrOrderBy;

$tdatacursos[".orderindexes"] = array();

$tdatacursos[".sqlHead"] = "SELECT id,  	carrera_id,  	semestre,  	materia_id,  	profesor_id,  	periodo_id,  	cupo,  	aula,  	horario,  	estado";
$tdatacursos[".sqlFrom"] = "FROM cursos";
$tdatacursos[".sqlWhereExpr"] = "";
$tdatacursos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacursos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacursos[".arrGroupsPerPage"] = $arrGPP;

$tdatacursos[".highlightSearchResults"] = true;

$tableKeyscursos = array();
$tableKeyscursos[] = "id";
$tdatacursos[".Keys"] = $tableKeyscursos;


$tdatacursos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","id");
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


	$tdatacursos["id"] = $fdata;
		$tdatacursos[".searchableFields"][] = "id";
//	carrera_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "carrera_id";
	$fdata["GoodName"] = "carrera_id";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","carrera_id");
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "materia_id";

	
	
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


	$tdatacursos["carrera_id"] = $fdata;
		$tdatacursos[".searchableFields"][] = "carrera_id";
//	semestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "semestre";
	$fdata["GoodName"] = "semestre";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","semestre");
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


	$tdatacursos["semestre"] = $fdata;
		$tdatacursos[".searchableFields"][] = "semestre";
//	materia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "materia_id";
	$fdata["GoodName"] = "materia_id";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","materia_id");
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
	$edata["LookupTable"] = "carrera_materia";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "materia_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "(SELECT m.nombre FROM materias m WHERE m.id = carrera_materia.materia_id)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "carrera_id", "lookup" => "carrera_id" );

	
	

	
	
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


	$tdatacursos["materia_id"] = $fdata;
		$tdatacursos[".searchableFields"][] = "materia_id";
//	profesor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "profesor_id";
	$fdata["GoodName"] = "profesor_id";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","profesor_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "profesor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "profesor_id";

	
	
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
	$edata["LookupTable"] = "profesores";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT((SELECT u.nombre FROM usuarios u WHERE u.id = profesores.usuario_id), ' | Esp: ', COALESCE(profesores.especialidad, 'General'))";

	

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


	$tdatacursos["profesor_id"] = $fdata;
		$tdatacursos[".searchableFields"][] = "profesor_id";
//	periodo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "periodo_id";
	$fdata["GoodName"] = "periodo_id";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","periodo_id");
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
	$edata["LinkFieldType"] = 3;
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


	$tdatacursos["periodo_id"] = $fdata;
		$tdatacursos[".searchableFields"][] = "periodo_id";
//	cupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cupo";
	$fdata["GoodName"] = "cupo";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","cupo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cupo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cupo";

	
	
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


	$tdatacursos["cupo"] = $fdata;
		$tdatacursos[".searchableFields"][] = "cupo";
//	aula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "aula";
	$fdata["GoodName"] = "aula";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","aula");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "aula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aula";

	
	
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


	$tdatacursos["aula"] = $fdata;
		$tdatacursos[".searchableFields"][] = "aula";
//	horario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "horario";
	$fdata["GoodName"] = "horario";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","horario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "horario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "horario";

	
	
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


	$tdatacursos["horario"] = $fdata;
		$tdatacursos[".searchableFields"][] = "horario";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "cursos";
	$fdata["Label"] = GetFieldLabel("cursos","estado");
	$fdata["FieldType"] = 129;

	
	
	
			

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
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Finalizado";
	$edata["LookupValues"][] = "Cancelado";

	
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


	$tdatacursos["estado"] = $fdata;
		$tdatacursos[".searchableFields"][] = "estado";


$tables_data["cursos"]=&$tdatacursos;
$field_labels["cursos"] = &$fieldLabelscursos;
$fieldToolTips["cursos"] = &$fieldToolTipscursos;
$placeHolders["cursos"] = &$placeHolderscursos;
$page_titles["cursos"] = &$pageTitlescursos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cursos"] = array();
//	avisos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="avisos";
		$detailsParam["dOriginalTable"] = "avisos";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "avisos";
	$detailsParam["dCaptionTable"] = GetTableCaption("avisos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cursos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cursos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cursos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["cursos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cursos"][$dIndex]["detailKeys"][]="curso_id";
//	inscripciones
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="inscripciones";
		$detailsParam["dOriginalTable"] = "inscripciones";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "inscripciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("inscripciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cursos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cursos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cursos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["cursos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cursos"][$dIndex]["detailKeys"][]="curso_id";
//	tareas
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tareas";
		$detailsParam["dOriginalTable"] = "tareas";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tareas";
	$detailsParam["dCaptionTable"] = GetTableCaption("tareas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cursos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cursos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cursos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["cursos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cursos"][$dIndex]["detailKeys"][]="curso_id";

// tables which are master tables for current table (detail)
$masterTablesData["cursos"] = array();



	
				$strOriginalDetailsTable="materias";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="materias";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "materias";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cursos"][0] = $masterParams;
				$masterTablesData["cursos"][0]["masterKeys"] = array();
	$masterTablesData["cursos"][0]["masterKeys"][]="id";
				$masterTablesData["cursos"][0]["detailKeys"] = array();
	$masterTablesData["cursos"][0]["detailKeys"][]="materia_id";
		
	
				$strOriginalDetailsTable="periodos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="periodos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "periodos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cursos"][1] = $masterParams;
				$masterTablesData["cursos"][1]["masterKeys"] = array();
	$masterTablesData["cursos"][1]["masterKeys"][]="id";
				$masterTablesData["cursos"][1]["detailKeys"] = array();
	$masterTablesData["cursos"][1]["detailKeys"][]="periodo_id";
		
	
				$strOriginalDetailsTable="profesores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="profesores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "profesores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cursos"][2] = $masterParams;
				$masterTablesData["cursos"][2]["masterKeys"] = array();
	$masterTablesData["cursos"][2]["masterKeys"][]="id";
				$masterTablesData["cursos"][2]["detailKeys"] = array();
	$masterTablesData["cursos"][2]["detailKeys"][]="profesor_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_cursos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	carrera_id,  	semestre,  	materia_id,  	profesor_id,  	periodo_id,  	cupo,  	aula,  	horario,  	estado";
$proto0["m_strFrom"] = "FROM cursos";
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
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "cursos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "carrera_id",
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto8["m_sql"] = "carrera_id";
$proto8["m_srcTableName"] = "cursos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "semestre",
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto10["m_sql"] = "semestre";
$proto10["m_srcTableName"] = "cursos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "materia_id",
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto12["m_sql"] = "materia_id";
$proto12["m_srcTableName"] = "cursos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "profesor_id",
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto14["m_sql"] = "profesor_id";
$proto14["m_srcTableName"] = "cursos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_id",
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto16["m_sql"] = "periodo_id";
$proto16["m_srcTableName"] = "cursos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cupo",
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto18["m_sql"] = "cupo";
$proto18["m_srcTableName"] = "cursos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "aula",
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto20["m_sql"] = "aula";
$proto20["m_srcTableName"] = "cursos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "horario",
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto22["m_sql"] = "horario";
$proto22["m_srcTableName"] = "cursos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "cursos",
	"m_srcTableName" => "cursos"
));

$proto24["m_sql"] = "estado";
$proto24["m_srcTableName"] = "cursos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "cursos";
$proto27["m_srcTableName"] = "cursos";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "carrera_id";
$proto27["m_columns"][] = "semestre";
$proto27["m_columns"][] = "materia_id";
$proto27["m_columns"][] = "profesor_id";
$proto27["m_columns"][] = "periodo_id";
$proto27["m_columns"][] = "cupo";
$proto27["m_columns"][] = "aula";
$proto27["m_columns"][] = "horario";
$proto27["m_columns"][] = "estado";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "cursos";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "cursos";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cursos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cursos = createSqlQuery_cursos();


	
		;

										

$tdatacursos[".sqlquery"] = $queryData_cursos;

include_once(getabspath("include/cursos_events.php"));
$tableEvents["cursos"] = new eventclass_cursos;
$tdatacursos[".hasEvents"] = true;

?>