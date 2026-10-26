<?php
$dalTabletareas = array();
$dalTabletareas["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTabletareas["curso_id"] = array("type"=>3,"varname"=>"curso_id", "name" => "curso_id");
$dalTabletareas["titulo"] = array("type"=>200,"varname"=>"titulo", "name" => "titulo");
$dalTabletareas["descripcion"] = array("type"=>201,"varname"=>"descripcion", "name" => "descripcion");
$dalTabletareas["link"] = array("type"=>200,"varname"=>"link", "name" => "link");
$dalTabletareas["fecha_entrega"] = array("type"=>135,"varname"=>"fecha_entrega", "name" => "fecha_entrega");
	$dalTabletareas["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__tareas"] = &$dalTabletareas;
?>