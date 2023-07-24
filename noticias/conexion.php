<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="u826094500_amdeco_web";

    $con=mysqli_connect($servername, $username ,$password, $database);
    
    if(!$con){
        die("imposible conectarse: ".mysqli_error($conn));
    }
    if (mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$GLOBALS['con'] = $con;
?>