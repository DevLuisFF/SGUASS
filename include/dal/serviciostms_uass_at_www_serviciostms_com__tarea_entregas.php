<?php
$dalTabletarea_entregas = array();
$dalTabletarea_entregas["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTabletarea_entregas["tarea_id"] = array("type"=>3,"varname"=>"tarea_id", "name" => "tarea_id");
$dalTabletarea_entregas["estudiante_id"] = array("type"=>3,"varname"=>"estudiante_id", "name" => "estudiante_id");
$dalTabletarea_entregas["archivo"] = array("type"=>200,"varname"=>"archivo", "name" => "archivo");
$dalTabletarea_entregas["comentario"] = array("type"=>201,"varname"=>"comentario", "name" => "comentario");
$dalTabletarea_entregas["fecha_entrega"] = array("type"=>135,"varname"=>"fecha_entrega", "name" => "fecha_entrega");
$dalTabletarea_entregas["calificacion"] = array("type"=>14,"varname"=>"calificacion", "name" => "calificacion");
	$dalTabletarea_entregas["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__tarea_entregas"] = &$dalTabletarea_entregas;
?>