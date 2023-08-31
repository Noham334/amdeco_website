<?php
include "inicio/admin/db.php";
$images = get_foto();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Amdeco</title>
  <meta charset="utf-8">
  <meta name="author" content="AMDECO" />
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="inicio/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="noticias/estilo.css">
  <script src="./js/jquery.min.js"></script>
  <script src="js/common.js"></script>
  <script src="js/script.js"></script>
</head>

<body>
  <header>
    <?php include './include/header.php'; ?>
  </header>
  <div class="page carousel">

    <?php if (count($images) > 0) : ?>
      <!-- aqui insertaremos el slider -->
      <div id="carousel1" class="carousel slide carousel-fade mt-2  dblock" style="max-height: 500px;" data-bs-ride="carousel">
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
        <div class="carousel-inner" style="max-height: 510px;">
          <?php
          $cnt = 0;
          foreach ($images as $img) :
          ?>
            <div data-bs-interval="10000" class="carousel-item <?php if ($cnt == 0) {
                                                                  echo 'active';
                                                                } ?>">
              <img style="max-height: 550px; margin-bottom: -60px;" src="<?php echo 'inicio/admin/' . $img->folder . $img->src; ?>" alt="Imagen <?php echo ($cnt + 1); ?>" class="d-block w-100">
              <div class="carousel-caption"><?php echo "<h4 style='margin: auto; background: #57aacd; width:300px; border-radius: 5px; padding: 4px 0px; color: white;'>" . $img->title; ?></h4>
              </div>
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

  </div>
  <br>
  <section class="well1">
    <div class="noticias">
      <?php include "noticias/Consultas.php";
      $noticias = Noticias(); ?>
    </div>
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
  <script src="js/common.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="./js/jquery.min.js"></script>
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