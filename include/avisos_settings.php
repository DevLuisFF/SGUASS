<?php




$tdataavisos = array();
$tdataavisos[".searchableFields"] = array();
	$tdataavisos[".truncateText"] = true;
	$tdataavisos[".NumberOfChars"] = 80;
	$tdataavisos[".ShortName"] = "avisos";
	$tdataavisos[".OwnerID"] = "";
	$tdataavisos[".OriginalTable"] = "avisos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataavisos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataavisos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsavisos = array();
$fieldToolTipsavisos = array();
$pageTitlesavisos = array();
$placeHoldersavisos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsavisos["Spanish"] = array();
	$fieldToolTipsavisos["Spanish"] = array();
	$placeHoldersavisos["Spanish"] = array();
	$pageTitlesavisos["Spanish"] = array();
	$fieldLabelsavisos["Spanish"]["id"] = "Id";
	$fieldToolTipsavisos["Spanish"]["id"] = "";
	$placeHoldersavisos["Spanish"]["id"] = "";
	$fieldLabelsavisos["Spanish"]["curso_id"] = "Cátedra / Materia";
	$fieldToolTipsavisos["Spanish"]["curso_id"] = "";
	$placeHoldersavisos["Spanish"]["curso_id"] = "";
	$fieldLabelsavisos["Spanish"]["titulo"] = "Título del Comunicado";
	$fieldToolTipsavisos["Spanish"]["titulo"] = "";
	$placeHoldersavisos["Spanish"]["titulo"] = "";
	$fieldLabelsavisos["Spanish"]["descripcion"] = "Mensaje / Contenido";
	$fieldToolTipsavisos["Spanish"]["descripcion"] = "";
	$placeHoldersavisos["Spanish"]["descripcion"] = "";
	$fieldLabelsavisos["Spanish"]["fecha_publicacion"] = "Fecha de Difusión";
	$fieldToolTipsavisos["Spanish"]["fecha_publicacion"] = "";
	$placeHoldersavisos["Spanish"]["fecha_publicacion"] = "";
	if (count($fieldToolTipsavisos["Spanish"]))
		$tdataavisos[".isUseToolTips"] = true;
}


	$tdataavisos[".NCSearch"] = true;



$tdataavisos[".shortTableName"] = "avisos";
$tdataavisos[".nSecOptions"] = 0;

$tdataavisos[".mainTableOwnerID"] = "";
$tdataavisos[".entityType"] = 0;

$tdataavisos[".strOriginalTableName"] = "avisos";

	



$tdataavisos[".showAddInPopup"] = false;

$tdataavisos[".showEditInPopup"] = false;

$tdataavisos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataavisos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataavisos[".listAjax"] = false;
//	temporary
$tdataavisos[".listAjax"] = false;

	$tdataavisos[".audit"] = false;

	$tdataavisos[".locking"] = false;


$pages = $tdataavisos[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataavisos[".edit"] = true;
	$tdataavisos[".afterEditAction"] = 1;
	$tdataavisos[".closePopupAfterEdit"] = 1;
	$tdataavisos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataavisos[".add"] = true;
$tdataavisos[".afterAddAction"] = 1;
$tdataavisos[".closePopupAfterAdd"] = 1;
$tdataavisos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataavisos[".list"] = true;
}



$tdataavisos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataavisos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataavisos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataavisos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataavisos[".printFriendly"] = true;
}



$tdataavisos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataavisos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataavisos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataavisos[".isUseAjaxSuggest"] = true;

$tdataavisos[".rowHighlite"] = true;



																																																						
$tdataavisos[".flexibleSearch"] = true;


$tdataavisos[".ajaxCodeSnippetAdded"] = false;

$tdataavisos[".buttonsAdded"] = false;

$tdataavisos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataavisos[".isUseTimeForSearch"] = false;


$tdataavisos[".badgeColor"] = "E07878";


$tdataavisos[".allSearchFields"] = array();
$tdataavisos[".filterFields"] = array();
$tdataavisos[".requiredSearchFields"] = array();

$tdataavisos[".googleLikeFields"] = array();
$tdataavisos[".googleLikeFields"][] = "id";
$tdataavisos[".googleLikeFields"][] = "curso_id";
$tdataavisos[".googleLikeFields"][] = "titulo";
$tdataavisos[".googleLikeFields"][] = "descripcion";
$tdataavisos[".googleLikeFields"][] = "fecha_publicacion";



$tdataavisos[".tableType"] = "list";

$tdataavisos[".printerPageOrientation"] = 0;
$tdataavisos[".nPrinterPageScale"] = 100;

$tdataavisos[".nPrinterSplitRecords"] = 40;

$tdataavisos[".nPrinterPDFSplitRecords"] = 40;


$tdataavisos[".geocodingEnabled"] = false;










$tdataavisos[".pageSize"] = 20;

$tdataavisos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataavisos[".strOrderBy"] = $tstrOrderBy;

$tdataavisos[".orderindexes"] = array();

$tdataavisos[".sqlHead"] = "SELECT id,  	curso_id,  	titulo,  	descripcion,  	fecha_publicacion";
$tdataavisos[".sqlFrom"] = "FROM avisos";
$tdataavisos[".sqlWhereExpr"] = "";
$tdataavisos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataavisos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataavisos[".arrGroupsPerPage"] = $arrGPP;

$tdataavisos[".highlightSearchResults"] = true;

$tableKeysavisos = array();
$tableKeysavisos[] = "id";
$tdataavisos[".Keys"] = $tableKeysavisos;


$tdataavisos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "avisos";
	$fdata["Label"] = GetFieldLabel("avisos","id");
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


	$tdataavisos["id"] = $fdata;
		$tdataavisos[".searchableFields"][] = "id";
//	curso_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "curso_id";
	$fdata["GoodName"] = "curso_id";
	$fdata["ownerTable"] = "avisos";
	$fdata["Label"] = GetFieldLabel("avisos","curso_id");
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
	$edata["DisplayField"] = "CONCAT((SELECT m.nombre FROM materias m WHERE m.id = cursos.materia_id), ' | Docente: ', (SELECT u.nombre FROM profesores pr INNER JOIN usuarios u ON u.id = pr.usuario_id WHERE pr.id = cursos.profesor_id), ' (', (SELECT p.nombre FROM periodos p WHERE p.id = cursos.periodo_id), ')')";

	

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


	$tdataavisos["curso_id"] = $fdata;
		$tdataavisos[".searchableFields"][] = "curso_id";
//	titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "titulo";
	$fdata["GoodName"] = "titulo";
	$fdata["ownerTable"] = "avisos";
	$fdata["Label"] = GetFieldLabel("avisos","titulo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "titulo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo";

	
	
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


	$tdataavisos["titulo"] = $fdata;
		$tdataavisos[".searchableFields"][] = "titulo";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "avisos";
	$fdata["Label"] = GetFieldLabel("avisos","descripcion");
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


	$tdataavisos["descripcion"] = $fdata;
		$tdataavisos[".searchableFields"][] = "descripcion";
//	fecha_publicacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_publicacion";
	$fdata["GoodName"] = "fecha_publicacion";
	$fdata["ownerTable"] = "avisos";
	$fdata["Label"] = GetFieldLabel("avisos","fecha_publicacion");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_publicacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_publicacion";

	
	
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


	$tdataavisos["fecha_publicacion"] = $fdata;
		$tdataavisos[".searchableFields"][] = "fecha_publicacion";


$tables_data["avisos"]=&$tdataavisos;
$field_labels["avisos"] = &$fieldLabelsavisos;
$fieldToolTips["avisos"] = &$fieldToolTipsavisos;
$placeHolders["avisos"] = &$placeHoldersavisos;
$page_titles["avisos"] = &$pageTitlesavisos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["avisos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["avisos"] = array();



	
				$strOriginalDetailsTable="cursos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cursos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cursos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["avisos"][0] = $masterParams;
				$masterTablesData["avisos"][0]["masterKeys"] = array();
	$masterTablesData["avisos"][0]["masterKeys"][]="id";
				$masterTablesData["avisos"][0]["detailKeys"] = array();
	$masterTablesData["avisos"][0]["detailKeys"][]="curso_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_avisos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	curso_id,  	titulo,  	descripcion,  	fecha_publicacion";
$proto0["m_strFrom"] = "FROM avisos";
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
	"m_strTable" => "avisos",
	"m_srcTableName" => "avisos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "avisos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "curso_id",
	"m_strTable" => "avisos",
	"m_srcTableName" => "avisos"
));

$proto8["m_sql"] = "curso_id";
$proto8["m_srcTableName"] = "avisos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo",
	"m_strTable" => "avisos",
	"m_srcTableName" => "avisos"
));

$proto10["m_sql"] = "titulo";
$proto10["m_srcTableName"] = "avisos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "avisos",
	"m_srcTableName" => "avisos"
));

$proto12["m_sql"] = "descripcion";
$proto12["m_srcTableName"] = "avisos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_publicacion",
	"m_strTable" => "avisos",
	"m_srcTableName" => "avisos"
));

$proto14["m_sql"] = "fecha_publicacion";
$proto14["m_srcTableName"] = "avisos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "avisos";
$proto17["m_srcTableName"] = "avisos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "curso_id";
$proto17["m_columns"][] = "titulo";
$proto17["m_columns"][] = "descripcion";
$proto17["m_columns"][] = "fecha_publicacion";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "avisos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "avisos";
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
$proto0["m_srcTableName"]="avisos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_avisos = createSqlQuery_avisos();


	
		;

					

$tdataavisos[".sqlquery"] = $queryData_avisos;

include_once(getabspath("include/avisos_events.php"));
$tableEvents["avisos"] = new eventclass_avisos;
$tdataavisos[".hasEvents"] = true;

?>