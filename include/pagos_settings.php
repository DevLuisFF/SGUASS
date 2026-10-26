<?php




$tdatapagos = array();
$tdatapagos[".searchableFields"] = array();
	$tdatapagos[".truncateText"] = true;
	$tdatapagos[".NumberOfChars"] = 80;
	$tdatapagos[".ShortName"] = "pagos";
	$tdatapagos[".OwnerID"] = "";
	$tdatapagos[".OriginalTable"] = "pagos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatapagos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapagos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelspagos = array();
$fieldToolTipspagos = array();
$pageTitlespagos = array();
$placeHolderspagos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspagos["Spanish"] = array();
	$fieldToolTipspagos["Spanish"] = array();
	$placeHolderspagos["Spanish"] = array();
	$pageTitlespagos["Spanish"] = array();
	$fieldLabelspagos["Spanish"]["id"] = "Id";
	$fieldToolTipspagos["Spanish"]["id"] = "";
	$placeHolderspagos["Spanish"]["id"] = "";
	$fieldLabelspagos["Spanish"]["estudiante_id"] = "Estudiante Titular";
	$fieldToolTipspagos["Spanish"]["estudiante_id"] = "";
	$placeHolderspagos["Spanish"]["estudiante_id"] = "";
	$fieldLabelspagos["Spanish"]["periodo_id"] = "Periodo Académico";
	$fieldToolTipspagos["Spanish"]["periodo_id"] = "";
	$placeHolderspagos["Spanish"]["periodo_id"] = "";
	$fieldLabelspagos["Spanish"]["concepto_id"] = "Concepto Facturado";
	$fieldToolTipspagos["Spanish"]["concepto_id"] = "";
	$placeHolderspagos["Spanish"]["concepto_id"] = "";
	$fieldLabelspagos["Spanish"]["nro_cuota"] = "N° de Cuota";
	$fieldToolTipspagos["Spanish"]["nro_cuota"] = "";
	$placeHolderspagos["Spanish"]["nro_cuota"] = "";
	$fieldLabelspagos["Spanish"]["monto"] = "Importe";
	$fieldToolTipspagos["Spanish"]["monto"] = "";
	$placeHolderspagos["Spanish"]["monto"] = "";
	$fieldLabelspagos["Spanish"]["descuento"] = "Beca / Descuento";
	$fieldToolTipspagos["Spanish"]["descuento"] = "";
	$placeHolderspagos["Spanish"]["descuento"] = "";
	$fieldLabelspagos["Spanish"]["multa_mora"] = "Recargo por Mora";
	$fieldToolTipspagos["Spanish"]["multa_mora"] = "";
	$placeHolderspagos["Spanish"]["multa_mora"] = "";
	$fieldLabelspagos["Spanish"]["fecha_vencimiento"] = "Fecha Límite de Pago";
	$fieldToolTipspagos["Spanish"]["fecha_vencimiento"] = "";
	$placeHolderspagos["Spanish"]["fecha_vencimiento"] = "";
	$fieldLabelspagos["Spanish"]["fecha_pago"] = "Fecha de Cancelación";
	$fieldToolTipspagos["Spanish"]["fecha_pago"] = "";
	$placeHolderspagos["Spanish"]["fecha_pago"] = "";
	$fieldLabelspagos["Spanish"]["metodo_pago"] = "Forma de Pago";
	$fieldToolTipspagos["Spanish"]["metodo_pago"] = "";
	$placeHolderspagos["Spanish"]["metodo_pago"] = "";
	$fieldLabelspagos["Spanish"]["nro_comprobante"] = "N° Factura / Transacción";
	$fieldToolTipspagos["Spanish"]["nro_comprobante"] = "";
	$placeHolderspagos["Spanish"]["nro_comprobante"] = "";
	$fieldLabelspagos["Spanish"]["estado"] = "Estado de Cobro";
	$fieldToolTipspagos["Spanish"]["estado"] = "";
	$placeHolderspagos["Spanish"]["estado"] = "";
	$fieldLabelspagos["Spanish"]["matricula_semestre_id"] = "Matrícula Semestral";
	$fieldToolTipspagos["Spanish"]["matricula_semestre_id"] = "";
	$placeHolderspagos["Spanish"]["matricula_semestre_id"] = "";
	if (count($fieldToolTipspagos["Spanish"]))
		$tdatapagos[".isUseToolTips"] = true;
}


	$tdatapagos[".NCSearch"] = true;



$tdatapagos[".shortTableName"] = "pagos";
$tdatapagos[".nSecOptions"] = 0;

$tdatapagos[".mainTableOwnerID"] = "";
$tdatapagos[".entityType"] = 0;

$tdatapagos[".strOriginalTableName"] = "pagos";

	



$tdatapagos[".showAddInPopup"] = false;

$tdatapagos[".showEditInPopup"] = false;

$tdatapagos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapagos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapagos[".listAjax"] = false;
//	temporary
$tdatapagos[".listAjax"] = false;

	$tdatapagos[".audit"] = false;

	$tdatapagos[".locking"] = false;


$pages = $tdatapagos[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapagos[".edit"] = true;
	$tdatapagos[".afterEditAction"] = 1;
	$tdatapagos[".closePopupAfterEdit"] = 1;
	$tdatapagos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapagos[".add"] = true;
$tdatapagos[".afterAddAction"] = 1;
$tdatapagos[".closePopupAfterAdd"] = 1;
$tdatapagos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapagos[".list"] = true;
}



$tdatapagos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapagos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapagos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapagos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapagos[".printFriendly"] = true;
}



$tdatapagos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapagos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapagos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapagos[".isUseAjaxSuggest"] = true;

$tdatapagos[".rowHighlite"] = true;



																																																																																																												
$tdatapagos[".flexibleSearch"] = true;


$tdatapagos[".ajaxCodeSnippetAdded"] = false;

$tdatapagos[".buttonsAdded"] = false;

$tdatapagos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapagos[".isUseTimeForSearch"] = false;


$tdatapagos[".badgeColor"] = "6493EA";


$tdatapagos[".allSearchFields"] = array();
$tdatapagos[".filterFields"] = array();
$tdatapagos[".requiredSearchFields"] = array();

$tdatapagos[".googleLikeFields"] = array();
$tdatapagos[".googleLikeFields"][] = "id";
$tdatapagos[".googleLikeFields"][] = "estudiante_id";
$tdatapagos[".googleLikeFields"][] = "matricula_semestre_id";
$tdatapagos[".googleLikeFields"][] = "periodo_id";
$tdatapagos[".googleLikeFields"][] = "concepto_id";
$tdatapagos[".googleLikeFields"][] = "nro_cuota";
$tdatapagos[".googleLikeFields"][] = "monto";
$tdatapagos[".googleLikeFields"][] = "descuento";
$tdatapagos[".googleLikeFields"][] = "multa_mora";
$tdatapagos[".googleLikeFields"][] = "fecha_vencimiento";
$tdatapagos[".googleLikeFields"][] = "fecha_pago";
$tdatapagos[".googleLikeFields"][] = "metodo_pago";
$tdatapagos[".googleLikeFields"][] = "nro_comprobante";
$tdatapagos[".googleLikeFields"][] = "estado";



$tdatapagos[".tableType"] = "list";

$tdatapagos[".printerPageOrientation"] = 0;
$tdatapagos[".nPrinterPageScale"] = 100;

$tdatapagos[".nPrinterSplitRecords"] = 40;

$tdatapagos[".nPrinterPDFSplitRecords"] = 40;


$tdatapagos[".geocodingEnabled"] = false;










$tdatapagos[".pageSize"] = 20;

$tdatapagos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapagos[".strOrderBy"] = $tstrOrderBy;

$tdatapagos[".orderindexes"] = array();

$tdatapagos[".sqlHead"] = "SELECT id,  	estudiante_id,  	matricula_semestre_id,  	periodo_id,  	concepto_id,  	nro_cuota,  	monto,  	descuento,  	multa_mora,  	fecha_vencimiento,  	fecha_pago,  	metodo_pago,  	nro_comprobante,  	estado";
$tdatapagos[".sqlFrom"] = "FROM pagos";
$tdatapagos[".sqlWhereExpr"] = "";
$tdatapagos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapagos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapagos[".arrGroupsPerPage"] = $arrGPP;

$tdatapagos[".highlightSearchResults"] = true;

$tableKeyspagos = array();
$tableKeyspagos[] = "id";
$tdatapagos[".Keys"] = $tableKeyspagos;


$tdatapagos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","id");
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


	$tdatapagos["id"] = $fdata;
		$tdatapagos[".searchableFields"][] = "id";
//	estudiante_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estudiante_id";
	$fdata["GoodName"] = "estudiante_id";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","estudiante_id");
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
	$edata["DisplayField"] = "CONCAT((SELECT u.nombre FROM usuarios u WHERE u.id = estudiantes.usuario_id), ' | C.I.: ', COALESCE(estudiantes.numero_cedula, 'S/C'), ' | ', (SELECT c.nombre FROM carreras c WHERE c.id = estudiantes.carrera_id))";

	

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


	$tdatapagos["estudiante_id"] = $fdata;
		$tdatapagos[".searchableFields"][] = "estudiante_id";
//	matricula_semestre_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "matricula_semestre_id";
	$fdata["GoodName"] = "matricula_semestre_id";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","matricula_semestre_id");
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
	$edata["DisplayField"] = "CONCAT((SELECT c.nombre FROM carreras c WHERE c.id = matriculas_semestre.carrera_id), ' - ', matriculas_semestre.semestre, '° Semestre [', (SELECT p.nombre FROM periodos p WHERE p.id = matriculas_semestre.periodo_id), ']')";

	

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


	$tdatapagos["matricula_semestre_id"] = $fdata;
		$tdatapagos[".searchableFields"][] = "matricula_semestre_id";
//	periodo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "periodo_id";
	$fdata["GoodName"] = "periodo_id";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","periodo_id");
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
	$edata["DisplayField"] = "CONCAT(periodos.nombre, ' (', DATE_FORMAT(periodos.fecha_inicio, '%m/%Y'), ' a ', DATE_FORMAT(periodos.fecha_fin, '%m/%Y'), ')')";

	

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


	$tdatapagos["periodo_id"] = $fdata;
		$tdatapagos[".searchableFields"][] = "periodo_id";
//	concepto_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "concepto_id";
	$fdata["GoodName"] = "concepto_id";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","concepto_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "concepto_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concepto_id";

	
	
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
	$edata["LookupTable"] = "conceptos_pago";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"monto", 'lookupF'=>"monto");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT(conceptos_pago.nombre, ' - Gs./\$ ', FORMAT(conceptos_pago.monto, 0))";

	

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


	$tdatapagos["concepto_id"] = $fdata;
		$tdatapagos[".searchableFields"][] = "concepto_id";
//	nro_cuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nro_cuota";
	$fdata["GoodName"] = "nro_cuota";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","nro_cuota");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nro_cuota";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nro_cuota";

	
	
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
	$edata["LookupValues"][] = "Matrícula";
	$edata["LookupValues"][] = "Cuota 1";
	$edata["LookupValues"][] = "Cuota 2";
	$edata["LookupValues"][] = "Cuota 3";
	$edata["LookupValues"][] = "Cuota 4";
	$edata["LookupValues"][] = "Cuota 5";
	$edata["LookupValues"][] = "Cuota 6";
	$edata["LookupValues"][] = "Derecho de Examen";
	$edata["LookupValues"][] = "Pago Único / Total";

	
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


	$tdatapagos["nro_cuota"] = $fdata;
		$tdatapagos[".searchableFields"][] = "nro_cuota";
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","monto");
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


	$tdatapagos["monto"] = $fdata;
		$tdatapagos[".searchableFields"][] = "monto";
//	descuento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "descuento";
	$fdata["GoodName"] = "descuento";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","descuento");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "descuento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descuento";

	
	
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


	$tdatapagos["descuento"] = $fdata;
		$tdatapagos[".searchableFields"][] = "descuento";
//	multa_mora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "multa_mora";
	$fdata["GoodName"] = "multa_mora";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","multa_mora");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "multa_mora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "multa_mora";

	
	
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


	$tdatapagos["multa_mora"] = $fdata;
		$tdatapagos[".searchableFields"][] = "multa_mora";
//	fecha_vencimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fecha_vencimiento";
	$fdata["GoodName"] = "fecha_vencimiento";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","fecha_vencimiento");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_vencimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_vencimiento";

	
	
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


	$tdatapagos["fecha_vencimiento"] = $fdata;
		$tdatapagos[".searchableFields"][] = "fecha_vencimiento";
//	fecha_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_pago";
	$fdata["GoodName"] = "fecha_pago";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","fecha_pago");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_pago";

	
	
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


	$tdatapagos["fecha_pago"] = $fdata;
		$tdatapagos[".searchableFields"][] = "fecha_pago";
//	metodo_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "metodo_pago";
	$fdata["GoodName"] = "metodo_pago";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","metodo_pago");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "metodo_pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "metodo_pago";

	
	
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
	$edata["LookupValues"][] = "Efectivo";
	$edata["LookupValues"][] = "Transferencia";
	$edata["LookupValues"][] = "Tarjeta";
	$edata["LookupValues"][] = "Billetera Móvil";

	
	
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


	$tdatapagos["metodo_pago"] = $fdata;
		$tdatapagos[".searchableFields"][] = "metodo_pago";
//	nro_comprobante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "nro_comprobante";
	$fdata["GoodName"] = "nro_comprobante";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","nro_comprobante");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nro_comprobante";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nro_comprobante";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatapagos["nro_comprobante"] = $fdata;
		$tdatapagos[".searchableFields"][] = "nro_comprobante";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "pagos";
	$fdata["Label"] = GetFieldLabel("pagos","estado");
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
	$edata["LookupValues"][] = "Pendiente";
	$edata["LookupValues"][] = "Pagado";
	$edata["LookupValues"][] = "Vencido";

	
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


	$tdatapagos["estado"] = $fdata;
		$tdatapagos[".searchableFields"][] = "estado";


$tables_data["pagos"]=&$tdatapagos;
$field_labels["pagos"] = &$fieldLabelspagos;
$fieldToolTips["pagos"] = &$fieldToolTipspagos;
$placeHolders["pagos"] = &$placeHolderspagos;
$page_titles["pagos"] = &$pageTitlespagos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pagos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pagos"] = array();



	
				$strOriginalDetailsTable="estudiantes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="estudiantes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estudiantes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pagos"][0] = $masterParams;
				$masterTablesData["pagos"][0]["masterKeys"] = array();
	$masterTablesData["pagos"][0]["masterKeys"][]="id";
				$masterTablesData["pagos"][0]["detailKeys"] = array();
	$masterTablesData["pagos"][0]["detailKeys"][]="estudiante_id";
		
	
				$strOriginalDetailsTable="conceptos_pago";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="conceptos_pago";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "conceptos_pago";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pagos"][1] = $masterParams;
				$masterTablesData["pagos"][1]["masterKeys"] = array();
	$masterTablesData["pagos"][1]["masterKeys"][]="id";
				$masterTablesData["pagos"][1]["detailKeys"] = array();
	$masterTablesData["pagos"][1]["detailKeys"][]="concepto_id";
		
	
				$strOriginalDetailsTable="periodos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="periodos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "periodos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pagos"][2] = $masterParams;
				$masterTablesData["pagos"][2]["masterKeys"] = array();
	$masterTablesData["pagos"][2]["masterKeys"][]="id";
				$masterTablesData["pagos"][2]["detailKeys"] = array();
	$masterTablesData["pagos"][2]["detailKeys"][]="periodo_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_pagos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	estudiante_id,  	matricula_semestre_id,  	periodo_id,  	concepto_id,  	nro_cuota,  	monto,  	descuento,  	multa_mora,  	fecha_vencimiento,  	fecha_pago,  	metodo_pago,  	nro_comprobante,  	estado";
$proto0["m_strFrom"] = "FROM pagos";
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
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pagos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estudiante_id",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto8["m_sql"] = "estudiante_id";
$proto8["m_srcTableName"] = "pagos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_semestre_id",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto10["m_sql"] = "matricula_semestre_id";
$proto10["m_srcTableName"] = "pagos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_id",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto12["m_sql"] = "periodo_id";
$proto12["m_srcTableName"] = "pagos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "concepto_id",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto14["m_sql"] = "concepto_id";
$proto14["m_srcTableName"] = "pagos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_cuota",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto16["m_sql"] = "nro_cuota";
$proto16["m_srcTableName"] = "pagos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto18["m_sql"] = "monto";
$proto18["m_srcTableName"] = "pagos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "descuento",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto20["m_sql"] = "descuento";
$proto20["m_srcTableName"] = "pagos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "multa_mora",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto22["m_sql"] = "multa_mora";
$proto22["m_srcTableName"] = "pagos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_vencimiento",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto24["m_sql"] = "fecha_vencimiento";
$proto24["m_srcTableName"] = "pagos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_pago",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto26["m_sql"] = "fecha_pago";
$proto26["m_srcTableName"] = "pagos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "metodo_pago",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto28["m_sql"] = "metodo_pago";
$proto28["m_srcTableName"] = "pagos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_comprobante",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto30["m_sql"] = "nro_comprobante";
$proto30["m_srcTableName"] = "pagos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "pagos",
	"m_srcTableName" => "pagos"
));

$proto32["m_sql"] = "estado";
$proto32["m_srcTableName"] = "pagos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "pagos";
$proto35["m_srcTableName"] = "pagos";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "estudiante_id";
$proto35["m_columns"][] = "matricula_semestre_id";
$proto35["m_columns"][] = "periodo_id";
$proto35["m_columns"][] = "concepto_id";
$proto35["m_columns"][] = "nro_cuota";
$proto35["m_columns"][] = "monto";
$proto35["m_columns"][] = "descuento";
$proto35["m_columns"][] = "multa_mora";
$proto35["m_columns"][] = "fecha_vencimiento";
$proto35["m_columns"][] = "fecha_pago";
$proto35["m_columns"][] = "metodo_pago";
$proto35["m_columns"][] = "nro_comprobante";
$proto35["m_columns"][] = "estado";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "pagos";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "pagos";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pagos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pagos = createSqlQuery_pagos();


	
		;

														

$tdatapagos[".sqlquery"] = $queryData_pagos;

include_once(getabspath("include/pagos_events.php"));
$tableEvents["pagos"] = new eventclass_pagos;
$tdatapagos[".hasEvents"] = true;

?>