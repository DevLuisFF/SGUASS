<?php
$dalTableestudiantes = array();
$dalTableestudiantes["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableestudiantes["usuario_id"] = array("type"=>3,"varname"=>"usuario_id", "name" => "usuario_id");
$dalTableestudiantes["matricula"] = array("type"=>200,"varname"=>"matricula", "name" => "matricula");
$dalTableestudiantes["carrera_id"] = array("type"=>3,"varname"=>"carrera_id", "name" => "carrera_id");
$dalTableestudiantes["fecha_ingreso"] = array("type"=>7,"varname"=>"fecha_ingreso", "name" => "fecha_ingreso");
$dalTableestudiantes["numero_cedula"] = array("type"=>200,"varname"=>"numero_cedula", "name" => "numero_cedula");
	$dalTableestudiantes["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__estudiantes"] = &$dalTableestudiantes;
?>