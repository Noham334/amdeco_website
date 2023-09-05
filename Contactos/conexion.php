<?php

/****enlazando al servidor MySql*********/

/****Variables de conexion */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u826094500_amdeco_web";
//$conn = mysqli_connect($servername, $username, $password, $dbname);
/****conexion o enlace */
$conn = mysqli_connect($servername, $username, $password, $dbname);
function conectarbd()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "u826094500_amdeco_web";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    //echo "Conexion exitosa";
}
/***para consultar la base de datos  */
function consulta($sql, $conn)
{

    //$conn = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_query($conn, $sql)) {
        echo "Consulta ejecutada, fila insertada";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

/**cerrar flujo de bd */
function cerrarbd($conn)
{

    mysqli_close($conn); //cerrar la conexion BD
}
