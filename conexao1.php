<?php
$server ="DSK-PCSSD0001\SLQSERVIDOR";
$conectioninfo = array("Database"=>"ATIVIDADE_FINAL","UID"=>"Luciano","PWD"=>"1604");
$resultado = sqlsrv_connect($server,$conectioninfo);
if($resultado){

}
else{
	echo("não conectado");
	die(print_r(sqlsrv_errors(),true));
}
?>