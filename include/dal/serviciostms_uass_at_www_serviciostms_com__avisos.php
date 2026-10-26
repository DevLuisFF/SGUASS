<?php
$dalTableavisos = array();
$dalTableavisos["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableavisos["curso_id"] = array("type"=>3,"varname"=>"curso_id", "name" => "curso_id");
$dalTableavisos["titulo"] = array("type"=>200,"varname"=>"titulo", "name" => "titulo");
$dalTableavisos["descripcion"] = array("type"=>201,"varname"=>"descripcion", "name" => "descripcion");
$dalTableavisos["fecha_publicacion"] = array("type"=>135,"varname"=>"fecha_publicacion", "name" => "fecha_publicacion");
	$dalTableavisos["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__avisos"] = &$dalTableavisos;
?>