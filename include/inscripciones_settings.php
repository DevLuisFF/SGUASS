<?php




$tdatainscripciones = array();
$tdatainscripciones[".searchableFields"] = array();
	$tdatainscripciones[".truncateText"] = true;
	$tdatainscripciones[".NumberOfChars"] = 80;
	$tdatainscripciones[".ShortName"] = "inscripciones";
	$tdatainscripciones[".OwnerID"] = "";
	$tdatainscripciones[".OriginalTable"] = "inscripciones";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatainscripciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainscripciones[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsinscripciones = array();
$fieldToolTipsinscripciones = array();
$pageTitlesinscripciones = array();
$placeHoldersinscripciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinscripciones["Spanish"] = array();
	$fieldToolTipsinscripciones["Spanish"] = array();
	$placeHoldersinscripciones["Spanish"] = array();
	$pageTitlesinscripciones["Spanish"] = array();
	$fieldLabelsinscripciones["Spanish"]["id"] = "Id";
	$fieldToolTipsinscripciones["Spanish"]["id"] = "";
	$placeHoldersinscripciones["Spanish"]["id"] = "";
	$fieldLabelsinscripciones["Spanish"]["estudiante_id"] = "Estudiante";
	$fieldToolTipsinscripciones["Spanish"]["estudiante_id"] = "";
	$placeHoldersinscripciones["Spanish"]["estudiante_id"] = "";
	$fieldLabelsinscripciones["Spanish"]["curso_id"] = "Asignatura y Cátedra";
	$fieldToolTipsinscripciones["Spanish"]["curso_id"] = "";
	$placeHoldersinscripciones["Spanish"]["curso_id"] = "";
	$fieldLabelsinscripciones["Spanish"]["fecha_inscripcion"] = "Fecha de Asignación";
	$fieldToolTipsinscripciones["Spanish"]["fecha_inscripcion"] = "";
	$placeHoldersinscripciones["Spanish"]["fecha_inscripcion"] = "";
	$fieldLabelsinscripciones["Spanish"]["matricula_semestre_id"] = "Ficha de Matrícula";
	$fieldToolTipsinscripciones["Spanish"]["matricula_semestre_id"] = "";
	$placeHoldersinscripciones["Spanish"]["matricula_semestre_id"] = "";
	if (count($fieldToolTipsinscripciones["Spanish"]))
		$tdatainscripciones[".isUseToolTips"] = true;
}


	$tdatainscripciones[".NCSearch"] = true;



$tdatainscripciones[".shortTableName"] = "inscripciones";
$tdatainscripciones[".nSecOptions"] = 0;

$tdatainscripciones[".mainTableOwnerID"] = "";
$tdatainscripciones[".entityType"] = 0;

$tdatainscripciones[".strOriginalTableName"] = "inscripciones";

	



$tdatainscripciones[".showAddInPopup"] = false;

$tdatainscripciones[".showEditInPopup"] = false;

$tdatainscripciones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainscripciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainscripciones[".listAjax"] = false;
//	temporary
$tdatainscripciones[".listAjax"] = false;

	$tdatainscripciones[".audit"] = false;

	$tdatainscripciones[".locking"] = false;


$pages = $tdatainscripciones[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainscripciones[".edit"] = true;
	$tdatainscripciones[".afterEditAction"] = 1;
	$tdatainscripciones[".closePopupAfterEdit"] = 1;
	$tdatainscripciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainscripciones[".add"] = true;
$tdatainscripciones[".afterAddAction"] = 1;
$tdatainscripciones[".closePopupAfterAdd"] = 1;
$tdatainscripciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainscripciones[".list"] = true;
}



$tdatainscripciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainscripciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainscripciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainscripciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainscripciones[".printFriendly"] = true;
}



$tdatainscripciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainscripciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainscripciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainscripciones[".isUseAjaxSuggest"] = true;

$tdatainscripciones[".rowHighlite"] = true;



																																																																																																												
$tdatainscripciones[".flexibleSearch"] = true;


$tdatainscripciones[".ajaxCodeSnippetAdded"] = false;

$tdatainscripciones[".buttonsAdded"] = false;

$tdatainscripciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainscripciones[".isUseTimeForSearch"] = false;


$tdatainscripciones[".badgeColor"] = "5f9ea0";


$tdatainscripciones[".allSearchFields"] = array();
$tdatainscripciones[".filterFields"] = array();
$tdatainscripciones[".requiredSearchFields"] = array();

$tdatainscripciones[".googleLikeFields"] = array();
$tdatainscripciones[".googleLikeFields"][] = "id";
$tdatainscripciones[".googleLikeFields"][] = "matricula_semestre_id";
$tdatainscripciones[".googleLikeFields"][] = "estudiante_id";
$tdatainscripciones[".googleLikeFields"][] = "curso_id";
$tdatainscripciones[".googleLikeFields"][] = "fecha_inscripcion";



$tdatainscripciones[".tableType"] = "list";

$tdatainscripciones[".printerPageOrientation"] = 0;
$tdatainscripciones[".nPrinterPageScale"] = 100;

$tdatainscripciones[".nPrinterSplitRecords"] = 40;

$tdatainscripciones[".nPrinterPDFSplitRecords"] = 40;


$tdatainscripciones[".geocodingEnabled"] = false;










$tdatainscripciones[".pageSize"] = 20;

$tdatainscripciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainscripciones[".strOrderBy"] = $tstrOrderBy;

$tdatainscripciones[".orderindexes"] = array();

$tdatainscripciones[".sqlHead"] = "SELECT id,  	matricula_semestre_id,  	estudiante_id,  	curso_id,  	fecha_inscripcion";
$tdatainscripciones[".sqlFrom"] = "FROM inscripciones";
$tdatainscripciones[".sqlWhereExpr"] = "";
$tdatainscripciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainscripciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainscripciones[".arrGroupsPerPage"] = $arrGPP;

$tdatainscripciones[".highlightSearchResults"] = true;

$tableKeysinscripciones = array();
$tableKeysinscripciones[] = "id";
$tdatainscripciones[".Keys"] = $tableKeysinscripciones;


$tdatainscripciones[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "inscripciones";
	$fdata["Label"] = GetFieldLabel("inscripciones","id");
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


	$tdatainscripciones["id"] = $fdata;
		$tdatainscripciones[".searchableFields"][] = "id";
//	matricula_semestre_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "matricula_semestre_id";
	$fdata["GoodName"] = "matricula_semestre_id";
	$fdata["ownerTable"] = "inscripciones";
	$fdata["Label"] = GetFieldLabel("inscripciones","matricula_semestre_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "matricula_semestre_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "matricula_semestre_id";

	
	
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
	$edata["LookupTable"] = "matriculas_semestre";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CONCAT((SELECT u.nombre FROM estudiantes e INNER JOIN usuarios u ON u.id = e.usuario_id WHERE e.id = matriculas_semestre.estudiante_id), ' - ', (SELECT c.nombre FROM carreras c WHERE c.id = matriculas_semestre.carrera_id), ' (', matriculas_semestre.semestre, '° Sem - ', (SELECT p.nombre FROM periodos p WHERE p.id = matriculas_semestre.periodo_id), ')')";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainscripciones["matricula_semestre_id"] = $fdata;
		$tdatainscripciones[".searchableFields"][] = "matricula_semestre_id";
//	estudiante_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estudiante_id";
	$fdata["GoodName"] = "estudiante_id";
	$fdata["ownerTable"] = "inscripciones";
	$fdata["Label"] = GetFieldLabel("inscripciones","estudiante_id");
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT((SELECT u.nombre FROM usuarios u WHERE u.id = estudiantes.usuario_id), ' | C.I.: ', COALESCE(estudiantes.numero_cedula, 'S/C'), ' | Matrícula: ', COALESCE(estudiantes.matricula, 'S/M'))";

	

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


	$tdatainscripciones["estudiante_id"] = $fdata;
		$tdatainscripciones[".searchableFields"][] = "estudiante_id";
//	curso_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "curso_id";
	$fdata["GoodName"] = "curso_id";
	$fdata["ownerTable"] = "inscripciones";
	$fdata["Label"] = GetFieldLabel("inscripciones","curso_id");
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
	$edata["DisplayField"] = "CONCAT((SELECT m.nombre FROM materias m WHERE m.id = cursos.materia_id), ' - Aula: ', COALESCE(cursos.aula, 'Por asignar'), ' (', COALESCE(cursos.horario, 'Sin horario'), ') [', (SELECT p.nombre FROM periodos p WHERE p.id = cursos.periodo_id), ']')";

	

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


	$tdatainscripciones["curso_id"] = $fdata;
		$tdatainscripciones[".searchableFields"][] = "curso_id";
//	fecha_inscripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_inscripcion";
	$fdata["GoodName"] = "fecha_inscripcion";
	$fdata["ownerTable"] = "inscripciones";
	$fdata["Label"] = GetFieldLabel("inscripciones","fecha_inscripcion");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_inscripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_inscripcion";

	
	
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


	$tdatainscripciones["fecha_inscripcion"] = $fdata;
		$tdatainscripciones[".searchableFields"][] = "fecha_inscripcion";


$tables_data["inscripciones"]=&$tdatainscripciones;
$field_labels["inscripciones"] = &$fieldLabelsinscripciones;
$fieldToolTips["inscripciones"] = &$fieldToolTipsinscripciones;
$placeHolders["inscripciones"] = &$placeHoldersinscripciones;
$page_titles["inscripciones"] = &$pageTitlesinscripciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inscripciones"] = array();
//	asistencias
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="asistencias";
		$detailsParam["dOriginalTable"] = "asistencias";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "asistencias";
	$detailsParam["dCaptionTable"] = GetTableCaption("asistencias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["inscripciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["inscripciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["inscripciones"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["inscripciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["inscripciones"][$dIndex]["detailKeys"][]="inscripcion_id";
//	notas
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="notas";
		$detailsParam["dOriginalTable"] = "notas";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "notas";
	$detailsParam["dCaptionTable"] = GetTableCaption("notas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["inscripciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["inscripciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["inscripciones"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["inscripciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["inscripciones"][$dIndex]["detailKeys"][]="inscripcion_id";

// tables which are master tables for current table (detail)
$masterTablesData["inscripciones"] = array();



	
				$strOriginalDetailsTable="estudiantes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="estudiantes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estudiantes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["inscripciones"][0] = $masterParams;
				$masterTablesData["inscripciones"][0]["masterKeys"] = array();
	$masterTablesData["inscripciones"][0]["masterKeys"][]="id";
				$masterTablesData["inscripciones"][0]["detailKeys"] = array();
	$masterTablesData["inscripciones"][0]["detailKeys"][]="estudiante_id";
		
	
				$strOriginalDetailsTable="cursos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cursos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cursos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["inscripciones"][1] = $masterParams;
				$masterTablesData["inscripciones"][1]["masterKeys"] = array();
	$masterTablesData["inscripciones"][1]["masterKeys"][]="id";
				$masterTablesData["inscripciones"][1]["detailKeys"] = array();
	$masterTablesData["inscripciones"][1]["detailKeys"][]="curso_id";
		
	
				$strOriginalDetailsTable="matriculas_semestre";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="matriculas_semestre";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "matriculas_semestre";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["inscripciones"][2] = $masterParams;
				$masterTablesData["inscripciones"][2]["masterKeys"] = array();
	$masterTablesData["inscripciones"][2]["masterKeys"][]="id";
				$masterTablesData["inscripciones"][2]["detailKeys"] = array();
	$masterTablesData["inscripciones"][2]["detailKeys"][]="matricula_semestre_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_inscripciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	matricula_semestre_id,  	estudiante_id,  	curso_id,  	fecha_inscripcion";
$proto0["m_strFrom"] = "FROM inscripciones";
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
	"m_strTable" => "inscripciones",
	"m_srcTableName" => "inscripciones"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "inscripciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_semestre_id",
	"m_strTable" => "inscripciones",
	"m_srcTableName" => "inscripciones"
));

$proto8["m_sql"] = "matricula_semestre_id";
$proto8["m_srcTableName"] = "inscripciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estudiante_id",
	"m_strTable" => "inscripciones",
	"m_srcTableName" => "inscripciones"
));

$proto10["m_sql"] = "estudiante_id";
$proto10["m_srcTableName"] = "inscripciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "curso_id",
	"m_strTable" => "inscripciones",
	"m_srcTableName" => "inscripciones"
));

$proto12["m_sql"] = "curso_id";
$proto12["m_srcTableName"] = "inscripciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inscripcion",
	"m_strTable" => "inscripciones",
	"m_srcTableName" => "inscripciones"
));

$proto14["m_sql"] = "fecha_inscripcion";
$proto14["m_srcTableName"] = "inscripciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "inscripciones";
$proto17["m_srcTableName"] = "inscripciones";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "matricula_semestre_id";
$proto17["m_columns"][] = "estudiante_id";
$proto17["m_columns"][] = "curso_id";
$proto17["m_columns"][] = "fecha_inscripcion";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "inscripciones";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "inscripciones";
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
$proto0["m_srcTableName"]="inscripciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inscripciones = createSqlQuery_inscripciones();


	
		;

					

$tdatainscripciones[".sqlquery"] = $queryData_inscripciones;

include_once(getabspath("include/inscripciones_events.php"));
$tableEvents["inscripciones"] = new eventclass_inscripciones;
$tdatainscripciones[".hasEvents"] = true;

?>