<?php
include "inicio/admin/db.php";
$images = get_foto();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" />
  <meta name="author" content="AMDECO" />
  <title>Amdeco</title>
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v18.0" nonce="yPFg0l4N"></script>

  <header>
    <?php include './include/header.php'; ?>
  </header>
  <div class="page carousel">
    <?php if (count($images) > 0) : ?>
      <div id="carousel1" class="carousel slide carousel-fade dblock" style="max-height: 500px;" data-bs-ride="carousel">
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
        <div class="carousel-inner" style="max-height: 510px;">
          <?php
          $cnt = 0;
          foreach ($images as $img) :
          ?>
            <div data-bs-interval="4000" class="carousel-item <?php if ($cnt == 0) {
                                                                echo 'active';
                                                              } ?>">
              <img style="max-height: 550px; margin-bottom: -60px;" src="<?php echo 'inicio/admin/' . $img->folder . $img->src; ?>" alt="Imagen <?php echo ($cnt + 1); ?>" class="d-block w-100">
              <div class="carousel-caption"><?php echo "<h4 style='margin: auto; background: var(--custom-color-secondary); width:300px; border-radius: 5px; padding: 4px 0px; color: white;'>" . $img->title; ?></h4>
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
  <section class="">
    <div class="noticias">
      <center>
        <h2>NOTICIAS</h2>
      </center>
      <div class="card-container d-flex justify-content-around">
        <?php include "noticias/Consultas.php";
        Noticias();
        ?>
      </div>
    </div>
    <div class="noticias-eventos py-5">
      <div class="container d-flex justify-content-between">
        <div class="dark-card col-md-5">
          <div class="info-box-left" style="margin:auto;">
            <div class="d-flex align-items-center flex-column">
              <h2 class="fa-facebook-square" style="color:white;"> Nuestro Facebook</h2>
              <p>Visitenos en las redes sociales</p>
              <div class="fb-page" data-href="https://www.facebook.com/RedAMDECO" data-tabs="timeline,events,messages" data-width="" data-height="400" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/RedAMDECO" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RedAMDECO">AMDECO</a></blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="dark-card col-md-5">
          <div class="info-box d-flex justify-content-centerd-flex justify-content-center">
            <div class="d-flex align-items-center flex-column">
              <h2 class="fa-comment">Eventos</h2>
              <dl class="d-flex justify-content-center">
                <marquee direction="up" scrollamount="1" width="100%" height="100" onmouseover="this.stop();" onmouseout="this.start();">
                  <?php
                  include "eventos/db.php";
                  $images = get_imgs();
                  foreach ($images as $img) : ?>
                    <div class="d-flex flex-column align-items-center">
                      <img class="evento-image" src="<?php echo './eventos/' . $img->folder . '/' . $img->src; ?>" alt="">
                      <br>
                      <a href="eventos/viewdocument.php?id=<?php echo $img->idEvento ?>" class="GenEnlRes"><?php echo $img->titulo; ?></a><br>
                      Fecha del evento&nbsp;<?php $fecha = $img->fecha;
                                            $fecha1 = date("m-d-Y", strtotime($fecha));
                                            echo $fecha1; ?><br>
                    <?php endforeach; ?>
                    </div>
                </marquee>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <?php
    // FOOTER
    include './include/footer.php';
    ?>
  </footer>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="js/script.js"></script>
  <script src="./js/jquery.js"></script>
  <script src="js/common.js"></script>

</body>

</html>