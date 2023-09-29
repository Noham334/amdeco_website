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

  <link rel="stylesheet" href="css/style.css">
  <!-- Optional theme -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/google-map.css">
  <link rel="stylesheet" href="css/mailform.css">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script defer src="js/jquery.min.js"></script>
  <script defer src="js/common.js"></script>
  <script defer src="js/device.min.js"></script>
</head>

<body>
  <header>
    <?php include './include/header.php'; ?>
  </header>
  <div class="page">
    <main>
      <div class='container'>
        <div class="row">
          <div class="col-lg-12">
            <hr>
            <h1 class="page-header">NOTICIAS AMDECO</h1>
            <?php
            $nums = 1;
            $sql_banner_top = mysqli_query($con, "select * from banner where estado=1 order by orden ");
            while ($rw_banner_top = mysqli_fetch_array($sql_banner_top)) {
            ?>
              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $rw_banner_top['titulo']; ?>" data-caption="<?php echo $rw_banner_top['descripcion'];    ?>" data-image="noticias/img/banner/<?php echo $rw_banner_top['url_image']; ?>" data-target="#image-gallery" data-url="<?php echo $rw_banner_top['url_descript']; ?>">
                  <img class="img-responsive" src="noticias/img/banner/<?php echo $rw_banner_top['url_image']; ?>" alt="Another alt text">
                  <p><?php echo $rw_banner_top['titulo']; ?></p>
                  <p class="button-container">
                    <button class="button btn-primary br-2" onclick="location.href='<?php echo $rw_banner_top['url_descript']; ?>'"><br>Click para leer</br></button>
                  </p>
                </a>
              </div>
            <?php
              if ($nums % 4 == 0) {
                echo '<div class="clearfix"></div>';
              }
              $nums++;
            }
            ?>
          </div>
        </div>
      </div>
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
    </main>
  </div>
  <!--
    ========================================================
                                FOOTER
    ========================================================
  -->
  <footer>
    <?php include './include/footer.php'; ?>
  </footer>
  <script src="js/script.js"></script>
</body>

</html>