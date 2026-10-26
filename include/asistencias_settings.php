<?php




$tdataasistencias = array();
$tdataasistencias[".searchableFields"] = array();
	$tdataasistencias[".truncateText"] = true;
	$tdataasistencias[".NumberOfChars"] = 80;
	$tdataasistencias[".ShortName"] = "asistencias";
	$tdataasistencias[".OwnerID"] = "";
	$tdataasistencias[".OriginalTable"] = "asistencias";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataasistencias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataasistencias[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsasistencias = array();
$fieldToolTipsasistencias = array();
$pageTitlesasistencias = array();
$placeHoldersasistencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsasistencias["Spanish"] = array();
	$fieldToolTipsasistencias["Spanish"] = array();
	$placeHoldersasistencias["Spanish"] = array();
	$pageTitlesasistencias["Spanish"] = array();
	$fieldLabelsasistencias["Spanish"]["id"] = "Id";
	$fieldToolTipsasistencias["Spanish"]["id"] = "";
	$placeHoldersasistencias["Spanish"]["id"] = "";
	$fieldLabelsasistencias["Spanish"]["inscripcion_id"] = "Estudiante / Asignatura";
	$fieldToolTipsasistencias["Spanish"]["inscripcion_id"] = "";
	$placeHoldersasistencias["Spanish"]["inscripcion_id"] = "";
	$fieldLabelsasistencias["Spanish"]["fecha"] = "Fecha de Clase";
	$fieldToolTipsasistencias["Spanish"]["fecha"] = "";
	$placeHoldersasistencias["Spanish"]["fecha"] = "";
	$fieldLabelsasistencias["Spanish"]["estado"] = "Condición (Presente/Ausente)";
	$fieldToolTipsasistencias["Spanish"]["estado"] = "";
	$placeHoldersasistencias["Spanish"]["estado"] = "";
	$fieldLabelsasistencias["Spanish"]["observacion"] = "Justificativo / Observación";
	$fieldToolTipsasistencias["Spanish"]["observacion"] = "";
	$placeHoldersasistencias["Spanish"]["observacion"] = "";
	if (count($fieldToolTipsasistencias["Spanish"]))
		$tdataasistencias[".isUseToolTips"] = true;
}


	$tdataasistencias[".NCSearch"] = true;



$tdataasistencias[".shortTableName"] = "asistencias";
$tdataasistencias[".nSecOptions"] = 0;

$tdataasistencias[".mainTableOwnerID"] = "";
$tdataasistencias[".entityType"] = 0;

$tdataasistencias[".strOriginalTableName"] = "asistencias";

	



$tdataasistencias[".showAddInPopup"] = false;

$tdataasistencias[".showEditInPopup"] = false;

$tdataasistencias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataasistencias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataasistencias[".listAjax"] = false;
//	temporary
$tdataasistencias[".listAjax"] = false;

	$tdataasistencias[".audit"] = false;

	$tdataasistencias[".locking"] = false;


$pages = $tdataasistencias[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataasistencias[".edit"] = true;
	$tdataasistencias[".afterEditAction"] = 1;
	$tdataasistencias[".closePopupAfterEdit"] = 1;
	$tdataasistencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataasistencias[".add"] = true;
$tdataasistencias[".afterAddAction"] = 1;
$tdataasistencias[".closePopupAfterAdd"] = 1;
$tdataasistencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataasistencias[".list"] = true;
}



$tdataasistencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataasistencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataasistencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataasistencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataasistencias[".printFriendly"] = true;
}



$tdataasistencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataasistencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataasistencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataasistencias[".isUseAjaxSuggest"] = true;

$tdataasistencias[".rowHighlite"] = true;



																																																						
$tdataasistencias[".flexibleSearch"] = true;


$tdataasistencias[".ajaxCodeSnippetAdded"] = false;

$tdataasistencias[".buttonsAdded"] = false;

$tdataasistencias[".addPageEvents"] = true;

// use timepicker for search panel
$tdataasistencias[".isUseTimeForSearch"] = false;


$tdataasistencias[".badgeColor"] = "00C2C5";


$tdataasistencias[".allSearchFields"] = array();
$tdataasistencias[".filterFields"] = array();
$tdataasistencias[".requiredSearchFields"] = array();

$tdataasistencias[".googleLikeFields"] = array();
$tdataasistencias[".googleLikeFields"][] = "id";
$tdataasistencias[".googleLikeFields"][] = "inscripcion_id";
$tdataasistencias[".googleLikeFields"][] = "fecha";
$tdataasistencias[".googleLikeFields"][] = "estado";
$tdataasistencias[".googleLikeFields"][] = "observacion";



$tdataasistencias[".tableType"] = "list";

$tdataasistencias[".printerPageOrientation"] = 0;
$tdataasistencias[".nPrinterPageScale"] = 100;

$tdataasistencias[".nPrinterSplitRecords"] = 40;

$tdataasistencias[".nPrinterPDFSplitRecords"] = 40;


$tdataasistencias[".geocodingEnabled"] = false;










$tdataasistencias[".pageSize"] = 20;

$tdataasistencias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataasistencias[".strOrderBy"] = $tstrOrderBy;

$tdataasistencias[".orderindexes"] = array();

$tdataasistencias[".sqlHead"] = "SELECT id,  	inscripcion_id,  	fecha,  	estado,  	observacion";
$tdataasistencias[".sqlFrom"] = "FROM asistencias";
$tdataasistencias[".sqlWhereExpr"] = "";
$tdataasistencias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataasistencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataasistencias[".arrGroupsPerPage"] = $arrGPP;

$tdataasistencias[".highlightSearchResults"] = true;

$tableKeysasistencias = array();
$tableKeysasistencias[] = "id";
$tdataasistencias[".Keys"] = $tableKeysasistencias;


$tdataasistencias[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "asistencias";
	$fdata["Label"] = GetFieldLabel("asistencias","id");
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


	$tdataasistencias["id"] = $fdata;
		$tdataasistencias[".searchableFields"][] = "id";
//	inscripcion_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "inscripcion_id";
	$fdata["GoodName"] = "inscripcion_id";
	$fdata["ownerTable"] = "asistencias";
	$fdata["Label"] = GetFieldLabel("asistencias","inscripcion_id");
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
	$edata["DisplayField"] = "CONCAT((SELECT u.nombre FROM estudiantes e INNER JOIN usuarios u ON u.id = e.usuario_id WHERE e.id = inscripciones.estudiante_id), ' en ', (SELECT m.nombre FROM cursos c INNER JOIN materias m ON m.id = c.materia_id WHERE c.id = inscripciones.curso_id))";

	

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


	$tdataasistencias["inscripcion_id"] = $fdata;
		$tdataasistencias[".searchableFields"][] = "inscripcion_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "asistencias";
	$fdata["Label"] = GetFieldLabel("asistencias","fecha");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
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


	$tdataasistencias["fecha"] = $fdata;
		$tdataasistencias[".searchableFields"][] = "fecha";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "asistencias";
	$fdata["Label"] = GetFieldLabel("asistencias","estado");
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Presente";
	$edata["LookupValues"][] = "Ausente";
	$edata["LookupValues"][] = "Tardanza";
	$edata["LookupValues"][] = "Justificado";

	
	
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


	$tdataasistencias["estado"] = $fdata;
		$tdataasistencias[".searchableFields"][] = "estado";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "asistencias";
	$fdata["Label"] = GetFieldLabel("asistencias","observacion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "observacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observacion";

	
	
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


	$tdataasistencias["observacion"] = $fdata;
		$tdataasistencias[".searchableFields"][] = "observacion";


$tables_data["asistencias"]=&$tdataasistencias;
$field_labels["asistencias"] = &$fieldLabelsasistencias;
$fieldToolTips["asistencias"] = &$fieldToolTipsasistencias;
$placeHolders["asistencias"] = &$placeHoldersasistencias;
$page_titles["asistencias"] = &$pageTitlesasistencias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["asistencias"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["asistencias"] = array();



	
				$strOriginalDetailsTable="inscripciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="inscripciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "inscripciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["asistencias"][0] = $masterParams;
				$masterTablesData["asistencias"][0]["masterKeys"] = array();
	$masterTablesData["asistencias"][0]["masterKeys"][]="id";
				$masterTablesData["asistencias"][0]["detailKeys"] = array();
	$masterTablesData["asistencias"][0]["detailKeys"][]="inscripcion_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_asistencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	inscripcion_id,  	fecha,  	estado,  	observacion";
$proto0["m_strFrom"] = "FROM asistencias";
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
	"m_strTable" => "asistencias",
	"m_srcTableName" => "asistencias"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "asistencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "inscripcion_id",
	"m_strTable" => "asistencias",
	"m_srcTableName" => "asistencias"
));

$proto8["m_sql"] = "inscripcion_id";
$proto8["m_srcTableName"] = "asistencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "asistencias",
	"m_srcTableName" => "asistencias"
));

$proto10["m_sql"] = "fecha";
$proto10["m_srcTableName"] = "asistencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "asistencias",
	"m_srcTableName" => "asistencias"
));

$proto12["m_sql"] = "estado";
$proto12["m_srcTableName"] = "asistencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "asistencias",
	"m_srcTableName" => "asistencias"
));

$proto14["m_sql"] = "observacion";
$proto14["m_srcTableName"] = "asistencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "asistencias";
$proto17["m_srcTableName"] = "asistencias";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "inscripcion_id";
$proto17["m_columns"][] = "fecha";
$proto17["m_columns"][] = "estado";
$proto17["m_columns"][] = "observacion";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "asistencias";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "asistencias";
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
$proto0["m_srcTableName"]="asistencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_asistencias = createSqlQuery_asistencias();


	
		;

					

$tdataasistencias[".sqlquery"] = $queryData_asistencias;

include_once(getabspath("include/asistencias_events.php"));
$tableEvents["asistencias"] = new eventclass_asistencias;
$tdataasistencias[".hasEvents"] = true;

?>