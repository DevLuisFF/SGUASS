<?php




$tdatatarea_entregas = array();
$tdatatarea_entregas[".searchableFields"] = array();
	$tdatatarea_entregas[".truncateText"] = true;
	$tdatatarea_entregas[".NumberOfChars"] = 80;
	$tdatatarea_entregas[".ShortName"] = "tarea_entregas";
	$tdatatarea_entregas[".OwnerID"] = "";
	$tdatatarea_entregas[".OriginalTable"] = "tarea_entregas";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatarea_entregas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatarea_entregas[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstarea_entregas = array();
$fieldToolTipstarea_entregas = array();
$pageTitlestarea_entregas = array();
$placeHolderstarea_entregas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstarea_entregas["Spanish"] = array();
	$fieldToolTipstarea_entregas["Spanish"] = array();
	$placeHolderstarea_entregas["Spanish"] = array();
	$pageTitlestarea_entregas["Spanish"] = array();
	$fieldLabelstarea_entregas["Spanish"]["id"] = "Id";
	$fieldToolTipstarea_entregas["Spanish"]["id"] = "";
	$placeHolderstarea_entregas["Spanish"]["id"] = "";
	$fieldLabelstarea_entregas["Spanish"]["tarea_id"] = "Tarea Asignada";
	$fieldToolTipstarea_entregas["Spanish"]["tarea_id"] = "";
	$placeHolderstarea_entregas["Spanish"]["tarea_id"] = "";
	$fieldLabelstarea_entregas["Spanish"]["estudiante_id"] = "Estudiante";
	$fieldToolTipstarea_entregas["Spanish"]["estudiante_id"] = "";
	$placeHolderstarea_entregas["Spanish"]["estudiante_id"] = "";
	$fieldLabelstarea_entregas["Spanish"]["archivo"] = "Documento Adjunto";
	$fieldToolTipstarea_entregas["Spanish"]["archivo"] = "";
	$placeHolderstarea_entregas["Spanish"]["archivo"] = "";
	$fieldLabelstarea_entregas["Spanish"]["comentario"] = "Comentario del Estudiante";
	$fieldToolTipstarea_entregas["Spanish"]["comentario"] = "";
	$placeHolderstarea_entregas["Spanish"]["comentario"] = "";
	$fieldLabelstarea_entregas["Spanish"]["fecha_entrega"] = "Fecha y Hora de Envío";
	$fieldToolTipstarea_entregas["Spanish"]["fecha_entrega"] = "";
	$placeHolderstarea_entregas["Spanish"]["fecha_entrega"] = "";
	$fieldLabelstarea_entregas["Spanish"]["calificacion"] = "Puntaje Obtenido";
	$fieldToolTipstarea_entregas["Spanish"]["calificacion"] = "";
	$placeHolderstarea_entregas["Spanish"]["calificacion"] = "";
	if (count($fieldToolTipstarea_entregas["Spanish"]))
		$tdatatarea_entregas[".isUseToolTips"] = true;
}


	$tdatatarea_entregas[".NCSearch"] = true;



$tdatatarea_entregas[".shortTableName"] = "tarea_entregas";
$tdatatarea_entregas[".nSecOptions"] = 0;

$tdatatarea_entregas[".mainTableOwnerID"] = "";
$tdatatarea_entregas[".entityType"] = 0;

$tdatatarea_entregas[".strOriginalTableName"] = "tarea_entregas";

	



$tdatatarea_entregas[".showAddInPopup"] = false;

$tdatatarea_entregas[".showEditInPopup"] = false;

$tdatatarea_entregas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatarea_entregas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatarea_entregas[".listAjax"] = false;
//	temporary
$tdatatarea_entregas[".listAjax"] = false;

	$tdatatarea_entregas[".audit"] = false;

	$tdatatarea_entregas[".locking"] = false;


$pages = $tdatatarea_entregas[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatarea_entregas[".edit"] = true;
	$tdatatarea_entregas[".afterEditAction"] = 1;
	$tdatatarea_entregas[".closePopupAfterEdit"] = 1;
	$tdatatarea_entregas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatarea_entregas[".add"] = true;
$tdatatarea_entregas[".afterAddAction"] = 1;
$tdatatarea_entregas[".closePopupAfterAdd"] = 1;
$tdatatarea_entregas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatarea_entregas[".list"] = true;
}



$tdatatarea_entregas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatarea_entregas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatarea_entregas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatarea_entregas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatarea_entregas[".printFriendly"] = true;
}



$tdatatarea_entregas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatarea_entregas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatarea_entregas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatarea_entregas[".isUseAjaxSuggest"] = true;

$tdatatarea_entregas[".rowHighlite"] = true;



																																																																																	
$tdatatarea_entregas[".flexibleSearch"] = true;


$tdatatarea_entregas[".ajaxCodeSnippetAdded"] = false;

$tdatatarea_entregas[".buttonsAdded"] = false;

$tdatatarea_entregas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatarea_entregas[".isUseTimeForSearch"] = false;


$tdatatarea_entregas[".badgeColor"] = "E67349";


$tdatatarea_entregas[".allSearchFields"] = array();
$tdatatarea_entregas[".filterFields"] = array();
$tdatatarea_entregas[".requiredSearchFields"] = array();

$tdatatarea_entregas[".googleLikeFields"] = array();
$tdatatarea_entregas[".googleLikeFields"][] = "id";
$tdatatarea_entregas[".googleLikeFields"][] = "tarea_id";
$tdatatarea_entregas[".googleLikeFields"][] = "estudiante_id";
$tdatatarea_entregas[".googleLikeFields"][] = "archivo";
$tdatatarea_entregas[".googleLikeFields"][] = "comentario";
$tdatatarea_entregas[".googleLikeFields"][] = "fecha_entrega";
$tdatatarea_entregas[".googleLikeFields"][] = "calificacion";



$tdatatarea_entregas[".tableType"] = "list";

$tdatatarea_entregas[".printerPageOrientation"] = 0;
$tdatatarea_entregas[".nPrinterPageScale"] = 100;

$tdatatarea_entregas[".nPrinterSplitRecords"] = 40;

$tdatatarea_entregas[".nPrinterPDFSplitRecords"] = 40;


$tdatatarea_entregas[".geocodingEnabled"] = false;










$tdatatarea_entregas[".pageSize"] = 20;

$tdatatarea_entregas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatarea_entregas[".strOrderBy"] = $tstrOrderBy;

$tdatatarea_entregas[".orderindexes"] = array();

$tdatatarea_entregas[".sqlHead"] = "SELECT id,  	tarea_id,  	estudiante_id,  	archivo,  	comentario,  	fecha_entrega,  	calificacion";
$tdatatarea_entregas[".sqlFrom"] = "FROM tarea_entregas";
$tdatatarea_entregas[".sqlWhereExpr"] = "";
$tdatatarea_entregas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatarea_entregas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatarea_entregas[".arrGroupsPerPage"] = $arrGPP;

$tdatatarea_entregas[".highlightSearchResults"] = true;

$tableKeystarea_entregas = array();
$tableKeystarea_entregas[] = "id";
$tdatatarea_entregas[".Keys"] = $tableKeystarea_entregas;


$tdatatarea_entregas[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tarea_entregas";
	$fdata["Label"] = GetFieldLabel("tarea_entregas","id");
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


	$tdatatarea_entregas["id"] = $fdata;
		$tdatatarea_entregas[".searchableFields"][] = "id";
//	tarea_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarea_id";
	$fdata["GoodName"] = "tarea_id";
	$fdata["ownerTable"] = "tarea_entregas";
	$fdata["Label"] = GetFieldLabel("tarea_entregas","tarea_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "tarea_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tarea_id";

	
	
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
	$edata["LookupTable"] = "tareas";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT(tareas.titulo, ' (Vence: ', DATE_FORMAT(tareas.fecha_entrega, '%d/%m/%Y %H:%i'), ') - ', (SELECT m.nombre FROM cursos c INNER JOIN materias m ON m.id = c.materia_id WHERE c.id = tareas.curso_id))";

	

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


	$tdatatarea_entregas["tarea_id"] = $fdata;
		$tdatatarea_entregas[".searchableFields"][] = "tarea_id";
//	estudiante_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estudiante_id";
	$fdata["GoodName"] = "estudiante_id";
	$fdata["ownerTable"] = "tarea_entregas";
	$fdata["Label"] = GetFieldLabel("tarea_entregas","estudiante_id");
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
	$edata["DisplayField"] = "CONCAT((SELECT u.nombre FROM usuarios u WHERE u.id = estudiantes.usuario_id), ' (Matrícula: ', COALESCE(estudiantes.matricula, 'S/M'), ')')";

	

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


	$tdatatarea_entregas["estudiante_id"] = $fdata;
		$tdatatarea_entregas[".searchableFields"][] = "estudiante_id";
//	archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "archivo";
	$fdata["GoodName"] = "archivo";
	$fdata["ownerTable"] = "tarea_entregas";
	$fdata["Label"] = GetFieldLabel("tarea_entregas","archivo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "archivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "archivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
	



	
	
	
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


	$tdatatarea_entregas["archivo"] = $fdata;
		$tdatatarea_entregas[".searchableFields"][] = "archivo";
//	comentario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "comentario";
	$fdata["GoodName"] = "comentario";
	$fdata["ownerTable"] = "tarea_entregas";
	$fdata["Label"] = GetFieldLabel("tarea_entregas","comentario");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "comentario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comentario";

	
	
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


	$tdatatarea_entregas["comentario"] = $fdata;
		$tdatatarea_entregas[".searchableFields"][] = "comentario";
//	fecha_entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_entrega";
	$fdata["GoodName"] = "fecha_entrega";
	$fdata["ownerTable"] = "tarea_entregas";
	$fdata["Label"] = GetFieldLabel("tarea_entregas","fecha_entrega");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_entrega";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_entrega";

	
	
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


	$tdatatarea_entregas["fecha_entrega"] = $fdata;
		$tdatatarea_entregas[".searchableFields"][] = "fecha_entrega";
//	calificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "calificacion";
	$fdata["GoodName"] = "calificacion";
	$fdata["ownerTable"] = "tarea_entregas";
	$fdata["Label"] = GetFieldLabel("tarea_entregas","calificacion");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "calificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calificacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatatarea_entregas["calificacion"] = $fdata;
		$tdatatarea_entregas[".searchableFields"][] = "calificacion";


$tables_data["tarea_entregas"]=&$tdatatarea_entregas;
$field_labels["tarea_entregas"] = &$fieldLabelstarea_entregas;
$fieldToolTips["tarea_entregas"] = &$fieldToolTipstarea_entregas;
$placeHolders["tarea_entregas"] = &$placeHolderstarea_entregas;
$page_titles["tarea_entregas"] = &$pageTitlestarea_entregas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tarea_entregas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tarea_entregas"] = array();



	
				$strOriginalDetailsTable="estudiantes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="estudiantes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estudiantes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tarea_entregas"][0] = $masterParams;
				$masterTablesData["tarea_entregas"][0]["masterKeys"] = array();
	$masterTablesData["tarea_entregas"][0]["masterKeys"][]="id";
				$masterTablesData["tarea_entregas"][0]["detailKeys"] = array();
	$masterTablesData["tarea_entregas"][0]["detailKeys"][]="estudiante_id";
		
	
				$strOriginalDetailsTable="tareas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tareas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tareas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tarea_entregas"][1] = $masterParams;
				$masterTablesData["tarea_entregas"][1]["masterKeys"] = array();
	$masterTablesData["tarea_entregas"][1]["masterKeys"][]="id";
				$masterTablesData["tarea_entregas"][1]["detailKeys"] = array();
	$masterTablesData["tarea_entregas"][1]["detailKeys"][]="tarea_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tarea_entregas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	tarea_id,  	estudiante_id,  	archivo,  	comentario,  	fecha_entrega,  	calificacion";
$proto0["m_strFrom"] = "FROM tarea_entregas";
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
	"m_strTable" => "tarea_entregas",
	"m_srcTableName" => "tarea_entregas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tarea_entregas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tarea_id",
	"m_strTable" => "tarea_entregas",
	"m_srcTableName" => "tarea_entregas"
));

$proto8["m_sql"] = "tarea_id";
$proto8["m_srcTableName"] = "tarea_entregas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estudiante_id",
	"m_strTable" => "tarea_entregas",
	"m_srcTableName" => "tarea_entregas"
));

$proto10["m_sql"] = "estudiante_id";
$proto10["m_srcTableName"] = "tarea_entregas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "archivo",
	"m_strTable" => "tarea_entregas",
	"m_srcTableName" => "tarea_entregas"
));

$proto12["m_sql"] = "archivo";
$proto12["m_srcTableName"] = "tarea_entregas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "comentario",
	"m_strTable" => "tarea_entregas",
	"m_srcTableName" => "tarea_entregas"
));

$proto14["m_sql"] = "comentario";
$proto14["m_srcTableName"] = "tarea_entregas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_entrega",
	"m_strTable" => "tarea_entregas",
	"m_srcTableName" => "tarea_entregas"
));

$proto16["m_sql"] = "fecha_entrega";
$proto16["m_srcTableName"] = "tarea_entregas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "calificacion",
	"m_strTable" => "tarea_entregas",
	"m_srcTableName" => "tarea_entregas"
));

$proto18["m_sql"] = "calificacion";
$proto18["m_srcTableName"] = "tarea_entregas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tarea_entregas";
$proto21["m_srcTableName"] = "tarea_entregas";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "tarea_id";
$proto21["m_columns"][] = "estudiante_id";
$proto21["m_columns"][] = "archivo";
$proto21["m_columns"][] = "comentario";
$proto21["m_columns"][] = "fecha_entrega";
$proto21["m_columns"][] = "calificacion";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tarea_entregas";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tarea_entregas";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tarea_entregas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tarea_entregas = createSqlQuery_tarea_entregas();


	
		;

							

$tdatatarea_entregas[".sqlquery"] = $queryData_tarea_entregas;

include_once(getabspath("include/tarea_entregas_events.php"));
$tableEvents["tarea_entregas"] = new eventclass_tarea_entregas;
$tdatatarea_entregas[".hasEvents"] = true;

?>