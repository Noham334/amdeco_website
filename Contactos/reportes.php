<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contactos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="\amdeco_website\enlacesacercade\login\frontend\images\deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="css1/bootstrap.min.css">
  <link rel="stylesheet" href="css1/reportes.css">
  <script src="lib/jquery.js"></script>
  <script src="lib/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">


</head>

<body>
  <ol class="breadcrumb">

    <li><a href="/amdeco_website/enlacesacercade/login/principal.php">Inicio</a></li>
    <li><a href="/amdeco_website/enlacesacercade/admin/bannerlist.php">Alcaldes</a> </li>
    <li><a href="/amdeco_website/eventos/index2.php">Eventos</a> </li>
    <li class="active">Contactos</li>
    <li><a href="/amdeco_website/noticias/admin/bannerlist.php">Noticias</a> </li>
    <li><a href="/amdeco_website/publicaciones/phpLibros/phplibros.php">Publicaciones</a> </li>
    <li><a href="/amdeco_website/registros_personal/personal.list.php">Registro Personal</a> </li>
    <li><a href="/amdeco_website/enlacesacercade/login/cerrar.php">Cerrar Sesion</a></li>
  </ol>

  <div class="container">
    <div class="row">
      
    </div>
    <center>
      <h3>CONTACTOS GENERALES</h3>
    </center>
    <a class="btn btn-primary" href="../enlacesacercade/login/principal.php" role="button">Regresar</a>

    <?php
    include "conexion.php";
    //$conn = mysqli_connect($servername, $username, $password, $dbname);
    conectarbd();
    $consulta = "select nombre, telefono,correo,asunto from contactos";
    $resultado = mysqli_query($conn, $consulta);

    ?>
    <br>
    <br>
    <table class="table table-hover table-striped ">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Asunto</th>
        <th scope="col">Eliminar</th>

      </tr>
      <?php



      while ($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['telefono']; ?></td>
          <td><?php echo $fila['correo']; ?></td>
          <td><?php echo $fila['asunto']; ?></td>
          <td><a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a></td>
        </tr>

      <?php
      }
      ?>
    </table>

  </div>

</body>

</html>