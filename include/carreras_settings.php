<?php




$tdatacarreras = array();
$tdatacarreras[".searchableFields"] = array();
	$tdatacarreras[".truncateText"] = true;
	$tdatacarreras[".NumberOfChars"] = 80;
	$tdatacarreras[".ShortName"] = "carreras";
	$tdatacarreras[".OwnerID"] = "";
	$tdatacarreras[".OriginalTable"] = "carreras";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacarreras[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacarreras[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscarreras = array();
$fieldToolTipscarreras = array();
$pageTitlescarreras = array();
$placeHolderscarreras = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarreras["Spanish"] = array();
	$fieldToolTipscarreras["Spanish"] = array();
	$placeHolderscarreras["Spanish"] = array();
	$pageTitlescarreras["Spanish"] = array();
	$fieldLabelscarreras["Spanish"]["id"] = "Id";
	$fieldToolTipscarreras["Spanish"]["id"] = "";
	$placeHolderscarreras["Spanish"]["id"] = "";
	$fieldLabelscarreras["Spanish"]["nombre"] = "Nombre de la Carrera";
	$fieldToolTipscarreras["Spanish"]["nombre"] = "";
	$placeHolderscarreras["Spanish"]["nombre"] = "";
	$fieldLabelscarreras["Spanish"]["descripcion"] = "	Descripción / Perfil de Egreso";
	$fieldToolTipscarreras["Spanish"]["descripcion"] = "";
	$placeHolderscarreras["Spanish"]["descripcion"] = "";
	$fieldLabelscarreras["Spanish"]["costo_matricula"] = "Arancel de Matrícula";
	$fieldToolTipscarreras["Spanish"]["costo_matricula"] = "";
	$placeHolderscarreras["Spanish"]["costo_matricula"] = "";
	$fieldLabelscarreras["Spanish"]["costo_semestre"] = "Costo Total del Semestre";
	$fieldToolTipscarreras["Spanish"]["costo_semestre"] = "";
	$placeHolderscarreras["Spanish"]["costo_semestre"] = "";
	$fieldLabelscarreras["Spanish"]["cantidad_cuotas"] = "Cantidad de Cuotas";
	$fieldToolTipscarreras["Spanish"]["cantidad_cuotas"] = "";
	$placeHolderscarreras["Spanish"]["cantidad_cuotas"] = "";
	$fieldLabelscarreras["Spanish"]["costo_derecho_examen"] = "Derecho de Examen";
	$fieldToolTipscarreras["Spanish"]["costo_derecho_examen"] = "";
	$placeHolderscarreras["Spanish"]["costo_derecho_examen"] = "";
	$fieldLabelscarreras["Spanish"]["estado"] = "Estado del Programa";
	$fieldToolTipscarreras["Spanish"]["estado"] = "";
	$placeHolderscarreras["Spanish"]["estado"] = "";
	if (count($fieldToolTipscarreras["Spanish"]))
		$tdatacarreras[".isUseToolTips"] = true;
}


	$tdatacarreras[".NCSearch"] = true;



$tdatacarreras[".shortTableName"] = "carreras";
$tdatacarreras[".nSecOptions"] = 0;

$tdatacarreras[".mainTableOwnerID"] = "";
$tdatacarreras[".entityType"] = 0;

$tdatacarreras[".strOriginalTableName"] = "carreras";

	



$tdatacarreras[".showAddInPopup"] = false;

$tdatacarreras[".showEditInPopup"] = false;

$tdatacarreras[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarreras[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarreras[".listAjax"] = false;
//	temporary
$tdatacarreras[".listAjax"] = false;

	$tdatacarreras[".audit"] = false;

	$tdatacarreras[".locking"] = false;


$pages = $tdatacarreras[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarreras[".edit"] = true;
	$tdatacarreras[".afterEditAction"] = 1;
	$tdatacarreras[".closePopupAfterEdit"] = 1;
	$tdatacarreras[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarreras[".add"] = true;
$tdatacarreras[".afterAddAction"] = 1;
$tdatacarreras[".closePopupAfterAdd"] = 1;
$tdatacarreras[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarreras[".list"] = true;
}



$tdatacarreras[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarreras[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarreras[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarreras[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarreras[".printFriendly"] = true;
}



$tdatacarreras[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarreras[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarreras[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarreras[".isUseAjaxSuggest"] = true;

$tdatacarreras[".rowHighlite"] = true;



																											
$tdatacarreras[".flexibleSearch"] = true;


$tdatacarreras[".ajaxCodeSnippetAdded"] = false;

$tdatacarreras[".buttonsAdded"] = false;

$tdatacarreras[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacarreras[".isUseTimeForSearch"] = false;


$tdatacarreras[".badgeColor"] = "E67349";


$tdatacarreras[".allSearchFields"] = array();
$tdatacarreras[".filterFields"] = array();
$tdatacarreras[".requiredSearchFields"] = array();

$tdatacarreras[".googleLikeFields"] = array();
$tdatacarreras[".googleLikeFields"][] = "id";
$tdatacarreras[".googleLikeFields"][] = "nombre";
$tdatacarreras[".googleLikeFields"][] = "descripcion";
$tdatacarreras[".googleLikeFields"][] = "costo_matricula";
$tdatacarreras[".googleLikeFields"][] = "costo_semestre";
$tdatacarreras[".googleLikeFields"][] = "cantidad_cuotas";
$tdatacarreras[".googleLikeFields"][] = "costo_derecho_examen";
$tdatacarreras[".googleLikeFields"][] = "estado";



$tdatacarreras[".tableType"] = "list";

$tdatacarreras[".printerPageOrientation"] = 0;
$tdatacarreras[".nPrinterPageScale"] = 100;

$tdatacarreras[".nPrinterSplitRecords"] = 40;

$tdatacarreras[".nPrinterPDFSplitRecords"] = 40;


$tdatacarreras[".geocodingEnabled"] = false;










$tdatacarreras[".pageSize"] = 20;

$tdatacarreras[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarreras[".strOrderBy"] = $tstrOrderBy;

$tdatacarreras[".orderindexes"] = array();

$tdatacarreras[".sqlHead"] = "SELECT id,  	nombre,  	descripcion,  	costo_matricula,  	costo_semestre,  	cantidad_cuotas,  	costo_derecho_examen,  	estado";
$tdatacarreras[".sqlFrom"] = "FROM carreras";
$tdatacarreras[".sqlWhereExpr"] = "";
$tdatacarreras[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarreras[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarreras[".arrGroupsPerPage"] = $arrGPP;

$tdatacarreras[".highlightSearchResults"] = true;

$tableKeyscarreras = array();
$tableKeyscarreras[] = "id";
$tdatacarreras[".Keys"] = $tableKeyscarreras;


$tdatacarreras[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carreras";
	$fdata["Label"] = GetFieldLabel("carreras","id");
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


	$tdatacarreras["id"] = $fdata;
		$tdatacarreras[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "carreras";
	$fdata["Label"] = GetFieldLabel("carreras","nombre");
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


	$tdatacarreras["nombre"] = $fdata;
		$tdatacarreras[".searchableFields"][] = "nombre";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "carreras";
	$fdata["Label"] = GetFieldLabel("carreras","descripcion");
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


	$tdatacarreras["descripcion"] = $fdata;
		$tdatacarreras[".searchableFields"][] = "descripcion";
//	costo_matricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "costo_matricula";
	$fdata["GoodName"] = "costo_matricula";
	$fdata["ownerTable"] = "carreras";
	$fdata["Label"] = GetFieldLabel("carreras","costo_matricula");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "costo_matricula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costo_matricula";

	
	
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


	$tdatacarreras["costo_matricula"] = $fdata;
		$tdatacarreras[".searchableFields"][] = "costo_matricula";
//	costo_semestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "costo_semestre";
	$fdata["GoodName"] = "costo_semestre";
	$fdata["ownerTable"] = "carreras";
	$fdata["Label"] = GetFieldLabel("carreras","costo_semestre");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "costo_semestre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costo_semestre";

	
	
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


	$tdatacarreras["costo_semestre"] = $fdata;
		$tdatacarreras[".searchableFields"][] = "costo_semestre";
//	cantidad_cuotas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cantidad_cuotas";
	$fdata["GoodName"] = "cantidad_cuotas";
	$fdata["ownerTable"] = "carreras";
	$fdata["Label"] = GetFieldLabel("carreras","cantidad_cuotas");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cantidad_cuotas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad_cuotas";

	
	
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


	$tdatacarreras["cantidad_cuotas"] = $fdata;
		$tdatacarreras[".searchableFields"][] = "cantidad_cuotas";
//	costo_derecho_examen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "costo_derecho_examen";
	$fdata["GoodName"] = "costo_derecho_examen";
	$fdata["ownerTable"] = "carreras";
	$fdata["Label"] = GetFieldLabel("carreras","costo_derecho_examen");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "costo_derecho_examen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costo_derecho_examen";

	
	
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


	$tdatacarreras["costo_derecho_examen"] = $fdata;
		$tdatacarreras[".searchableFields"][] = "costo_derecho_examen";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "carreras";
	$fdata["Label"] = GetFieldLabel("carreras","estado");
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
	$edata["LookupValues"][] = "Inactivo";

	
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


	$tdatacarreras["estado"] = $fdata;
		$tdatacarreras[".searchableFields"][] = "estado";


$tables_data["carreras"]=&$tdatacarreras;
$field_labels["carreras"] = &$fieldLabelscarreras;
$fieldToolTips["carreras"] = &$fieldToolTipscarreras;
$placeHolders["carreras"] = &$placeHolderscarreras;
$page_titles["carreras"] = &$pageTitlescarreras;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carreras"] = array();
//	carrera_materia
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="carrera_materia";
		$detailsParam["dOriginalTable"] = "carrera_materia";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "carrera_materia";
	$detailsParam["dCaptionTable"] = GetTableCaption("carrera_materia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["carreras"][$dIndex] = $detailsParam;

	
		$detailsTablesData["carreras"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["carreras"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["carreras"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["carreras"][$dIndex]["detailKeys"][]="carrera_id";
//	estudiantes
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="estudiantes";
		$detailsParam["dOriginalTable"] = "estudiantes";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "estudiantes";
	$detailsParam["dCaptionTable"] = GetTableCaption("estudiantes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["carreras"][$dIndex] = $detailsParam;

	
		$detailsTablesData["carreras"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["carreras"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["carreras"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["carreras"][$dIndex]["detailKeys"][]="carrera_id";

// tables which are master tables for current table (detail)
$masterTablesData["carreras"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_carreras()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	descripcion,  	costo_matricula,  	costo_semestre,  	cantidad_cuotas,  	costo_derecho_examen,  	estado";
$proto0["m_strFrom"] = "FROM carreras";
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
	"m_strTable" => "carreras",
	"m_srcTableName" => "carreras"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "carreras";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "carreras",
	"m_srcTableName" => "carreras"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "carreras";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "carreras",
	"m_srcTableName" => "carreras"
));

$proto10["m_sql"] = "descripcion";
$proto10["m_srcTableName"] = "carreras";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_matricula",
	"m_strTable" => "carreras",
	"m_srcTableName" => "carreras"
));

$proto12["m_sql"] = "costo_matricula";
$proto12["m_srcTableName"] = "carreras";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_semestre",
	"m_strTable" => "carreras",
	"m_srcTableName" => "carreras"
));

$proto14["m_sql"] = "costo_semestre";
$proto14["m_srcTableName"] = "carreras";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_cuotas",
	"m_strTable" => "carreras",
	"m_srcTableName" => "carreras"
));

$proto16["m_sql"] = "cantidad_cuotas";
$proto16["m_srcTableName"] = "carreras";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_derecho_examen",
	"m_strTable" => "carreras",
	"m_srcTableName" => "carreras"
));

$proto18["m_sql"] = "costo_derecho_examen";
$proto18["m_srcTableName"] = "carreras";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "carreras",
	"m_srcTableName" => "carreras"
));

$proto20["m_sql"] = "estado";
$proto20["m_srcTableName"] = "carreras";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "carreras";
$proto23["m_srcTableName"] = "carreras";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "nombre";
$proto23["m_columns"][] = "descripcion";
$proto23["m_columns"][] = "costo_matricula";
$proto23["m_columns"][] = "costo_semestre";
$proto23["m_columns"][] = "cantidad_cuotas";
$proto23["m_columns"][] = "costo_derecho_examen";
$proto23["m_columns"][] = "estado";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "carreras";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "carreras";
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
$proto0["m_srcTableName"]="carreras";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carreras = createSqlQuery_carreras();


	
		;

								

$tdatacarreras[".sqlquery"] = $queryData_carreras;

include_once(getabspath("include/carreras_events.php"));
$tableEvents["carreras"] = new eventclass_carreras;
$tdatacarreras[".hasEvents"] = true;

?>