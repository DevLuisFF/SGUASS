<?php
$dalTablematriculas_semestre = array();
$dalTablematriculas_semestre["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablematriculas_semestre["estudiante_id"] = array("type"=>3,"varname"=>"estudiante_id", "name" => "estudiante_id");
$dalTablematriculas_semestre["carrera_id"] = array("type"=>3,"varname"=>"carrera_id", "name" => "carrera_id");
$dalTablematriculas_semestre["periodo_id"] = array("type"=>3,"varname"=>"periodo_id", "name" => "periodo_id");
$dalTablematriculas_semestre["semestre"] = array("type"=>3,"varname"=>"semestre", "name" => "semestre");
$dalTablematriculas_semestre["fecha_matricula"] = array("type"=>135,"varname"=>"fecha_matricula", "name" => "fecha_matricula");
$dalTablematriculas_semestre["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado");
$dalTablematriculas_semestre["observaciones"] = array("type"=>201,"varname"=>"observaciones", "name" => "observaciones");
	$dalTablematriculas_semestre["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__matriculas_semestre"] = &$dalTablematriculas_semestre;
?>