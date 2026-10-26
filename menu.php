<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if(!isLogged())
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu_bootstrap1", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "flatly";
		$layout->customCssPageName = "_menu";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"hdr" );
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";


$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"login" );
$layout->containers["login"] = array();
$layout->container_properties["login"] = array(  );
$layout->containers["login"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["login"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["login"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->containers["center"] = array();
$layout->container_properties["center"] = array(  );
$layout->containers["center"][] = array("name"=>"welcome",
	"block"=>"", "substyle"=>1  );

$layout->skins["center"] = "";

$layout->blocks["top"][] = "center";
$page_layouts["menu"] = $layout;




require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/asistencias_events.php"));
$tableEvents["asistencias"] = new eventclass_asistencias;
include_once(getabspath("include/avisos_events.php"));
$tableEvents["avisos"] = new eventclass_avisos;
include_once(getabspath("include/carrera_materia_events.php"));
$tableEvents["carrera_materia"] = new eventclass_carrera_materia;
include_once(getabspath("include/carreras_events.php"));
$tableEvents["carreras"] = new eventclass_carreras;
include_once(getabspath("include/conceptos_pago_events.php"));
$tableEvents["conceptos_pago"] = new eventclass_conceptos_pago;
include_once(getabspath("include/cursos_events.php"));
$tableEvents["cursos"] = new eventclass_cursos;
include_once(getabspath("include/estudiantes_events.php"));
$tableEvents["estudiantes"] = new eventclass_estudiantes;
include_once(getabspath("include/inscripciones_events.php"));
$tableEvents["inscripciones"] = new eventclass_inscripciones;
include_once(getabspath("include/notas_events.php"));
$tableEvents["notas"] = new eventclass_notas;
include_once(getabspath("include/materias_events.php"));
$tableEvents["materias"] = new eventclass_materias;
include_once(getabspath("include/pagos_events.php"));
$tableEvents["pagos"] = new eventclass_pagos;
include_once(getabspath("include/periodos_events.php"));
$tableEvents["periodos"] = new eventclass_periodos;
include_once(getabspath("include/profesores_events.php"));
$tableEvents["profesores"] = new eventclass_profesores;
include_once(getabspath("include/tarea_entregas_events.php"));
$tableEvents["tarea_entregas"] = new eventclass_tarea_entregas;
include_once(getabspath("include/tareas_events.php"));
$tableEvents["tareas"] = new eventclass_tareas;
include_once(getabspath("include/usuarios_events.php"));
$tableEvents["usuarios"] = new eventclass_usuarios;
include_once(getabspath("include/matriculas_semestre_events.php"));
$tableEvents["matriculas_semestre"] = new eventclass_matriculas_semestre;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>