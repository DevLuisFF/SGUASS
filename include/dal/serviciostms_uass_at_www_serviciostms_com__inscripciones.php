<?php
$dalTableinscripciones = array();
$dalTableinscripciones["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableinscripciones["matricula_semestre_id"] = array("type"=>3,"varname"=>"matricula_semestre_id", "name" => "matricula_semestre_id");
$dalTableinscripciones["estudiante_id"] = array("type"=>3,"varname"=>"estudiante_id", "name" => "estudiante_id");
$dalTableinscripciones["curso_id"] = array("type"=>3,"varname"=>"curso_id", "name" => "curso_id");
$dalTableinscripciones["fecha_inscripcion"] = array("type"=>135,"varname"=>"fecha_inscripcion", "name" => "fecha_inscripcion");
	$dalTableinscripciones["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__inscripciones"] = &$dalTableinscripciones;
?>