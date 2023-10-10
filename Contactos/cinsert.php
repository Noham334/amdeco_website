<?php


include "conexion.php";
//$conn = mysqli_connect($servername, $username, $password, $dbname);

conectarbd();

$nombre = $_GET['name'];
$telefono = $_GET['phone'];
$email = $_GET['email'];
$asunto = $_GET['message'];


$sql2 = "INSERT INTO contactos (id, nombre, telefono, correo, asunto) VALUES (NULL, '$nombre', '$telefono', '$email', '$asunto')";
//consulta($sql);
$consulta2 = mysqli_query($conn, $sql2);
echo "se inserto correctamente";
header("location:../contactos.php");

//validacion

mysqli_close($conn);
