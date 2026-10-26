<?php
$dalTablematerias = array();
$dalTablematerias["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablematerias["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTablematerias["descripcion"] = array("type"=>201,"varname"=>"descripcion", "name" => "descripcion");
	$dalTablematerias["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__materias"] = &$dalTablematerias;
?>