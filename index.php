<!DOCTYPE html>
<html lang="es">

<head>
  <title>Amdeco</title>
  <meta charset="utf-8">
  <meta name="author" content="AMDECO" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="inicio/carrusel/engine1/style.css" />
  <script type="text/javascript" src="inicio/carrusel/engine1/jquery.js"></script>
  <!-- End WOWSlider.com HEAD section -->

  <link rel="stylesheet" type="text/css" href="inicio/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="inicio/bootstrap/css/estilos.css">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/camera.css">
  <link rel="stylesheet" href="css/owl-carousel.css">
  <link rel="stylesheet" href="noticias/estilo.css">
  <!--
      ========================================================
      							ADMIN
      ========================================================
      
      
      -->
  <?php
  include "inicio/admin/db.php";
  $images = get_foto();
  ?>

  <!--script traido de webam-->
  <script src="js\superfish.js"></script>
  <script src="js\jquery.responsivemenu.js"></script>
  <script src="js\jquery.flexslider-min.js"></script>
  <script src="js\FF-cash.js"></script>
  <script src="js/device.min.js"></script>
</head>
<!-- para el Facebook -->
<div id="fb-root"></div>


<body>
  <div class="page carousel">
    <header>
      <?php include './include/header.php'; ?>
    </header>

    <?php if (count($images) > 0) : ?>
      <!-- aqui insertaremos el slider -->
      <div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- Indicadores -->
        <div class="carousel-indicators">
          <?php
          $cnt = 0;
          foreach ($images as $img) :
          ?>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="<?php echo $cnt ?>" aria-label="Slide <?php echo ($cnt + 1); ?>" class="<?php if ($cnt == 0) {
                                                                                                                                                          echo 'active';
                                                                                                                                                        } ?>">
            </button>
          <?php
            $cnt++;
          endforeach;
          ?>
        </div>

        <!-- Contenedor de las imagenes -->
        <div class="carousel-inner">
          <?php
          $cnt = 0;
          foreach ($images as $img) :
          ?>
            <div data-bs-interval="10000" class="carousel-item <?php if ($cnt == 0) {
                                                                  echo 'active';
                                                                } ?>">
              <img src="<?php echo 'inicio/admin/' . $img->folder . $img->src; ?>" alt="Imagen <?php echo ($cnt + 1); ?>" class="d-block w-100">
              <div class="carousel-caption"><?php echo "<h4>" . $img->title; ?></div>
            </div>
          <?php
            $cnt++;
          endforeach;
          ?>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <?php else : ?>
      <h4 class="alert alert-warning">No hay imagenes</h4>
    <?php endif; ?>

    <div class="container-fluid">
      <ul class="row product-list">
        <?php include "noticias/Consultas.php";
        $noticias = Noticias(); ?>
      </ul>
    </div>
  </div>
  <br>
  <section class="well1">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-md-4">
          <h2>Nuestro Facebook »</h2>
          <p>Visitenos en las redes sociales:</p>
          <div class="fb-page" data-href="https://www.facebook.com/RedAMDECO/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/RedAMDECO/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RedAMDECO/">AMDECO</a></blockquote>
          </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="info-box">
            <h3 class="fa-comment">Eventos-Talleres »</h3>
            <dl>
              <img src="images/capacitacion.png" alt="">
              <marquee direction="up" scrollamount="1" width="200" height="240" onmouseover="this.stop();" onmouseout="this.start();">
                <div style="position:relative; top:3px; left:2px">
                  <script>
                    escribe();
                  </script>
                </div>
                <?php
                include "eventos/db.php";
                $images = get_imgs();
                foreach ($images as $img) : ?>
                  <a href="eventos/viewdocument.php?id=<?php echo $img->idEvento ?>" class="GenEnlRes"><?php echo $img->titulo; ?></a><br>
                  Fecha del evento&nbsp;<?php $fecha = $img->fecha;
                                        $fecha1 = date("m-d-Y", strtotime($fecha));
                                        echo $fecha1; ?><br>
                <?php endforeach; ?>
              </marquee>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  // FOOTER
  include './include/footer.php';
  ?>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="inicio/jquery.min.js"></script>
  <script src="inicio/bootstrap/js/bootstrap.min.js"></script>
  <style>
    h4 {
      color: white;
      border-radius: 25px;
      text-align: center;
      font-weight: bold;
      background-color: rgba(60, 221, 236, 0.51);
    }
  </style>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</body>

</html>