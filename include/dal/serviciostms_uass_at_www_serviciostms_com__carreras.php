<?php
$dalTablecarreras = array();
$dalTablecarreras["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecarreras["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTablecarreras["descripcion"] = array("type"=>201,"varname"=>"descripcion", "name" => "descripcion");
$dalTablecarreras["costo_matricula"] = array("type"=>3,"varname"=>"costo_matricula", "name" => "costo_matricula");
$dalTablecarreras["costo_semestre"] = array("type"=>3,"varname"=>"costo_semestre", "name" => "costo_semestre");
$dalTablecarreras["cantidad_cuotas"] = array("type"=>3,"varname"=>"cantidad_cuotas", "name" => "cantidad_cuotas");
$dalTablecarreras["costo_derecho_examen"] = array("type"=>3,"varname"=>"costo_derecho_examen", "name" => "costo_derecho_examen");
$dalTablecarreras["estado"] = array("type"=>129,"varname"=>"estado", "name" => "estado");
	$dalTablecarreras["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__carreras"] = &$dalTablecarreras;
?>