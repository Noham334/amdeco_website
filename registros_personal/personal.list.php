<?php
/*Verificar si la sesion fue iniciada */
//include ("../enlacesacercade/login/verify_session.php");
/* Llamar la Cadena de Conexion*/ 
include ("php/conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Personal</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body>
  <br>
  <!--Menu-->
     <?php include 'include/nav.php';?>
     <!--Boton para agregar-->
     <div class="container">
      <div class="row">
            <div class="col-xs-12 text-right">
              <p class="text-left"><strong>Registrar</strong></p>
              <hr>
              <a href='personal.add.php' class="btn btn-success" style="width: 100%;">Agregar nuevo registro <span class="glyphicon glyphicon-plus"></span> </a>
            </div>
        </div>
     </div>
     <br>
     <div class="container text-right">
      <p class="text-left"><strong>Lista de las personas registradas</strong></p>
      <hr>
     </div>
     <div class="container " style="overflow:scroll;width:85%;height:500px;">
      <table class="table caption-top">
        <caption class="bg-primary" style="padding: 0.5% 0.5% 0.5% 1%;">Datos registrados</caption>
        <thead>
          <tr>
            <th scope="col">Creación</th>
            <th scope="col">Codigo</th>
            <th scope="col">CI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Genero</th>
            <th scope="col">Cargo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha de inicio</th>
            <th scope="col">Fecha de finalización</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
               <?php
                $sql = "SELECT CONCAT(nombre, ' ', apellido_p, ' ', apellido_m)nombre, CONCAT(ci, ' ', terminacion_ci)ci, id_personal, genero, cargo, descripcion_trabajo, fecha_ini, fecha_fin, fecha_create FROM personal ORDER BY id_personal DESC";
                $resultado = mysqli_query($conn,$sql);
                while ($datos = mysqli_fetch_assoc($resultado)):
              ?>
                <tr>
                    <td style="background-color:#eeeee4;"><?=$datos['fecha_create'] ?></td>
                    <th><?=$datos['id_personal'] ?></th>
                    <td><?=$datos['ci'] ?></td>
                    <td><?=$datos['nombre'] ?></td>
                    <td><?=$datos['genero'] ?></td>
                    <td><?=$datos['cargo'] ?></td>
                    <td><?=$datos['descripcion_trabajo'] ?></td>
                    <td><?=$datos['fecha_ini'] ?></td>
                    <td><?=$datos['fecha_fin'] ?></td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Configuraciones <i class="bi bi-caret-down-fill"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><?php echo "<a href='personal.add.php?idpersonal_edit=".$datos['id_personal']."'><i class='bi bi-pencil-fill'></i> Editar</a>"; ?></li>
                          <li><?php echo "<a href='personal.add.php?idpersonal_delete=".$datos['id_personal']."'><i class='bi bi-trash-fill'></i> Borrar</a>"; ?></li>
                          <li><?php echo "<a href='generate.pdf.php?idpersonal=".$datos['id_personal']."' target='_BLANK'><i class='bi bi-file-pdf-fill'></i> Generar PDF</a>"; ?></li>
                        </ul>
                      </div>
                    </td>
                </tr>
                <?php
                endwhile;
                ?>
        </tbody>
      </table>
     </div>
  </body>
</html>