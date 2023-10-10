<!DOCTYPE html>
<html lang="es">

<head>
  <title>Amdeco-Municipsios</title>
  <meta charset="utf-8">
  <meta name="author" content="AMDECO" />
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="enlacemunicipios/searchShield/css/estilos.css">
  <link rel="stylesheet" href="enlacemunicipios/mapa/resources/ol.css">
  <link rel="stylesheet" href="enlacemunicipios/mapa/resources/ol3-layerswitcher.css">
  <link rel="stylesheet" href="enlacemunicipios/mapa/resources/qgis2web.css">
  <link rel="stylesheet" type="text/css" href="enlacemunicipios/sliderMapas/sliderengine/amazingslider-1.css">

  <script src="assets/js/jquery.min.js"></script>
  <style>
    .search-layer {
      top: 65px;
      left: .5em;
    }

    .ol-touch .search-layer {
      top: 80px;
    }
  </style>
  <style>
    html,
    body {
      background-color: #ffffff;
    }

    .ol-control button {
      background-color: #f8f8f8 !important;
      color: #000000 !important;
      border-radius: 0px !important;
    }

    .ol-zoom,
    .geolocate,
    .gcd-gl-control .ol-control {
      background-color: rgba(255, 255, 255, .4) !important;
      padding: 3px !important;
    }

    .ol-scale-line {
      background: none !important;
    }

    .ol-scale-line-inner {
      border: 2px solid #f8f8f8 !important;
      border-top: none !important;
      background: rgba(255, 255, 255, 0.5) !important;
      color: black !important;
    }

    #map {
      width: 728px;
      height: 522px;
    }
  </style>
</head>

<body>
  <header>
    <?php include './include/header.php'; ?>
  </header>
  <div class="container">
    <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
    <main>
      <!--Regiones de Cochabamba -->
      <section class="mt-5">
        <center>
          <h2>Regiones de Cochabamba</h2>
        </center>
        <br>
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div id="map" class="d-flex">
                <div id="popup" class="ol-popup">
                  <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                  <div id="popup-content"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <br>
              <div class="fleft"><strong>Metropolitana:</strong></div>
              <p>
                <li>Comprende 7 Gobiernos Municipales: Cochabamba, Colcapirhua, Quillacollo, Sacaba, Sipe Sipe, Tiquipaya, Vinto.</li>
              </p>
              <div class="fleft"><strong>Valles:</strong></div>
              <p>
                <li>Comprende 15 Gobiernos Municipales:Punata, Capinota, Santivañez, Arani, Villa Rivero, Cliza, Toco, Tolata, Tarata, Anzaldo, Sacabamba, Arbieto, Tacahi, Villa Gualberto Villarroel (Cuchumuela) y San Benito.</li>
              </p>
              <div class="fleft"><strong>Trópico:</strong></div>
              <p>
                <li>Comprende 6 Gobiernos Municipales: Entre Rios, Shinahota, Colomi, Puerto Villarroel, Villa tunari, Chimore.</li>
              </p>
              <div class="fleft"><strong>Cono Sur:</strong></div>
              <p>
                <li>Comprende 11 Gobiernos Municipales: Vacas, Tiraque, Alalay, Mizque, Aiquile, Vila Vila, Pojo, Omereque, Totora, Pocona y Pasorapa.</li>
              </p>
              <div class="fleft"><strong>Andina:</strong></div>
              <p>
                <li>Comprende 8 Gobiernos Municiaples: Bolivar, Cocapata, Independencia, Morochata, Tapacare, Tacopaya, Sicaya y Arque.</li>
              </p>

            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container my-5">
          <div class="row">
            <div class="grid_1"></div>

            <div class="col-lg-10">
              <h5 style="text-decoration-color: red"> &nbsp;Buscar Municipio</h5>
              <div id="wrap">
                <div class="product-head">

                  <div id="form">

                  </div>

                </div>
                <ul id="list">
                  <li class="hide" style="display: none;"><a href="enlacemunicipios/aiquile.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/aiquile_escudo.jpg" width="50" height="50" align="absmiddle">Aiquile</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/alalay.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/alalay_escudo.jpg" width="50" height="50" align="absmiddle">Alalay</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/anzaldo.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/anzaldo_escudo.jpg" width="50" height="50" align="absmiddle">Anzaldo</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/arani.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/arani_escudo.jpg" width="50" height="50" align="absmiddle">Arani</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/arbierto.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/arbieto_escudo.jpg" width="50" height="50" align="absmiddle">Arbieto</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/arque.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/arque_escudo.jpg" width="50" height="50" align="absmiddle">Arque</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/bolivar.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/bolivar_escudo.jpg" width="50" height="50" align="absmiddle">Bolivar</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/capinota.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/capinota_escudo.jpg" width="50" height="50" align="absmiddle">Capinota</a></li>
                  <li class="hide" style="display: none;"><a href="  enlacemunicipios/chimore.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/chimore_escudo.jpg" width="50" height="50" align="absmiddle">Chimore</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/cliza.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/cliza_escudo.jpg" width="50" height="50" align="absmiddle">Cliza</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/cocapata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/cocapata_escudo.jpg" width="50" height="50" align="absmiddle">Cocapta</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/cochabamba.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/cochabamba.jpg" width="50" height="50" align="absmiddle">Cochabamba</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/colcapirhua.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/colcapirhua_escudo.jpg" width="50" height="50" align="absmiddle">Colcapirhua</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/colomi.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/colomi_escudo.jpg" width="50" height="50" align="absmiddle">Colomi</a></li>
                  <li class="hide" style="display: none;"><a href="   enlacemunicipios/independencia.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/independencia_escudo.jpg" width="50" height="50" align="absmiddle">Independencia</a></li>
                  <li class="hide" style="display: none;"><a href="   enlacemunicipios/mizque.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/mizque_escudo.jpg" width="50" height="50" align="absmiddle">Mizque</a></li>
                  <li class="hide" style="display: none;"><a href="   enlacemunicipios/morochata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/morochata_escudo.jpg" width="50" height="50" align="absmiddle">Morochata</a></li>
                  <li class="hide" style="display: none;"><a href="enlacemunicipios/omereque.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/omereque_escudo.jpg" width="50" height="50" align="absmiddle">Omereque</a></li>
                  <li class="hide" style="display: none;"><a href="  enlacemunicipios/pasorapa.php " target="_blank"><img src="enlacemunicipios/searchShield/escudos/pasorapa_escudo.jpg" width="50" height="50" align="absmiddle">Pasorapa</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/pocona.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/pocona_escudo.jpg" width="50" height="50" align="absmiddle">Pocona</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/pojo.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/pojo_escudo.jpg" width="50" height="50" align="absmiddle">Pojo</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/puertoVillaroel.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/puerto_villarroel_escudo.jpg" width="50" height="50" align="absmiddle">Puerto Villaroel</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/punata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/punata_escudo.jpg" width="50" height="50" align="absmiddle">Punata</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/quillacollo.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/quillacollo_escudo.jpg" width="50" height="50" align="absmiddle">Quillacollo</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/raqaypampa.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/raqaypampa.jpg" width="50" height="50" align="absmiddle">Raqaypampa</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/sacaba.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sacaba_escudo.jpg" width="50" height="50" align="absmiddle">Sacaba</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/sacabamba.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sacabamba_escudo.jpg" width="50" height="50" align="absmiddle">Sacabamba</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/sanBenito.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sanbenito_escudo.jpg" width="50" height="50" align="absmiddle">San Benito</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/santivanes.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/santivanez_escudo.jpg" width="50" height="50" align="absmiddle">Santivañes</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/shinaota.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/shinahota_escudo.jpg" width="50" height="50" align="absmiddle">Shinaota</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/sicaya.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sicaya_escudo.jpg" width="50" height="50" align="absmiddle">Sicaya</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/sipeSipe.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sipesipe_escudo.jpg" width="50" height="50" align="absmiddle">Sipe Sipe</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/tacachi.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tacachi_escudo.jpg" width="50" height="50" align="absmiddle">Tacachi</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/tacopaya.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tacopaya_escudo.jpg" width="50" height="50" align="absmiddle">Tacopaya</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/tapacari.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tapacari_escudo.jpg" width="50" height="50" align="absmiddle">Tapacari</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/tarata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tarata_escudo.jpg" width="50" height="50" align="absmiddle">Tarata</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/tiquipaya.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tiquipaya_escudo.jpg" width="50" height="50" align="absmiddle">Tiquipaya</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/tiraque.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tiraque_escudo.jpg" width="50" height="50" align="absmiddle">Tiraque</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/toco.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/toco_escudo.jpg" width="50" height="50" align="absmiddle">Toko</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/tolata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tolata_escudo.jpg" width="50" height="50" align="absmiddle">Tolata</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/totora.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/totora_escudo.jpg" width="50" height="50" align="absmiddle">Totora</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/vacas.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/vacas_escudo.jpg" width="50" height="50" align="absmiddle">Vacas</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/vilaVila.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/vilavila_escudo.jpg" width="50" height="50" align="absmiddle">Vila Vila</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/vilaGvillaroel.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/villa_g_villarroel_escudo.jpg" width="50" height="50" align="absmiddle">Villa Villaroel</a></li>
                  <li class="hide" style="display: none;"><a href="  enlacemunicipios/villaRivero.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/villa_rivero_escudo.jpg" width="50" height="50" align="absmiddle">Villa Rivero</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/villaTunari.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/villa_tunari_escudo.jpg" width="50" height="50" align="absmiddle">Villa Tunari</a></li>
                  <li class="hide" style="display: none;"><a href=" enlacemunicipios/vinto.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/vinto_escudo.jpg" width="50" height="50" align="absmiddle">Vinto</a></li>

                  <li class="hide" style="display: none;"><a href="mapa/pagina.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/cercado_escudo.jpg" width="50" height="50" align="absmiddle"> Cercado</a></li>
                </ul>
                <script src="enlacemunicipios/searchShield/js/jquery.js"></script>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- END SEARCH SHIELD-->
    </main>
  </div>
  <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
  <footer>
    <?php
    // FOOTER
    include './include/footer.php';
    ?>
  </footer>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="enlacemunicipios/mapa/resources/qgis2web_expressions.js"></script>
  <script src="enlacemunicipios/mapa/resources/polyfills.js"></script>
  <script src="enlacemunicipios/mapa/resources/functions.js"></script>
  <script src="enlacemunicipios/mapa/resources/ol.js"></script>
  <script src="enlacemunicipios/mapa/resources/ol3-layerswitcher.js"></script>
  <script src="enlacemunicipios/mapa/layers/regiones_1.js"></script>
  <script src="enlacemunicipios/mapa/styles/regiones_1_style.js"></script>
  <script src="enlacemunicipios/mapa/layers/layers.js" type="text/javascript"></script>
  <script src="enlacemunicipios/mapa/resources/qgis2web.js"></script>
  <script src="enlacemunicipios/mapa/resources/Autolinker.min.js"></script>
  <script src="enlacemunicipios/sliderMapas/sliderengine/jquery.js"></script>
  <script src="enlacemunicipios/sliderMapas/sliderengine/amazingslider.js"></script>
  <script src="enlacemunicipios/sliderMapas/sliderengine/initslider-1.js"></script>

</body>

</html>