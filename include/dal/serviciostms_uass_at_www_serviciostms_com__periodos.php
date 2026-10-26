<?php
$dalTableperiodos = array();
$dalTableperiodos["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableperiodos["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTableperiodos["fecha_inicio"] = array("type"=>7,"varname"=>"fecha_inicio", "name" => "fecha_inicio");
$dalTableperiodos["fecha_fin"] = array("type"=>7,"varname"=>"fecha_fin", "name" => "fecha_fin");
$dalTableperiodos["activo"] = array("type"=>129,"varname"=>"activo", "name" => "activo");
	$dalTableperiodos["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__periodos"] = &$dalTableperiodos;
?>