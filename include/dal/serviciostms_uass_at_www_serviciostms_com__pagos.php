<?php
$dalTablepagos = array();
$dalTablepagos["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablepagos["estudiante_id"] = array("type"=>3,"varname"=>"estudiante_id", "name" => "estudiante_id");
$dalTablepagos["matricula_semestre_id"] = array("type"=>3,"varname"=>"matricula_semestre_id", "name" => "matricula_semestre_id");
$dalTablepagos["periodo_id"] = array("type"=>3,"varname"=>"periodo_id", "name" => "periodo_id");
$dalTablepagos["concepto_id"] = array("type"=>3,"varname"=>"concepto_id", "name" => "concepto_id");
$dalTablepagos["nro_cuota"] = array("type"=>200,"varname"=>"nro_cuota", "name" => "nro_cuota");
$dalTablepagos["monto"] = array("type"=>3,"varname"=>"monto", "name" => "monto");
$dalTablepagos["descuento"] = array("type"=>3,"varname"=>"descuento", "name" => "descuento");
$dalTablepagos["multa_mora"] = array("type"=>3,"varname"=>"multa_mora", "name" => "multa_mora");
$dalTablepagos["fecha_vencimiento"] = array("type"=>7,"varname"=>"fecha_vencimiento", "name" => "fecha_vencimiento");
$dalTablepagos["fecha_pago"] = array("type"=>135,"varname"=>"fecha_pago", "name" => "fecha_pago");
$dalTablepagos["metodo_pago"] = array("type"=>129,"varname"=>"metodo_pago", "name" => "metodo_pago");
$dalTablepagos["nro_comprobante"] = array("type"=>200,"varname"=>"nro_comprobante", "name" => "nro_comprobante");
$dalTablepagos["estado"] = array("type"=>129,"varname"=>"estado", "name" => "estado");
	$dalTablepagos["id"]["key"]=true;

$dal_info["serviciostms_uass_at_www_serviciostms_com__pagos"] = &$dalTablepagos;
?>