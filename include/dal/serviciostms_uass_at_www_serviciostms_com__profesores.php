<?php
$dalTableprofesores = array();
$dalTableprofesores["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableprofesores["usuario_id"] = array("type"=>3,"varname"=>"usuario_id", "name" => "usuario_id");
$dalTableprofesores["especialidad"] = array("type"=>200,"varname"=>"especialidad", "name" => "especialidad");
$dalTableprofesores["fecha_ingreso"] = array("type"=>7,"varname"=>"fecha_ingreso", "name" => "fecha_ingreso");
	$dalTableprofesores["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__profesores"] = &$dalTableprofesores;
?>