<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <title>Amdeco</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.js"></script>
  <!-- CSS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="phpAmdeco/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="phpAmdeco/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="phpAmdeco/css/form-elements.css">
  <link rel="stylesheet" href="phpAmdeco/css/style.css">
  <link rel="stylesheet" type="text/css" href="phpAmdeco/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="phpAmdeco/css/component.css" />
  <script>
    (function(e, t, n) {
      var r = e.querySelectorAll("html")[0];
      r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
    })(document, window, 0);
  </script>

  <script src="js/jquery-migrate-1.2.1.js"></script>
  <script src="js/device.min.js"></script>
</head>

<div class="page">
  <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
      <header>
        <?php include './include/header.php';?>
      </header>
  <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->



  <!-- capturar datos de registro-->
  <?php
  include_once 'phpAmdeco/config.inc.php';
  if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "phpAmdeco/archivos/" . $nombre;
    if ($nombre != "") {
      if (copy($ruta, $destino)) {
        $titulo = $_POST['titulo'];
        $descri = $_POST['descripcion'];
        $fecha = $_POST['fecha'];

        $db = new Conect_MySql();
        $sql = "INSERT INTO tbl_amdeco(titulo,descripcion,fecha,tipo,nombre_archivo) VALUES('$titulo','$descri','$fecha'	,'$tipo','$nombre')";
        $query = $db->execute($sql);
        if ($query) {
  ?>

          <script>
            alert('Se registro con Exito...')
          </script>
        <?php
        } else {
        ?>

          <script>
            alert('error...')
          </script>
  <?php
        }
      }
    }
  }
  ?>
  <!--End capturar datos de registro-->

  <br>
  <!-- CARGAR REGISTRO A NUESTRA TABLA-->
  <div class="container">
    <div align="center"><input type="text1" name="search" id="search" placeholder="Buscar.." class="form-control"> </div><br>

    <div class="table-responsive">
      <table class="table table-hover" id="employee_table">
        <thead>
          <tr>
            <th>
              <p class=" text-white">
                <center> <strong>TITULO</strong></center>
            </th>
            <th>
              <p class="text-white">
                <center> <strong>DESCRIPCION</strong></center>
            </th>
            <th>
              <p class="text-white">
                <center> <strong>FECHA</strong></center>
            </th>
            <th>
              <p class="text-white">
                <center> <strong>FORMATO</strong></center>
            </th>
            <th width=1>
              <p class="text-while">
                <center> <strong>DESCARGAR</strong></center>
            </th>

          </tr>
        </thead>

        <?php

        $db = new Conect_MySql();
        $sql = "select*from tbl_amdeco order by fecha desc";
        $query = $db->execute($sql);
        while ($datos = $db->fetch_row($query)) { ?>
          <tr>
            <td><?php echo $datos['titulo']; ?></td>
            <td><?php echo $datos['descripcion']; ?></td>
            <td><?php echo $datos['fecha']; ?></td>
            <td><?php echo $datos['tipo']; ?></td>
            <!--	<td> ?php echo '<img src="archivos/'.$datos["nombre_archivo"].'" width="30" heigth="30">'?></td>-->


            <td>
              <center><a class="btn btn-success" href="phpAmdeco/archivos/<?php echo $datos["nombre_archivo"]; ?>" download> <i class="fa fa-download" aria-hidden="true"></i></a></center>
            </td>




          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
  <!-- CARGAR REGISTRO A NUESTRA TABLA-->

  <!-- Javascript function for Mensaje Eliminar-->
  <script language="javascript">
    function deleteme(id) {
      if (confirm("Desea Eliminar!")) {
        window.location.href = 'phpAmdeco/del.php?id=' + id + '';
        return true;
      }
    }
  </script>
  <!-- End Javascript function for Mensaje Eliminar-->

  <!-- FUNCION PARA EL BUSCADOR-->
  <script>
    $(document).ready(function() {
      $('#search').keyup(function() {
        search_table($(this).val());
      });

      function search_table(value) {
        $('#employee_table tr').each(function() {
          var found = 'false';
          $(this).each(function() {
            if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
              found = 'true';
            }
          });
          if (found == 'true') {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
      }
    });
  </script>
  <!-- END FUNCION PARA EL BUSCADOR-->

  <script src="phpAmdeco/js/custom-file-input.js"></script>

  <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
  <?php include '../include/footer.php'; ?>

  <script src="js/script.js"></script>
  </body>

</html>