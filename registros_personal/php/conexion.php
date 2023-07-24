<!-- ?php
$DB_HOST="localhost";
$DB_NAME= "u826094500_amdeco_web";
$DB_USER= "";
$DB_PASS= "";

	# conectare la base de datos
    $conn=mysqli_connect($DB_HOST, $DB_NAME ,$DB_USER, $DB_PASS);
    if(!$conn){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

?> -->
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="u826094500_amdeco_web";
    $conn=mysqli_connect($servername, $username ,$password, $database);
    if(!$conn){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$GLOBALS['conn'] = $conn;
?>