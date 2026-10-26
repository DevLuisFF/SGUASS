<?php
$dalTablenotas = array();
$dalTablenotas["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablenotas["inscripcion_id"] = array("type"=>3,"varname"=>"inscripcion_id", "name" => "inscripcion_id");
$dalTablenotas["tipo_evaluacion"] = array("type"=>200,"varname"=>"tipo_evaluacion", "name" => "tipo_evaluacion");
$dalTablenotas["nota"] = array("type"=>3,"varname"=>"nota", "name" => "nota");
$dalTablenotas["descripcion"] = array("type"=>201,"varname"=>"descripcion", "name" => "descripcion");
$dalTablenotas["fecha_registro"] = array("type"=>135,"varname"=>"fecha_registro", "name" => "fecha_registro");
$dalTablenotas["Puntos_Trabajo_Practico"] = array("type"=>3,"varname"=>"Puntos_Trabajo_Practico", "name" => "Puntos_Trabajo_Practico");
$dalTablenotas["Puntos_Primer_Parcial"] = array("type"=>3,"varname"=>"Puntos_Primer_Parcial", "name" => "Puntos_Primer_Parcial");
$dalTablenotas["Puntos_Segundo_Parcial"] = array("type"=>3,"varname"=>"Puntos_Segundo_Parcial", "name" => "Puntos_Segundo_Parcial");
$dalTablenotas["Puntos_Examen_Final"] = array("type"=>3,"varname"=>"Puntos_Examen_Final", "name" => "Puntos_Examen_Final");
$dalTablenotas["Puntos_Examen_Extra_Ord"] = array("type"=>3,"varname"=>"Puntos_Examen_Extra_Ord", "name" => "Puntos_Examen_Extra_Ord");
$dalTablenotas["Puntos_Examen_Extra_Extra_Ord"] = array("type"=>3,"varname"=>"Puntos_Examen_Extra_Extra_Ord", "name" => "Puntos_Examen_Extra_Extra_Ord");
$dalTablenotas["Puntos_Asistencia"] = array("type"=>3,"varname"=>"Puntos_Asistencia", "name" => "Puntos_Asistencia");
	$dalTablenotas["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__notas"] = &$dalTablenotas;
?>