<?php
    
    try{
         $conexion = new PDO('mysql:host=127.0.0.1:3307;dbname=u826094500_amdeco_web', 'root', '');

    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>