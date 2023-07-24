<?php
$fecha_inicio=$_POST["fecha"];
    $fecha1= date("m-d-Y", strtotime("$fecha_inicio"));
	echo $fecha1."<br>";
	$fecha2=date("Y-m-d",strtotime($fecha_inicio));
	echo $fecha2;
?>