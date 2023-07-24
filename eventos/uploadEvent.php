<?php

include "db.php";
include "class.upload.php";

/// mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//$fecha2=date("Y-m-d",strtotime($fecha_inicio));
$fecha1=$_POST["fecha"];
$fechDb=date("Y-m-d",strtotime($fecha1));
  $handle = new Upload($_FILES["image"]);
  if ($handle->uploaded) {
    $handle->Process("uploads/");
    if ($handle->processed) {
    	// usamos la funcion insert_img de la libreria db.php
    	insert_img($_POST["titulo"],$_POST["descripcion"],$_POST["lugar"],"uploads/",$handle->file_dst_name,$fechDb);
    } else {
      echo 'Error: ' . $handle->error;
    }
  } else {
    echo 'Error: ' . $handle->error;
  }
  unset($handle);
  //header("Location: ../index-6noticias.php");

?>
<script type="text/javascript">
    alert("Evento Agregado Correctamente");
    location.href="http://localhost/Web_Amdeco1.1/enlacesacercade/login/";
</script>