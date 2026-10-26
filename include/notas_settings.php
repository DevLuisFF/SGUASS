<?php




$tdatanotas = array();
$tdatanotas[".searchableFields"] = array();
	$tdatanotas[".truncateText"] = true;
	$tdatanotas[".NumberOfChars"] = 80;
	$tdatanotas[".ShortName"] = "notas";
	$tdatanotas[".OwnerID"] = "";
	$tdatanotas[".OriginalTable"] = "notas";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatanotas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanotas[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsnotas = array();
$fieldToolTipsnotas = array();
$pageTitlesnotas = array();
$placeHoldersnotas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnotas["Spanish"] = array();
	$fieldToolTipsnotas["Spanish"] = array();
	$placeHoldersnotas["Spanish"] = array();
	$pageTitlesnotas["Spanish"] = array();
	$fieldLabelsnotas["Spanish"]["id"] = "Id";
	$fieldToolTipsnotas["Spanish"]["id"] = "";
	$placeHoldersnotas["Spanish"]["id"] = "";
	$fieldLabelsnotas["Spanish"]["inscripcion_id"] = "Estudiante / Asignatura";
	$fieldToolTipsnotas["Spanish"]["inscripcion_id"] = "";
	$placeHoldersnotas["Spanish"]["inscripcion_id"] = "";
	$fieldLabelsnotas["Spanish"]["tipo_evaluacion"] = "Etapa Evaluativa";
	$fieldToolTipsnotas["Spanish"]["tipo_evaluacion"] = "";
	$placeHoldersnotas["Spanish"]["tipo_evaluacion"] = "";
	$fieldLabelsnotas["Spanish"]["nota"] = "Calificación Final";
	$fieldToolTipsnotas["Spanish"]["nota"] = "";
	$placeHoldersnotas["Spanish"]["nota"] = "";
	$fieldLabelsnotas["Spanish"]["descripcion"] = "Observaciones del Docente";
	$fieldToolTipsnotas["Spanish"]["descripcion"] = "";
	$placeHoldersnotas["Spanish"]["descripcion"] = "";
	$fieldLabelsnotas["Spanish"]["fecha_registro"] = "Fecha de Asentamiento";
	$fieldToolTipsnotas["Spanish"]["fecha_registro"] = "";
	$placeHoldersnotas["Spanish"]["fecha_registro"] = "";
	$fieldLabelsnotas["Spanish"]["Puntos_Trabajo_Practico"] = "Trabajo Práctico (TP)";
	$fieldToolTipsnotas["Spanish"]["Puntos_Trabajo_Practico"] = "";
	$placeHoldersnotas["Spanish"]["Puntos_Trabajo_Practico"] = "";
	$fieldLabelsnotas["Spanish"]["Puntos_Primer_Parcial"] = "1° Parcial";
	$fieldToolTipsnotas["Spanish"]["Puntos_Primer_Parcial"] = "";
	$placeHoldersnotas["Spanish"]["Puntos_Primer_Parcial"] = "";
	$fieldLabelsnotas["Spanish"]["Puntos_Segundo_Parcial"] = "2° Parcial";
	$fieldToolTipsnotas["Spanish"]["Puntos_Segundo_Parcial"] = "";
	$placeHoldersnotas["Spanish"]["Puntos_Segundo_Parcial"] = "";
	$fieldLabelsnotas["Spanish"]["Puntos_Examen_Final"] = "Examen Final Ordinario";
	$fieldToolTipsnotas["Spanish"]["Puntos_Examen_Final"] = "";
	$placeHoldersnotas["Spanish"]["Puntos_Examen_Final"] = "";
	$fieldLabelsnotas["Spanish"]["Puntos_Examen_Extra_Ord"] = "Examen Extraordinario (Recup.)";
	$fieldToolTipsnotas["Spanish"]["Puntos_Examen_Extra_Ord"] = "";
	$placeHoldersnotas["Spanish"]["Puntos_Examen_Extra_Ord"] = "";
	$fieldLabelsnotas["Spanish"]["Puntos_Examen_Extra_Extra_Ord"] = "Examen Complementario (Mesa)";
	$fieldToolTipsnotas["Spanish"]["Puntos_Examen_Extra_Extra_Ord"] = "";
	$placeHoldersnotas["Spanish"]["Puntos_Examen_Extra_Extra_Ord"] = "";
	$fieldLabelsnotas["Spanish"]["Puntos_Asistencia"] = "Puntaje por Asistencia";
	$fieldToolTipsnotas["Spanish"]["Puntos_Asistencia"] = "";
	$placeHoldersnotas["Spanish"]["Puntos_Asistencia"] = "";
	if (count($fieldToolTipsnotas["Spanish"]))
		$tdatanotas[".isUseToolTips"] = true;
}


	$tdatanotas[".NCSearch"] = true;



$tdatanotas[".shortTableName"] = "notas";
$tdatanotas[".nSecOptions"] = 0;

$tdatanotas[".mainTableOwnerID"] = "";
$tdatanotas[".entityType"] = 0;

$tdatanotas[".strOriginalTableName"] = "notas";

	



$tdatanotas[".showAddInPopup"] = false;

$tdatanotas[".showEditInPopup"] = false;

$tdatanotas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanotas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanotas[".listAjax"] = false;
//	temporary
$tdatanotas[".listAjax"] = false;

	$tdatanotas[".audit"] = false;

	$tdatanotas[".locking"] = false;


$pages = $tdatanotas[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanotas[".edit"] = true;
	$tdatanotas[".afterEditAction"] = 1;
	$tdatanotas[".closePopupAfterEdit"] = 1;
	$tdatanotas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanotas[".add"] = true;
$tdatanotas[".afterAddAction"] = 1;
$tdatanotas[".closePopupAfterAdd"] = 1;
$tdatanotas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanotas[".list"] = true;
}



$tdatanotas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanotas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanotas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanotas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanotas[".printFriendly"] = true;
}



$tdatanotas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanotas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanotas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanotas[".isUseAjaxSuggest"] = true;

$tdatanotas[".rowHighlite"] = true;



																																																						
$tdatanotas[".flexibleSearch"] = true;


$tdatanotas[".ajaxCodeSnippetAdded"] = false;

$tdatanotas[".buttonsAdded"] = false;

$tdatanotas[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanotas[".isUseTimeForSearch"] = false;


$tdatanotas[".badgeColor"] = "B22222";


$tdatanotas[".allSearchFields"] = array();
$tdatanotas[".filterFields"] = array();
$tdatanotas[".requiredSearchFields"] = array();

$tdatanotas[".googleLikeFields"] = array();
$tdatanotas[".googleLikeFields"][] = "id";
$tdatanotas[".googleLikeFields"][] = "inscripcion_id";
$tdatanotas[".googleLikeFields"][] = "tipo_evaluacion";
$tdatanotas[".googleLikeFields"][] = "nota";
$tdatanotas[".googleLikeFields"][] = "descripcion";
$tdatanotas[".googleLikeFields"][] = "fecha_registro";
$tdatanotas[".googleLikeFields"][] = "Puntos_Trabajo_Practico";
$tdatanotas[".googleLikeFields"][] = "Puntos_Primer_Parcial";
$tdatanotas[".googleLikeFields"][] = "Puntos_Segundo_Parcial";
$tdatanotas[".googleLikeFields"][] = "Puntos_Examen_Final";
$tdatanotas[".googleLikeFields"][] = "Puntos_Examen_Extra_Ord";
$tdatanotas[".googleLikeFields"][] = "Puntos_Examen_Extra_Extra_Ord";
$tdatanotas[".googleLikeFields"][] = "Puntos_Asistencia";



$tdatanotas[".tableType"] = "list";

$tdatanotas[".printerPageOrientation"] = 0;
$tdatanotas[".nPrinterPageScale"] = 100;

$tdatanotas[".nPrinterSplitRecords"] = 40;

$tdatanotas[".nPrinterPDFSplitRecords"] = 40;


$tdatanotas[".geocodingEnabled"] = false;










$tdatanotas[".pageSize"] = 20;

$tdatanotas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanotas[".strOrderBy"] = $tstrOrderBy;

$tdatanotas[".orderindexes"] = array();

$tdatanotas[".sqlHead"] = "SELECT id,  	inscripcion_id,  	tipo_evaluacion,  	nota,  	descripcion,  	fecha_registro,  	Puntos_Trabajo_Practico,  	Puntos_Primer_Parcial,  	Puntos_Segundo_Parcial,  	Puntos_Examen_Final,  	Puntos_Examen_Extra_Ord,  	Puntos_Examen_Extra_Extra_Ord,  	Puntos_Asistencia";
$tdatanotas[".sqlFrom"] = "FROM notas";
$tdatanotas[".sqlWhereExpr"] = "";
$tdatanotas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanotas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanotas[".arrGroupsPerPage"] = $arrGPP;

$tdatanotas[".highlightSearchResults"] = true;

$tableKeysnotas = array();
$tableKeysnotas[] = "id";
$tdatanotas[".Keys"] = $tableKeysnotas;


$tdatanotas[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","id");
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


	$tdatanotas["id"] = $fdata;
		$tdatanotas[".searchableFields"][] = "id";
//	inscripcion_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "inscripcion_id";
	$fdata["GoodName"] = "inscripcion_id";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","inscripcion_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "inscripcion_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inscripcion_id";

	
	
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
	$edata["LookupTable"] = "inscripciones";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT((SELECT u.nombre FROM estudiantes e INNER JOIN usuarios u ON u.id = e.usuario_id WHERE e.id = inscripciones.estudiante_id), ' | ', (SELECT m.nombre FROM cursos c INNER JOIN materias m ON m.id = c.materia_id WHERE c.id = inscripciones.curso_id), ' (', (SELECT p.nombre FROM cursos c INNER JOIN periodos p ON p.id = c.periodo_id WHERE c.id = inscripciones.curso_id), ')')";

	

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


	$tdatanotas["inscripcion_id"] = $fdata;
		$tdatanotas[".searchableFields"][] = "inscripcion_id";
//	tipo_evaluacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_evaluacion";
	$fdata["GoodName"] = "tipo_evaluacion";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","tipo_evaluacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tipo_evaluacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_evaluacion";

	
	
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
	$edata["LookupValues"][] = "Primer Parcial";
	$edata["LookupValues"][] = "Segundo Parcial";
	$edata["LookupValues"][] = "Examen Final - 1er Llamado";
	$edata["LookupValues"][] = "Examen Final Extra Ordinario - 2do Llamado";
	$edata["LookupValues"][] = "Examen Final Adicional Extra Ordinario - 3er Llamado";
	$edata["LookupValues"][] = "Trabajo Práctico - Investigación";
	$edata["LookupValues"][] = "Asistencia - Registro Asistencia";

	
	
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


	$tdatanotas["tipo_evaluacion"] = $fdata;
		$tdatanotas[".searchableFields"][] = "tipo_evaluacion";
//	nota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nota";
	$fdata["GoodName"] = "nota";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","nota");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "nota";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nota";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatanotas["nota"] = $fdata;
		$tdatanotas[".searchableFields"][] = "nota";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","descripcion");
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


	$tdatanotas["descripcion"] = $fdata;
		$tdatanotas[".searchableFields"][] = "descripcion";
//	fecha_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_registro";
	$fdata["GoodName"] = "fecha_registro";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","fecha_registro");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_registro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_registro";

	
	
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


	$tdatanotas["fecha_registro"] = $fdata;
		$tdatanotas[".searchableFields"][] = "fecha_registro";
//	Puntos_Trabajo_Practico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Puntos_Trabajo_Practico";
	$fdata["GoodName"] = "Puntos_Trabajo_Practico";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","Puntos_Trabajo_Practico");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Puntos_Trabajo_Practico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puntos_Trabajo_Practico";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatanotas["Puntos_Trabajo_Practico"] = $fdata;
		$tdatanotas[".searchableFields"][] = "Puntos_Trabajo_Practico";
//	Puntos_Primer_Parcial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Puntos_Primer_Parcial";
	$fdata["GoodName"] = "Puntos_Primer_Parcial";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","Puntos_Primer_Parcial");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Puntos_Primer_Parcial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puntos_Primer_Parcial";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatanotas["Puntos_Primer_Parcial"] = $fdata;
		$tdatanotas[".searchableFields"][] = "Puntos_Primer_Parcial";
//	Puntos_Segundo_Parcial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Puntos_Segundo_Parcial";
	$fdata["GoodName"] = "Puntos_Segundo_Parcial";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","Puntos_Segundo_Parcial");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Puntos_Segundo_Parcial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puntos_Segundo_Parcial";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatanotas["Puntos_Segundo_Parcial"] = $fdata;
		$tdatanotas[".searchableFields"][] = "Puntos_Segundo_Parcial";
//	Puntos_Examen_Final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Puntos_Examen_Final";
	$fdata["GoodName"] = "Puntos_Examen_Final";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","Puntos_Examen_Final");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Puntos_Examen_Final";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puntos_Examen_Final";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatanotas["Puntos_Examen_Final"] = $fdata;
		$tdatanotas[".searchableFields"][] = "Puntos_Examen_Final";
//	Puntos_Examen_Extra_Ord
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Puntos_Examen_Extra_Ord";
	$fdata["GoodName"] = "Puntos_Examen_Extra_Ord";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","Puntos_Examen_Extra_Ord");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Puntos_Examen_Extra_Ord";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puntos_Examen_Extra_Ord";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatanotas["Puntos_Examen_Extra_Ord"] = $fdata;
		$tdatanotas[".searchableFields"][] = "Puntos_Examen_Extra_Ord";
//	Puntos_Examen_Extra_Extra_Ord
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Puntos_Examen_Extra_Extra_Ord";
	$fdata["GoodName"] = "Puntos_Examen_Extra_Extra_Ord";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","Puntos_Examen_Extra_Extra_Ord");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Puntos_Examen_Extra_Extra_Ord";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puntos_Examen_Extra_Extra_Ord";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatanotas["Puntos_Examen_Extra_Extra_Ord"] = $fdata;
		$tdatanotas[".searchableFields"][] = "Puntos_Examen_Extra_Extra_Ord";
//	Puntos_Asistencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Puntos_Asistencia";
	$fdata["GoodName"] = "Puntos_Asistencia";
	$fdata["ownerTable"] = "notas";
	$fdata["Label"] = GetFieldLabel("notas","Puntos_Asistencia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Puntos_Asistencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puntos_Asistencia";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatanotas["Puntos_Asistencia"] = $fdata;
		$tdatanotas[".searchableFields"][] = "Puntos_Asistencia";


$tables_data["notas"]=&$tdatanotas;
$field_labels["notas"] = &$fieldLabelsnotas;
$fieldToolTips["notas"] = &$fieldToolTipsnotas;
$placeHolders["notas"] = &$placeHoldersnotas;
$page_titles["notas"] = &$pageTitlesnotas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["notas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["notas"] = array();



	
				$strOriginalDetailsTable="inscripciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="inscripciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "inscripciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["notas"][0] = $masterParams;
				$masterTablesData["notas"][0]["masterKeys"] = array();
	$masterTablesData["notas"][0]["masterKeys"][]="id";
				$masterTablesData["notas"][0]["detailKeys"] = array();
	$masterTablesData["notas"][0]["detailKeys"][]="inscripcion_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_notas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	inscripcion_id,  	tipo_evaluacion,  	nota,  	descripcion,  	fecha_registro,  	Puntos_Trabajo_Practico,  	Puntos_Primer_Parcial,  	Puntos_Segundo_Parcial,  	Puntos_Examen_Final,  	Puntos_Examen_Extra_Ord,  	Puntos_Examen_Extra_Extra_Ord,  	Puntos_Asistencia";
$proto0["m_strFrom"] = "FROM notas";
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
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "notas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "inscripcion_id",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto8["m_sql"] = "inscripcion_id";
$proto8["m_srcTableName"] = "notas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_evaluacion",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto10["m_sql"] = "tipo_evaluacion";
$proto10["m_srcTableName"] = "notas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nota",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto12["m_sql"] = "nota";
$proto12["m_srcTableName"] = "notas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto14["m_sql"] = "descripcion";
$proto14["m_srcTableName"] = "notas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_registro",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto16["m_sql"] = "fecha_registro";
$proto16["m_srcTableName"] = "notas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntos_Trabajo_Practico",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto18["m_sql"] = "Puntos_Trabajo_Practico";
$proto18["m_srcTableName"] = "notas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntos_Primer_Parcial",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto20["m_sql"] = "Puntos_Primer_Parcial";
$proto20["m_srcTableName"] = "notas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntos_Segundo_Parcial",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto22["m_sql"] = "Puntos_Segundo_Parcial";
$proto22["m_srcTableName"] = "notas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntos_Examen_Final",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto24["m_sql"] = "Puntos_Examen_Final";
$proto24["m_srcTableName"] = "notas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntos_Examen_Extra_Ord",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto26["m_sql"] = "Puntos_Examen_Extra_Ord";
$proto26["m_srcTableName"] = "notas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntos_Examen_Extra_Extra_Ord",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto28["m_sql"] = "Puntos_Examen_Extra_Extra_Ord";
$proto28["m_srcTableName"] = "notas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Puntos_Asistencia",
	"m_strTable" => "notas",
	"m_srcTableName" => "notas"
));

$proto30["m_sql"] = "Puntos_Asistencia";
$proto30["m_srcTableName"] = "notas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "notas";
$proto33["m_srcTableName"] = "notas";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "inscripcion_id";
$proto33["m_columns"][] = "tipo_evaluacion";
$proto33["m_columns"][] = "nota";
$proto33["m_columns"][] = "descripcion";
$proto33["m_columns"][] = "fecha_registro";
$proto33["m_columns"][] = "Puntos_Trabajo_Practico";
$proto33["m_columns"][] = "Puntos_Primer_Parcial";
$proto33["m_columns"][] = "Puntos_Segundo_Parcial";
$proto33["m_columns"][] = "Puntos_Examen_Final";
$proto33["m_columns"][] = "Puntos_Examen_Extra_Ord";
$proto33["m_columns"][] = "Puntos_Examen_Extra_Extra_Ord";
$proto33["m_columns"][] = "Puntos_Asistencia";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "notas";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "notas";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="notas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_notas = createSqlQuery_notas();


	
		;

													

$tdatanotas[".sqlquery"] = $queryData_notas;

include_once(getabspath("include/notas_events.php"));
$tableEvents["notas"] = new eventclass_notas;
$tdatanotas[".hasEvents"] = true;

?>