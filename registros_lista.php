<?php
$mensaje = "";
$results = "";
include("registros_personal/php/conexion.php");
include "registros_personal/php/personal.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Amdeco - Registros</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/google-map.css">
  <link rel="stylesheet" href="assets/css/mailform.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery-migrate-1.2.1.js"></script>
  <script src="js/device.min.js"></script>
</head>

<body>
  <header>
    <?php include './include/header.php'; ?>
  </header>
  <main>
    <div class='container'>
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center fw-bold" style="color: var(--custom-color-dark);"> LISTA DE PERSONAL</h2>
          <!--personas-->
          <table class="table caption-top">
            <thead>
              <tr>
                <th scope="col"><strong> Nombre</strong></th>
                <th scope="col"><strong> Fecha de inicio</strong></th>
                <th scope="col"><strong> Fecha de finalización</strong></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT CONCAT(nombre, ' ' ,apellido_p, ' ' ,apellido_m) nombre, fecha_ini, fecha_fin FROM personal";
              $resultado = mysqli_query($conn, $sql);
              while ($datos = mysqli_fetch_assoc($resultado)) :
              ?>
                <th><?= $datos['nombre'] ?></th>
                <td><?= $datos['fecha_ini'] ?></td>
                <td><?= $datos['fecha_fin'] ?></td>
            </tbody>
          <?php endwhile; ?>
          </table>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <?php include './include/footer.php'; ?>
  </footer>
  <script src="js/common.js"></script>
  <script src="./js/jquery.min.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script>
    $(document).ready(function() {
      loadGallery(true, 'a.thumbnail');
      //This function disables buttons when needed
      function disableButtons(counter_max, counter_current) {
        $('#show-previous-image, #show-next-image').show();
        if (counter_max == counter_current) {
          $('#show-next-image').hide();
        } else if (counter_current == 1) {
          $('#show-previous-image').hide();
        }
      }
      /**
       *
       * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
       * @param setClickAttr  Sets the attribute for the click handler.
       */

      function loadGallery(setIDs, setClickAttr) {
        var current_image,
          selector,
          counter = 0;

        $('#show-next-image, #show-previous-image').click(function() {
          if ($(this).attr('id') == 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

        function updateGallery(selector) {
          var $sel = selector;
          current_image = $sel.data('image-id');
          $('#image-gallery-caption').text($sel.data('caption'));
          $('#image-gallery-title').text($sel.data('title'));
          $('#image-gallery-image').attr('src', $sel.data('image'));
          disableButtons(counter, $sel.data('image-id'));
        }

        if (setIDs == true) {
          $('[data-image-id]').each(function() {
            counter++;
            $(this).attr('data-image-id', counter);
          });
        }
        $(setClickAttr).on('click', function() {
          updateGallery($(this));
        });
      }
    });
  </script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>