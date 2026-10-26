<?php
$dalTablecursos = array();
$dalTablecursos["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecursos["carrera_id"] = array("type"=>3,"varname"=>"carrera_id", "name" => "carrera_id");
$dalTablecursos["semestre"] = array("type"=>3,"varname"=>"semestre", "name" => "semestre");
$dalTablecursos["materia_id"] = array("type"=>3,"varname"=>"materia_id", "name" => "materia_id");
$dalTablecursos["profesor_id"] = array("type"=>3,"varname"=>"profesor_id", "name" => "profesor_id");
$dalTablecursos["periodo_id"] = array("type"=>3,"varname"=>"periodo_id", "name" => "periodo_id");
$dalTablecursos["cupo"] = array("type"=>3,"varname"=>"cupo", "name" => "cupo");
$dalTablecursos["aula"] = array("type"=>200,"varname"=>"aula", "name" => "aula");
$dalTablecursos["horario"] = array("type"=>200,"varname"=>"horario", "name" => "horario");
$dalTablecursos["estado"] = array("type"=>129,"varname"=>"estado", "name" => "estado");
	$dalTablecursos["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__cursos"] = &$dalTablecursos;
?>