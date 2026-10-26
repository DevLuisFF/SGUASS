<?php
$dalTableusuarios = array();
$dalTableusuarios["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableusuarios["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTableusuarios["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableusuarios["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableusuarios["activo"] = array("type"=>129,"varname"=>"activo", "name" => "activo");
$dalTableusuarios["creado_en"] = array("type"=>135,"varname"=>"creado_en", "name" => "creado_en");
	$dalTableusuarios["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__usuarios"] = &$dalTableusuarios;
?>