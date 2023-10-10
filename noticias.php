<?php
include("noticias/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Amdeco-Noticias</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <title>Noticias Amdeco</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script defer src="assets/js/jquery.min.js"></script>
  <script defer src="assets/js/device.min.js"></script>
</head>

<body>
  <header>
    <?php include './include/header.php'; ?>
  </header>
  <main>
    <center class="mt-2">
      <h2 class="page-header">NOTICIAS AMDECO</h2>
    </center>
    <div class='container'>
      <div class="row">

        <?php
        $nums = 1;
        $sql_banner_top = mysqli_query($con, "select * from banner where estado=1 order by orden ");
        while ($rw_banner_top = mysqli_fetch_array($sql_banner_top)) {
        ?>
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <a href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $rw_banner_top['titulo']; ?>" data-caption="<?php echo $rw_banner_top['descripcion'];    ?>" data-image="noticias/img/banner/<?php echo $rw_banner_top['url_image']; ?>" data-target="#image-gallery" data-url="<?php echo $rw_banner_top['url_descript']; ?>">
              <img width="200px" class="img-responsive" src="noticias/img/banner/<?php echo $rw_banner_top['url_image']; ?>" alt="Another alt text">
              <p><?php echo $rw_banner_top['titulo']; ?></p>
              <button class="button btn-primary" onclick="location.href='<?php echo $rw_banner_top['url_descript']; ?>'"><br>Click para leer</br></button>
            </a>
          </div>
        <?php

        }
        ?>
      </div>
    </div>
  </main>
  <!--
    ========================================================
                                FOOTER
    ========================================================
  -->
  <footer>
    <?php include './include/footer.php'; ?>
  </footer>
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
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>