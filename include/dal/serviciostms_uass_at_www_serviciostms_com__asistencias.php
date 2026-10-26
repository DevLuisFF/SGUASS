<?php
$dalTableasistencias = array();
$dalTableasistencias["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableasistencias["inscripcion_id"] = array("type"=>3,"varname"=>"inscripcion_id", "name" => "inscripcion_id");
$dalTableasistencias["fecha"] = array("type"=>7,"varname"=>"fecha", "name" => "fecha");
$dalTableasistencias["estado"] = array("type"=>129,"varname"=>"estado", "name" => "estado");
$dalTableasistencias["observacion"] = array("type"=>201,"varname"=>"observacion", "name" => "observacion");
	$dalTableasistencias["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__asistencias"] = &$dalTableasistencias;
?>