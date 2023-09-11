<!DOCTYPE php>
<html lang="en">

<head>
  <title>Amdeco-Municipios</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script><!--[if lt IE 9]>
    <php class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </php>
    <script src="js/html5shiv.js"></script><![endif]-->
  <script src="js/device.min.js"></script>

  <link rel="stylesheet" href="enlacemunicipios/searchShield/css/estilos.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

</head>

<body>
  <div class="page">
    <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
    <header>
      <?php include './include/header.php'; ?>
    </header>
    <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
    <main>
      <!--Regiones de Cochabamba -->
      <section>
        <center>
          <h2>Regiones de Cochabamba</h2>
        </center>
        <div class="container hr well1 ins2">
          <div class="row">
            <div class="grid_8">
              <link rel="stylesheet" href="enlacemunicipios/mapa/resources/ol.css">
              <link rel="stylesheet" href="enlacemunicipios/mapa/resources/fontawesome-all.min.css">
              <link rel="stylesheet" href="enlacemunicipios/mapa/resources/ol3-layerswitcher.css">
              <link rel="stylesheet" href="enlacemunicipios/mapa/resources/qgis2web.css">
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
              </style>
              <style>
                #map {
                  width: 728px;
                  height: 522px;
                }
              </style>
              <title></title>
              </head>
              <div id="map">
                <div id="popup" class="ol-popup">
                  <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                  <div id="popup-content"></div>
                </div>
              </div>
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

            </div>

            <div class="grid_3">

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

      <link rel="stylesheet" type="text/css" href="inicio/bootstrap/css/bootstrap.min.css">

      <section 


            <!-- Insert to your webpage before the </head> -->
            <script src="enlacemunicipios/sliderMapas/sliderengine/jquery.js"></script>
            <script src="enlacemunicipios/sliderMapas/sliderengine/amazingslider.js"></script>
            <link rel="stylesheet" type="text/css" href="enlacemunicipios/sliderMapas/sliderengine/amazingslider-1.css">
            <script src="enlacemunicipios/sliderMapas/sliderengine/initslider-1.js"></script>
            <!-- End of head section HTML codes -->

            <!-- Insert to your webpage where you want to display the slider -->
            <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;padding-left:0px; padding-right:244px;margin:0px auto 0px;">
              <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">


                  <li><a href="enlacemunicipios/aiquile.php" target="_blank"><img src="enlacemunicipios/sliderMapas//map/aiquile.png" alt="Aiquile" title="Aiquile" data-description="Aiquile es la Primera Sección Municipal de la Provincia Campero. Es conocida como la “Capital del Charango”." /> /></a>
                  </li>
                  <li><a href="enlacemunicipios/alalay.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/alalay.png" alt="Alalay" title="Alalay" data-description="Es la Tercera Sección Municipal de la Provincia Mizque, está ubicada en la Región del Cono Sur del Departamento. El nombre proviene de la expresión quechua “Alalay” que significa frío, precisamente por las características climatológicas del municipio." /></a>
                  </li>
                  <li><a href="enlacemunicipios/anzaldo.php" target="_blank"> <img src="enlacemunicipios/sliderMapas//map/anzaldoo.png" alt="Anzaldo" title="Anzaldo" data-description="Es la Segunda Sección Municipal de la Provincia Esteban Arce, pertenece a la Región Valles. El Valle de Anzaldo es también conocido como la “Tierra de los Phiri Maletas” para describir a sus valerosos hombres y mujeres, que en tiempos de los hacendados trasladaron en maletas el conocido phiri, un exquisito plato tradicional preparado a base de trigo o quinua." /></a>
                  </li>
                  <li><a href="enlacemunicipios/arani.php" target="_blank"> <img src="enlacemunicipios/sliderMapas//map/arani.png" alt="Arani" title="Arani" data-description="Arani es la primera sección de la Provincia del mismo nombre, pertenece a la Región Valles y también al Cono Sur. Es conocida como la Tierra del Viento y el Pan. El centro poblado tiene las características propias de las aldeas rurales de la época colonial con la plaza principal al centro y en forma de damero los trazos de las calles se dirigen en forma lineal siguiendo el sentido de Este a Oeste" /></a>
                  </li>
                  <li><a href="enlacemunicipios/arbierto.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/arbieto.png" alt="Arbieto" title="Arbieto" data-description="Es la Tercera Sección Municipal de la Provincia Esteban Arce. Pertenece a la Región Valles. Conocida como la “Tierra del Durazno Sabor Ulincate” por la exquisita producción de esta fruta. Es la tierra de mujeres y hombre valerosos, tierra productora del sabroso durazno, terruño de la feria gastronómica Ñawpa Manca Mikhuna y del Mast’aku." /></a>
                  </li>
                  <li><a href="enlacemunicipios/arque.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/arque.png" alt="Arque" title="Arque" data-description="Arque es la primera sección municipal de la provincia del mismo nombre y está ubicada en la Región Andina, cuenta con serranías elevadas que contrastan con la profundidad de sus barrancos, lo que representa un espectáculo impresionante para todos los visitantes." /></a>
                  </li>
                  <li><a href="enlacemunicipios/bolivar.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/bolivar.png" alt="Bolivar" title="Bolivar" data-description="Bolívar es una de las provincias más jóvenes del departamento de Cochabamba y la más alejada." /></a>
                  </li>
                  <li><a href="enlacemunicipios/capinota.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/capinota.png" alt="Capinota" title="Capinota" data-description="Es la Primera Sección Municipal de la Provincia del mismo nombre, es además su capital, pertenece a la Región Valles. Capinota es conocida por su amplia y exquisita producción, llamada también la “Tierra del Guarapo”." /></a>
                  </li>
                  <li><a href="enlacemunicipios/cochabamba.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/Cochabamba.png" alt="Cercado" title="Cercado" data-description="El municipio de Cercado forma parte de las 16 provincias existentes en el Departamento de Cochabamba, encontrándose casi en el centro del mismo. Tiene una superficie de 55.631 Km2 y forma parte de la subregión del valle central junto con los municipios de Sacaba, Quillacollo, Colcapirhua, Tiquipaya, Vinto y Sipe Sipe. El municipio tiene una altitud promedio de 2.500 m.s.n.m." /></a>
                  </li>
                  <li><a href="enlacemunicipios/chimore.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/chimore.png" alt="Chimore" title="Chimore" data-description="Chimoré es la Cuarta Sección Municipal de la Provincia Carrasco está ubicada en la Región del Trópico. El nombre del municipio deriva de la palabra nativa yuracaré “Chimoré”, que significa Almendrillo - árbol duro." /></a>
                  </li>
                  <li><a href="enlacemunicipios/cliza.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/cliza.png" alt="Cliza" title="Cliza" data-description="Es la Primera Sección Municipal de la Provincia German Jordan, capital de provincia, que además corresponde a la Región Valles. Cliza conocida como “El Corazón del Valle Alto” y también el “Granero de Bolivia”." /></a>
                  </li>
                  <li><a href="enlacemunicipios/cocapata.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/cocapata.png" alt="Cocapata" title="Cocapata" data-description="El Municipio de Cocapata es uno de los Municipios más jóvenes del departamento. Es la Tercera Sección Municipal de la Provincia Ayopaya y está situado en la Región Andina.

Los ciclos productivos cortos permiten que se logre hasta 4 cosechas al año. En relación a la producción de papa y otros cultivos con rendimientos óptimos 1 cosecha al año." /></a>
                  </li>
                  <li><a href="enlacemunicipios/colcapirhua.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/colcapirhua.png" alt="Colcapirhua" title="Colcapirhua" data-description="Es la Quinta Sección Municipal de la Provincia Quillacollo, corresponde a la Región Metropolitana. Su nombre deriva del quechua qollqe - plata y pirwa – silo, depósito de productos agrícolas, construidos de cañahueca y barro." /></a>
                  </li>
                  <li><a href="enlacemunicipios/colomi.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/colomi.png" alt="Colomi" title="Colomi" data-description="Es la Segunda Sección Municipal de la Provincia Chapare. Y es parte de la Región del Trópico. Es considerada “Capital Hidroeléctrica de Bolivia” por ser proveedor de energía. Su ubicación geográfica privilegiada hace del municipio un lugar con permanente movimiento comercial y de tránsito. Los principales centros turístico se hallan en cercanías de Santa Isabel, Incachaca, hermosos parajes de selva subtropical, hermosos paisajes de altura por la laguna de Corani y otros menos conocidos, y la característica peculiar del municipio es la neblina en sus pisos ecológicos." /></a>
                  </li>
                  <li><a href="enlacemunicipios/entrerios.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/entrerios.png" alt="Entre Rios" title="Entre Rios" data-description="El municipio de Entre Ríos corresponde a la Sexta Sección Municipal de la Provincia Carrasco, pertenece a la Región del Trópico.

Entre Ríos se encuentra en una de las regiones con mayor potencialidad en la producción de alimentos e hidrocarburos. Sus más de 30 mil habitantes se dedican a la actividad ganadera, piscícola y avícola, también al cultivo de granos, como el arroz, maíz, soya; frutas como la piña y el plátano de exportación. Además, se produce café, papaya, sandías y otros." /></a>
                  </li>
                  <li><a href="enlacemunicipios/independencia.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/independencia.png" alt="Independencia" title="Independencia" data-description="Es la Primera Sección Municipal de la Provincia Ayopaya y está ubicada en la Región Andina, es además la capital de provincia. Conocida como “El Reducto de la Gesta Libertaria” en nuestro país, por su contribución a las luchas libertarias en 1825. Fue el centro de operaciones de los temidos guerrilleros de la Republiqueta de Ayopaya." /></a>
                  </li>
                  <li><a href="enlacemunicipios/mizque.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/mizque.png" alt="Mizque" title="Mizque" data-description="Mizque es la Primera Sección de la Provincia del mismo nombre, además de ser su capital, y uno de los municipios más antiguos del departamento. Pertenece a los municipios de la Región del Cono Sur. Es conocida como la “Ciudad de los Quinientos Quitasoles” en alusión a la época de la Colonia donde las damas paseaban por la plaza con sus quitasoles." /></a>
                  </li>
                  <li><a href="enlacemunicipios/morochata.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/morochata.png" alt="Morochata" title="Morochata" ata-description="Es l a Segunda Sección Municipal de la Provincia Ayopaya, corresponde a la Región Andina. Es conocida como la “Capital de la papa” ya que sería uno de los municipios que produce la mayor variedad de papas nativas, y además el sabor y calidad de la papa es reconocida a nivel nacional." /></a>
                  </li>
                  <li><a href="enlacemunicipios/omereque.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/omereque.png" alt="Omereque" title="Omereque" data-description="COPIA Sección Municipal de la Provincia Ayopaya, corresponde a la Región Andina. Es conocida como la “Capital de la papa” ya que sería uno de los municipios que produce la mayor variedad de papas nativas, y además el sabor y calidad de la papa es reconocida a nivel nacional." /></a>
                  </li>
                  <li><a href="enlacemunicipios/pasorapa.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/pasorapa.png" alt="Pasorapa" title="Pasorapa" data-description="C Sección Municipal de la Provincia Ayopaya, corresponde a la Región Andina. Es conocida como la “Capital de la papa” ya que sería uno de los municipios que produce la mayor variedad de papas nativas, y además el sabor y calidad de la papa es reconocida a nivel nacional." /></a>
                  </li>
                  <li><a href="enlacemunicipios/pocona.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/pocona.png" alt="Pocono" title="Pocono" data-description="Es la Tercera Sección de la Provincia Carrasco, corresponde a la Región del Cono Sur. Desde la época del Incario, el municipio presenta un completo sistema de vías camineras que vinculaban los diferentes puntos del valle de Pocona, hacia la ciudadela y Fortaleza Incallajta, posteriormente a los valles cochabambinos y hacia Samaipata en Santa Cruz." /></a>
                  </li>
                  <li><a href="enlacemunicipios/pojo.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/pojo.png" alt="Pojo" title="Pojo" data-description="Es la Segunda Sección de la Provincia Carrasco, pertenece a la Región del Cono Sur. Por sus condiciones geográficas se divide en Pojo Valles y Pojo Trópico. Es conocida como la “Tierra de la Manzana” y como “Huerto de Mil Sabores” por su exquisita producción. La zona de Pojo valles está conformada por regiones de montañas, colinas bajas y llanuras aluviales. Pojo trópico, en cambio, es una zona de transición entre pie de monte y llanos orientales como yungas cálido y selva amazónica." /></a>
                  </li>
                  <li><a href="enlacemunicipios/puertoVillaroel.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/puertoVillaroel.png" alt="Puero Villaroel" title="Puero Villaroel" data-description="Es la Quinta Sección Municipal de la Provincia Carrasco y parte de la Región Trópico de departamento. Por su ubicación geográfica, está integrado al corredor de exportación hacia Rondonia en el Brasil" /></a>
                  </li>
                  <li><a href="enlacemunicipios/punata.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/punata.png" alt="Punata" title="Punata" data-description="Punata tiene principalmente producción agrícola. Los cultivos más importantes son el trigo, papa, avena, maíz, arveja, frutales como durazno, pera, manzana, ciruela, frutillas etc. La actividad agrícola de Punata es reconocida por la producción de peras, duraznos y otras frutas en huertos frutales. También se producen hortalizas y pasturas mejoradas de alto rendimiento, como la alfalfa. En las partes altas se cultiva variedades de papa, la papaliza, la oca, trigo y maíz." /></a>
                  </li>
                  <li><a href="enlacemunicipios/quillacollo.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/quillacollo.png" alt="Quillacollo" title="Quillacollo" data-description="Es la primera Sección Municipal de la Provincia del mismo nombre, además de ser su capital, corresponde a la Región Metropolitana. Es mejor conocida como la “Tierra de la Integración” ya que la Fiesta de la Virgen de Urkupiña es un patrimonio de todos los bolivianos que congrega a miles de visitantes que con mucha fe acuden hasta sus pies." /></a>
                  </li>
                  <li><a href="enlacemunicipios/raqaypampa.php" target="_blank"><img src="enlacemunicipios/sliderMapas//map/raqaypampa.png" alt="Raqaypampa" title="Raqaypampa" data-description="Es la Primera Sección Municipal de la Provincia German Jordan, capital de provincia, que además corresponde a la Región Valles. Cliza conocida como “El Corazón del Valle Alto” y también el “Granero de Bolivia”." /></a>
                  </li>
                  <li><a href="enlacemunicipios/sacaba.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/sacaba.png" alt="Sacaba" title="Sacaba" data-description="Es la Capital de la Provincia Chapare y su Primera Sección Municipal, corresponde a la Región Metropolitana. Sacaba es la “Tierra de la Chicha y el Chicharrón”, de ahí la frase “Sacaba donde la chicha no se acaba”" /></a>
                  </li>
                  <li><a href="enlacemunicipios/sacabamba.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/sacabamba.png" alt="Sacabamba" title="Sacabamba" data-description="Es la Capital de la Provincia Chapare y su Primera Sección Municipal, corresponde a la Región Metropolitana. Sacaba es la “Tierra de la Chicha y el Chicharrón”, de ahí la frase “Sacaba donde la chicha no se acaba”" /></a>
                  </li>
                  <li><a href="enlacemunicipios/sanBenito.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/sanbenito.png" alt="San Benito" title="San Benito" data-description="Es la Capital de la Provincia Chapare y su Primera Sección Municipal, corresponde a la Región Metropolitana. Sacaba es la “Tierra de la Chicha y el Chicharrón”, de ahí la frase “Sacaba donde la chicha no se acaba”" /></a>
                  </li>
                  <li><a href="enlacemunicipios/santivanes.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/santivanes.png" alt="Santivañes" title="Santivañes" data-description="Es la Segunda Sección Municipal de la Provincia Capinota, pertenece a la Región Valles. Se asienta en medio de una vasta planicie rodeada de serranías, surcada por algunos arroyos y gargantas horadadas por el flujo de las aguas durante miles de años y salpicada de formaciones rocosas de altura variada. Por todas partes, el verde vivo de los algarrobos alegra el paisaje en esta época del año." /></a>
                  </li>
                  <li><a href="enlacemunicipios/shinaota.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/shinahota.png" alt="Shinaota" title="Shinaota" data-description="Es la Segunda Sección Municipal de la Provincia Tiraque, pertenece a la Región del Trópico cochabambino. Es el municipio más joven del departamento. Considerada como cuna de la revolución cocalera y sede principal de la coordinadora de las 6 federaciones del trópico." /></a>
                  </li>
                  <li><a href="enlacemunicipios/sicaya.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/sicaya.png" alt="Sicaya" title="Sicaya" data-description="Es la Tercera Sección Municipal de la Provincia Capinota, pertenece a la Región Andina. Es uno de los municipios que destaca por su producción. A mediados del siglo XIX Sicaya se constituía en una parada obligatoria de las diligencias de la época, ya que era el camino que unía al departamento de Cochabamba con Potosí y Sucre." /></a>
                  </li>
                  <li><a href="enlacemunicipios/sipeSipe.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/sipesipe.png" alt="Sipe Sipe" title="Sipe Sipe" data-description="Es la Segunda Sección Municipal de la Provincia de Quillacollo, pertenece a la Región Metropolitana. Conocida también como la “Tierra de la Uva y el Guarapo” y muy destacada ya que es en este municipio donde se encuentra el conjunto arqueológico Inkarraqay." /></a>
                  </li>
                  <li><a href="enlacemunicipios/tacachi.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/tacachi.png" alt="Tacachi" title="Tacachi" data-description="COPIA Es la Segunda Sección Municipal de la Provincia de Quillacollo, pertenece a la Región Metropolitana. Conocida también como la “Tierra de la Uva y el Guarapo” y muy destacada ya que es en este municipio donde se encuentra el conjunto arqueológico Inkarraqay." /></a>
                  </li>
                  <li><a href="enlacemunicipios/tacopaya.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/tacopaya.png" alt="Tacopaya" title="Tacopaya" data-description="El municipio en la Segunda Sección de la Provincia Arque, está ubicado en la Región Andina. Fue el primer municipio del país en promulgar su Carta Orgánica consolidando así su autonomía." /></a>
                  </li>
                  <li><a href="enlacemunicipios/tapacari.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/tapacari.png" alt="Tapacari" title="Tapacari" data-description="Es la Primera Sección Municipal de la provincia del mismo nombre, además de ser la única por tanto es también su capital. Corresponde a la Región Andina. El nombre de la provincia deriva del quechua “thapa” que significa nido, y “qhari” que significa hombre. Por ello la provincia es también conocida como “Nido de Hombres”." /></a>
                  </li>
                  <li><a href="enlacemunicipios/tarata.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/tarata.png" alt="Tarata" title="Tarata" data-description="Es la Primera Sección Municipal de la Provincia Esteban Arce, capital de provincia, que corresponde a la Región de los Valles. Es conocido y catalogado localmente como la cuna de Hombres Históricos de Bolivia." /></a>
                  </li>
                  <li><a href="enlacemunicipios/tiquipaya.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/tiquipaya.png" alt="Tiquipaya" title="Tiquipaya" data-description="Es la Tercera Sección Municipal de la Provincia Quillacollo, está situado en la Región Metropolitana. Es conocida como la “Capital de las Flores” por su inigualable belleza en cuanto a la producción de plantas ornamentales, y los inmensos viveros que se encuentran en el municipio. Es una zona ecológica, turística y productiva de diversidad climática propia de los valles, punas y subtrópicos que se mezclan con el cotidiano vivir de su gente" /></a>
                  </li>
                  <li><a href="enlacemunicipios/tiraque.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/tiraque.png" alt="Tiraque" title="Tiraque" data-description="Tiraque es la Primera Sección Municipal de la Provincia del mismo nombre, siendo su capital, pertenece a la Región del Cono Sur. Es conocida como la “Tierra del amor” por sus hermosos paisajes y atractivos que son el lugar ideal para los enamorados. Envueltos por la promesa del amor eterno, los turistas nacionales y extranjeros llegan hasta este hermoso municipio para beber de las aguas de la “Fuente del Amor”." /></a>
                  </li>
                  <li><a href="enlacemunicipios/toco.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/toko.png" alt="Toco" title="Toco" data-description="Toco es la Segunda Sección Municipal de la Provincia German Jordan, corresponde a la Región Valles. El pueblo de Toco es tan antiguo que, según la historia, el año 1576 después de la fundación de la capellanía del lugar por el primer Cura y Vicario de la Villa de Oropeza Dn. Antonio de Castro, dio origen a un poblado en esta región. A la cual se suma el nombre de la persona que se preocupó por su transformación y urbanización de este rincón del Valle en un pueblo atrayente" /></a>
                  </li>
                  <li><a href="enlacemunicipios/tolata.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/tolata.png" alt="Tolata" title="Tolata" data-description="Es la Tercera Sección Municipal de la Provincia Germán Jordán, pertenece a la Región Valles. Es conocida como la Capital Turística del Valle Alto por su potencial en este rubro ofreciendo actividades y paisajes para todos los gustos." /></a>
                  </li>
                  <li><a href="enlacemunicipios/totora.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/totora.png" alt="Totora" title="Totora" data-description="Es la Tercera Sección Municipal de la Provincia Germán Jordán, pertenece a la Región Valles. Es conocida como la Capital Turística del Valle Alto por su potencial en este rubro ofreciendo actividades y paisajes para todos los gustos." /></a>
                  </li>
                  <li><a href="enlacemunicipios/vacas.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/vacas.png" alt="Vacas" title="Vacas" data-description="s la Segunda Sección de la Provincia de Arani, pertenece a la Región del Cono Sur, es una de las poblaciones más antiguas del Valle Alto. Por las pampas de Vacas el patriota Esteban Arce habría pasado con sus hombres hacia Pocona lugar donde se llevó a cabo la batalla del Quehuiñal el 24 de mayo de 1812." /></a>
                  </li>
                  <li><a href="enlacemunicipios/vilaVila.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/vilavila.png" alt="Vila Vila" title="Vila Vila" /></a>
                  </li>
                  <li><a href="enlacemunicipios/vilaGvillaroel.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/vilaGvillaroel.png" alt="Villa G Villaroel" title="Villa G Villaroel" data-description="COPIA Es la Segunda Sección Municipal de la Provincia Mizque, pertenece a la Región del Cono Sur. Su nombre real es “Villa Eufronio Viscarra” en justo homenaje a un personaje destacado por ser un gran político e historiador de la Provincia." /></a>
                  </li>
                  <li><a href="enlacemunicipios/villaRivero.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/villaRivero.png" alt="Villa Rivero" title="Villa Rivero" data-description="Es la segunda Sección Municipal de la Provincia Punata. Corresponde a la Región Valles. Es mejor conocida como la “Cuna de Hombres Celebres”. El nombre como se conocía al municipio es como Muela y posteriormente se lo cambió como justo homenaje a la memoria del patriota Francisco del Rivero, compañero de armas de Esteban Arce" /></a>
                  </li>
                  <li><a href="enlacemunicipios/villaTunari.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/villatunari.png" alt="Villa Tunari" title="Villa Tunari" data-description="Es la Tercera Sección Municipal de la Provincia Chapare, corresponde a la Región del Trópico. Este municipio es conocido como la “Capital Turística del Departamento” por su potencialidad a la hora de ofrecer actividades y paisajes inolvidables." /></a>
                  </li>
                  <li><a href="enlacemunicipios/vinto.php" target="_blank"><img src="enlacemunicipios/sliderMapas/map/vinto.png" alt="Vinto" title="Vinto" data-description="Es la Cuarta Sección Municipal de la Provincia Quillacollo, es parte de la Región Metropolitana. Conocida como la “Gran Manzana de Bolivia” por su potencial en cuanto a producción de la variedad de manzana camuesa." /></a>
                  </li>
                </ul>
                <ul class="amazingslider-thumbnails" style="display:none;">
                  <li><img src="enlacemunicipios/sliderMapas/images/aiquile_escudo-tn.jpg" alt="Aiquile" title="Aiquile" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/alalay_escudo-tn.jpg" alt="Alalay" title="Alalay" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/anzaldo_escudo-tn.jpg" alt="Anzaldo" title="Anzaldo" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/arani_escudo-tn.jpg" alt="Arani" title="Arani" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/arbieto_escudo-tn.jpg" alt="Arbieto" title="Arbieto" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/arque_escudo-tn.jpg" alt="Arque" title="Arque" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/bolivar_escudo-tn.jpg" alt="Bolivar" title="Bolivar" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/capinota_escudo-tn.jpg" alt="Capinota" title="Capinota" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/cercado_escudo-tn.jpg" alt="Cercado" title="Cercado" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/chimore_escudo-tn.jpg" alt="Chimore" title="Chimore" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/cliza_escudo-tn.jpg" alt="Cliza" title="Cliza" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/cocapata_escudo-tn.jpg" alt="Cocapata" title="Cocapata" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/colcapirhua_escudo-tn.jpg" alt="Colcapirhua" title="Colcapirhua" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/colomi_escudo-tn.jpg" alt="Colomi" title="Colomi" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/entrerios_escudo-tn.jpg" alt="Entre Rios" title="Entre Rios" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/independencia_escudo-tn.jpg" alt="Independencia" title="Independencia" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/mizque_escudo-tn.jpg" alt="Mizque" title="Mizque" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/morochata_escudo-tn.jpg" alt="Morochata" title="Morochata" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/omereque_escudo-tn.jpg" alt="Omereque" title="Omereque" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/pasorapa_escudo-tn.jpg" alt="Pasorapa" title="Pasorapa" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/pocona_escudo-tn.jpg" alt="Pocono" title="Pocono" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/pojo_escudo-tn.jpg" alt="Pojo" title="Pojo" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/puerto_villarroel_escudo-tn.jpg" alt="Puero Villaroel" title="Puero Villaroel" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/punata_escudo-tn.jpg" alt="Punata" title="Punata" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/quillacollo_escudo-tn.jpg" alt="Quillacollo" title="Quillacollo" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/raqaypampa.jpg" alt="Raqaypampa" title="Raqaypampa" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/sacaba_escudo-tn.jpg" alt="Sacaba" title="Sacaba" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/sacabamba_escudo-tn.jpg" alt="Sacabamba" title="Sacabamba" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/sanbenito_escudo-tn.jpg" alt="San Benito" title="San Benito" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/santivanez_escudo-tn.jpg" alt="Santivañes" title="Santivañes" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/shinahota_escudo-tn.jpg" alt="Shinaota" title="Shinaota" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/sicaya_escudo-tn.jpg" alt="Sicaya" title="Sicaya" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/sipesipe_escudo-tn.jpg" alt="Sipe Sipe" title="Sipe Sipe" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/tacachi_escudo-tn.jpg" alt="Tacachi" title="Tacachi" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/tacopaya_escudo-tn.jpg" alt="Tacopaya" title="Tacopaya" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/tapacari_escudo-tn.jpg" alt="Tapacari" title="Tapacari" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/tarata_escudo-tn.jpg" alt="Tarata" title="Tarata" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/tiquipaya_escudo-tn.jpg" alt="Tiquipaya" title="Tiquipaya" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/tiraque_escudo-tn.jpg" alt="Tiraque" title="Tiraque" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/toco_escudo-tn.jpg" alt="Toco" title="Toco" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/tolata_escudo-tn.jpg" alt="Tolata" title="Tolata" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/totora_escudo-tn.jpg" alt="Totora" title="Totora" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/vacas_escudo-tn.jpg" alt="Vacas" title="Vacas" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/vilavila_escudo-tn.jpg" alt="Vila Vila" title="Vila Vila" data-description="copia la Cuarta Sección Municipal de la Provincia Quillacollo, es parte de la Región Metropolitana. Conocida como la “Gran Manzana de Bolivia” por su potencial en cuanto a producción de la variedad de manzana camuesa." /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/villa_g_villarroel_escudo-tn.jpg" alt="Villa G Villaroel" title="Villa G Villaroel" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/villa_rivero_escudo-tn.jpg" alt="Villa Rivero" title="Villa Rivero" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/villa_tunari_escudo-tn.jpg" alt="Villa Tunari" title="Villa Tunari" /></li>
                  <li><img src="enlacemunicipios/sliderMapas/images/vinto_escudo-tn.jpg" alt="Vinto" title="Vinto" /></li>
                </ul>
                <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Image Slider jQuery">Image Slider jQuery</a></div>
              </div>
            </div>


      </section>
      <!-- End of body section HTML codes -->




      <!-- SEARCH SHIELD-->
      <section>
        <div class="container hr well1 ins2">
          <div class="row">
            <div class="grid_1"></div>

            <div class="grid_10">
              <h5 style="text-decoration-color: red"> &nbsp; &nbsp;Buscar Municipio...</h5>
              <div id="wrap">
                <div class="product-head">

                  <div id="form"></div>

                  <div class="clear"></div>
                </div>
                <ul id="list">
                  <li class="hide"><a href="enlacemunicipios/aiquile.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/aiquile_escudo.jpg" width="50" height="50" align="absmiddle" />Aiquile</a></li>
                  <li class="hide"><a href=" enlacemunicipios/alalay.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/alalay_escudo.jpg" width="50" height="50" align="absmiddle" />Alalay</a></li>
                  <li class="hide"><a href=" enlacemunicipios/anzaldo.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/anzaldo_escudo.jpg" width="50" height="50" align="absmiddle" />Anzaldo</a></li>
                  <li class="hide"><a href=" enlacemunicipios/arani.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/arani_escudo.jpg" width="50" height="50" align="absmiddle" />Arani</a></li>
                  <li class="hide"><a href=" enlacemunicipios/arbierto.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/arbieto_escudo.jpg" width="50" height="50" align="absmiddle" />Arbieto</a></li>
                  <li class="hide"><a href=" enlacemunicipios/arque.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/arque_escudo.jpg" width="50" height="50" align="absmiddle" />Arque</a></li>
                  <li class="hide"><a href=" enlacemunicipios/bolivar.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/bolivar_escudo.jpg" width="50" height="50" align="absmiddle" />Bolivar</a></li>
                  <li class="hide"><a href=" enlacemunicipios/capinota.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/capinota_escudo.jpg" width="50" height="50" align="absmiddle" />Capinota</a></li>
                  <li class="hide"><a href="  enlacemunicipios/chimore.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/chimore_escudo.jpg" width="50" height="50" align="absmiddle" />Chimore</a></li>
                  <li class="hide"><a href=" enlacemunicipios/cliza.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/cliza_escudo.jpg" width="50" height="50" align="absmiddle" />Cliza</a></li>
                  <li class="hide"><a href=" enlacemunicipios/cocapata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/cocapata_escudo.jpg" width="50" height="50" align="absmiddle" />Cocapta</a></li>
                  <li class="hide"><a href=" enlacemunicipios/cochabamba.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/cochabamba.jpg" width="50" height="50" align="absmiddle" />Cochabamba</a></li>
                  <li class="hide"><a href=" enlacemunicipios/colcapirhua.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/colcapirhua_escudo.jpg" width="50" height="50" align="absmiddle" />Colcapirhua</a></li>
                  <li class="hide"><a href=" enlacemunicipios/colomi.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/colomi_escudo.jpg" width="50" height="50" align="absmiddle" />Colomi</a></li>
                  <li class="hide"><a href="   enlacemunicipios/independencia.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/independencia_escudo.jpg" width="50" height="50" align="absmiddle" />Independencia</a></li>
                  <li class="hide"><a href="   enlacemunicipios/mizque.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/mizque_escudo.jpg" width="50" height="50" align="absmiddle" />Mizque</a></li>
                  <li class="hide"><a href="   enlacemunicipios/morochata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/morochata_escudo.jpg" width="50" height="50" align="absmiddle" />Morochata</a></li>
                  <li class="hide"><a href="enlacemunicipios/omereque.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/omereque_escudo.jpg" width="50" height="50" align="absmiddle" />Omereque</a></li>
                  <li class="hide"><a href="  enlacemunicipios/pasorapa.php " target="_blank"><img src="enlacemunicipios/searchShield/escudos/pasorapa_escudo.jpg" width="50" height="50" align="absmiddle" />Pasorapa</a></li>
                  <li class="hide"><a href=" enlacemunicipios/pocona.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/pocona_escudo.jpg" width="50" height="50" align="absmiddle" />Pocona</a></li>
                  <li class="hide"><a href=" enlacemunicipios/pojo.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/pojo_escudo.jpg" width="50" height="50" align="absmiddle" />Pojo</a></li>
                  <li class="hide"><a href=" enlacemunicipios/puertoVillaroel.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/puerto_villarroel_escudo.jpg" width="50" height="50" align="absmiddle" />Puerto Villaroel</a></li>
                  <li class="hide"><a href=" enlacemunicipios/punata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/punata_escudo.jpg" width="50" height="50" align="absmiddle" />Punata</a></li>
                  <li class="hide"><a href=" enlacemunicipios/quillacollo.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/quillacollo_escudo.jpg" width="50" height="50" align="absmiddle" />Quillacollo</a></li>
                  <li class="hide"><a href=" enlacemunicipios/raqaypampa.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/raqaypampa.jpg" width="50" height="50" align="absmiddle" />Raqaypampa</a></li>
                  <li class="hide"><a href=" enlacemunicipios/sacaba.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sacaba_escudo.jpg" width="50" height="50" align="absmiddle" />Sacaba</a></li>
                  <li class="hide"><a href=" enlacemunicipios/sacabamba.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sacabamba_escudo.jpg" width="50" height="50" align="absmiddle" />Sacabamba</a></li>
                  <li class="hide"><a href=" enlacemunicipios/sanBenito.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sanbenito_escudo.jpg" width="50" height="50" align="absmiddle" />San Benito</a></li>
                  <li class="hide"><a href=" enlacemunicipios/santivanes.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/santivanez_escudo.jpg" width="50" height="50" align="absmiddle" />Santivañes</a></li>
                  <li class="hide"><a href=" enlacemunicipios/shinaota.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/shinahota_escudo.jpg" width="50" height="50" align="absmiddle" />Shinaota</a></li>
                  <li class="hide"><a href=" enlacemunicipios/sicaya.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sicaya_escudo.jpg" width="50" height="50" align="absmiddle" />Sicaya</a></li>
                  <li class="hide"><a href=" enlacemunicipios/sipeSipe.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/sipesipe_escudo.jpg" width="50" height="50" align="absmiddle" />Sipe Sipe</a></li>
                  <li class="hide"><a href=" enlacemunicipios/tacachi.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tacachi_escudo.jpg" width="50" height="50" align="absmiddle" />Tacachi</a></li>
                  <li class="hide"><a href=" enlacemunicipios/tacopaya.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tacopaya_escudo.jpg" width="50" height="50" align="absmiddle" />Tacopaya</a></li>
                  <li class="hide"><a href=" enlacemunicipios/tapacari.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tapacari_escudo.jpg" width="50" height="50" align="absmiddle" />Tapacari</a></li>
                  <li class="hide"><a href=" enlacemunicipios/tarata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tarata_escudo.jpg" width="50" height="50" align="absmiddle" />Tarata</a></li>
                  <li class="hide"><a href=" enlacemunicipios/tiquipaya.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tiquipaya_escudo.jpg" width="50" height="50" align="absmiddle" />Tiquipaya</a></li>
                  <li class="hide"><a href=" enlacemunicipios/tiraque.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tiraque_escudo.jpg" width="50" height="50" align="absmiddle" />Tiraque</a></li>
                  <li class="hide"><a href=" enlacemunicipios/toco.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/toco_escudo.jpg" width="50" height="50" align="absmiddle" />Toko</a></li>
                  <li class="hide"><a href=" enlacemunicipios/tolata.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/tolata_escudo.jpg" width="50" height="50" align="absmiddle" />Tolata</a></li>
                  <li class="hide"><a href=" enlacemunicipios/totora.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/totora_escudo.jpg" width="50" height="50" align="absmiddle" />Totora</a></li>
                  <li class="hide"><a href=" enlacemunicipios/vacas.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/vacas_escudo.jpg" width="50" height="50" align="absmiddle" />Vacas</a></li>
                  <li class="hide"><a href=" enlacemunicipios/vilaVila.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/vilavila_escudo.jpg" width="50" height="50" align="absmiddle" />Vila Vila</a></li>
                  <li class="hide"><a href=" enlacemunicipios/vilaGvillaroel.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/villa_g_villarroel_escudo.jpg" width="50" height="50" align="absmiddle" />Villa Villaroel</a></li>
                  <li class="hide"><a href="  enlacemunicipios/villaRivero.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/villa_rivero_escudo.jpg" width="50" height="50" align="absmiddle" />Villa Rivero</a></li>
                  <li class="hide"><a href=" enlacemunicipios/villaTunari.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/villa_tunari_escudo.jpg" width="50" height="50" align="absmiddle" />Villa Tunari</a></li>
                  <li class="hide"><a href=" enlacemunicipios/vinto.php" target="_blank"><img src="enlacemunicipios/searchShield/escudos/vinto_escudo.jpg" width="50" height="50" align="absmiddle" />Vinto</a></li>
                </ul>
                <script src="enlacemunicipios/searchShield/js/jquery.js"></script>
              </div>
            </div>

      </section>
      <!-- END SEARCH SHIELD-->
    </main>
    <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <?php
  // FOOTER
  include './include/footer.php';
  ?>
  </div>
  <script src="js/common.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="./js/jquery.min.js"></script>

  
</body>

</html>