<?php
$dalTableconceptos_pago = array();
$dalTableconceptos_pago["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableconceptos_pago["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTableconceptos_pago["descripcion"] = array("type"=>201,"varname"=>"descripcion", "name" => "descripcion");
$dalTableconceptos_pago["monto"] = array("type"=>3,"varname"=>"monto", "name" => "monto");
	$dalTableconceptos_pago["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__conceptos_pago"] = &$dalTableconceptos_pago;
?>