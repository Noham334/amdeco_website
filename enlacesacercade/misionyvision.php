<!DOCTYPE php>
<php lang="en">
  <head>
    <title>Misión y visión</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/deco.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/device.min.js"></script>
  </head>
  <body>
    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
       <header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><img src="../images/logoamdeco.jpg"><a href="./"></a></h1>
            <p class="brand_slogan"></p>
        </div>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li><a href="..\index.php">Inicio</a></li>
                <li><a href="..\acercade.php">Acerca de</a>
                  <ul>
                      <li><a href="..\enlacesacercade\quienessomos.php" >Quienes somos</a></li>
                      <li><a href="..\enlacesacercade\misionyvision.php" >Misión y Visión</a></li>
                      <li><a href="..\enlacesacercade\organigrama.php" >Organigrama</a></li>
                      <li><a href="..\enlacesacercade\consejo.php">Consejo directivo</a></li>
                      <li><a href="..\enlacesacercade\autoridades.php">Autoridades</a></li>
                  </ul>
                </li>
                <li><a href="municipios.php">Municipios</a></li>
                <li><a href="publicaciones.php">Publicaciones</a>
				          <ul>
                    <li><a href="..\publicaciones\libros.php" target="_parent"><img src="..\publicaciones/iconos/Libros.png" alt="">Libros</a><li>
                    <li><a href="..\publicaciones\folletos.php" target="_parent"><img src="..\publicaciones/iconos/folletos.png" alt="">Folletos</a><li>
                    <li><a href="..\publicaciones\leyes.php" target="_parent"><img src="..\publicaciones/iconos/leyes.png" alt="">Leyes</a><li>
                    <li><a href="..\publicaciones\municipios.php" target="_parent"><img src="..\publicaciones/iconos/municipios.png" alt="">Municipios</a><li>
                    <li><a href="..\publicaciones\amdeco.php" target="_parent"><img src="..\publicaciones/iconos/amdeco.png" alt="">Amdeco</a><li>
                    <li><a href="..\publicaciones\otros.php" target="_parent"><img src="..\publicaciones/iconos/varios.png" alt="">Otros</a><li>
                  </ul>
                </li>
                <li><a href="..\noticias.php">Noticias</a></li>
                <li><a href="..\contactos.php">Contactos</a></li>
                <li><a href="#">Registros</a>
                  <ul>
                    <li><a href="..\registros.php" target="_parent"><img src="..\publicaciones/iconos/buscar.png" alt="" width="30px">Buscar</a><li>
                    <li><a href="..\registros_lista.php" target="_parent"><img src="..\publicaciones/iconos/lista.png" alt="" width="30px">Lista</a><li>
                  </ul>
                </li>
                <li><a href="login/login.php"></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main class="mobile-center">
        <section>
          <div class="container hr well1 ins2">
            <div class="row">
              <div class="grid_6">
              <img src="images\casa_amdeco.jpeg" width="520" height="500">
                <!--div class="video">
                  <iframe src="#" allowfullscreen></iframe>
                </div>-->
              </div>
              <div class="grid_6">
                <h2><strong>Lo que logramos ser:</strong></h2>
                <div class="row">
                  
                  <div class="grid_3">
                    <dl class="info">
                      <dt><h4><strong>Visión</strong></h4></dt>
                      <dd>
                        <div><p>AMDECO al 2018 es una entidad con institucionalidad y sostenibilidad técnica, legal y financiera, que se encuentra a la vanguardia del fortalecimiento institucional y defensa de los intereses comunes de la autonomía municipal en Bolivia.</p></div>
                      </dd>
                    </dl>
                  </div>
                  <div class="grid_3">
                    <dl class="info">
                      <dt><h4><strong>Misión</strong></h4></dt>
                      <dd>
                        <div><p>Representar los intereses de los Gobiernos Autónomos Municipales del Departamento de Cochabamba y fortalecersus capacidades de gestión municipal para el desarrollo local y de su Autonomía.</p></div>
                      </dd>
                    </dl>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <style>
          div
              {
                    text-align: justify;
                    text-justify: inter-word
              }
          </style>
        </section>
        
        
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
     <footer>
        <?php include './include/footer.php';?>
      </footer>
    </div>
    <script src="js/script.js"></script>
  </body>
</php>