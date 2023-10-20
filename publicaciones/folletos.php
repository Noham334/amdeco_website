<!DOCTYPE html>
<html lang="es">

<head>
  <title>Amdeco</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="phpfolletos/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="phpfolletos/css/form-elements.css">
  <script>
    (function(e, t, n) {
      var r = e.querySelectorAll("html")[0];
      r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
    })(document, window, 0);
  </script>

  <script src="js/jquery-migrate-1.2.1.js"></script>
  <script src="js/device.min.js"></script>
</head>

<body>
  <header>
    <?php include '../include/header.php'; ?>
  </header>
  <div class="page">
    <?php
    include_once 'phpfolletos/config.inc.php';
    if (isset($_POST['subir'])) {
      $nombre = $_FILES['archivo']['name'];
      $tipo = $_FILES['archivo']['type'];
      $ruta = $_FILES['archivo']['tmp_name'];
      $destino = "phpfolletos/archivos/" . $nombre;
      if ($nombre != "") {
        if (copy($ruta, $destino)) {
          $titulo = $_POST['titulo'];
          $descri = $_POST['descripcion'];
          $fecha = $_POST['fecha'];

          $db = new Conect_MySql();
          $sql = "INSERT INTO tbl_folletos(titulo,descripcion,fecha,tipo,nombre_archivo) VALUES('$titulo','$descri','$fecha'  ,'$tipo','$nombre')";
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
    <div class="container my-2">
      <div align="center"><input type="text1" name="search" id="search" placeholder="Buscar.." class="form-control"> </div><br>

      <div class="table-responsive">
        <table class="table table-hover mt-5" id="employee_table">
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
          $sql = "select*from tbl_folletos order by fecha desc";
          $query = $db->execute($sql);
          while ($datos = $db->fetch_row($query)) { ?>
            <tr>
              <td><?php echo $datos['titulo']; ?></td>
              <td><?php echo $datos['descripcion']; ?></td>
              <td><?php echo $datos['fecha']; ?></td>
              <td><?php echo $datos['tipo']; ?></td>
              <!--  <td> ?php echo '<img src="archivos/'.$datos["nombre_archivo"].'" width="30" heigth="30">'?></td>-->


              <td>
                <center><a class="btn btn-success" href="phpfolletos/archivos/<?php echo $datos["nombre_archivo"]; ?>" download> <i class="fa fa-download" aria-hidden="true"></i></a></center>
              </td>




            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
    <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
    <footer><?php include '../include/footer.php'; ?></footer>
    <script language="javascript">
      function deleteme(id) {
        if (confirm("Desea Eliminar!")) {
          window.location.href = 'phpfolletos/del.php?id=' + id + '';
          return true;
        }
      }
    </script>
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
    <script src="phpfolletos/js/custom-file-input.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/script.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>