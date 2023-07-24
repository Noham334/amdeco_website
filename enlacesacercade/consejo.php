<!DOCTYPE php>
<php lang="en">

  <head>
    <title>Consejo Directivo</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script><!--[if lt IE 9]>
    <php class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </php>
    <script src="js/php5shiv.js"></script><![endif]-->
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
        <?php include './include/header.php'; ?>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 primero">
            <center>
              <Div id="organigrama" name="organigrama" class="organigrama">
                <div id="popup">
                  <ul id="ul1" name="ul1">
                    <li>
                      <a href="#"><label>CONSEJO DIRECTIVO DE AMDECO</label></a>
                      <ul>
                        <li>
                          <a>Presidente AMDECO<br><img src="consejo/Daniel_vallejo.jpeg " alt="Little Egret"><br><label> Ing. Daniel Vallejo Vargas </label></span></a>

                          <ul>
                            <li>
                              <a>Vice-Presidente de AMDECO<br><img src="consejo/Florencio_alarcon1.jpeg" alt="Little Egret"><br><label>Florencio Alarcón Caero. </label></span></a>

                              <ul>
                                <li>

                                  <a>Secretario de Desarrollo Publico Integral<br><img src="consejo/Felix_galarza1.jpeg" alt="Little Egret"><br><label>Félix Mario Galarza Ala.</label></span></a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a>Secretario General<br><img src="consejo/Segundina_orellana.jpeg" alt="Little Egret"><br><label>Segundina Orellana Paniagua.</label></span></a>
                              <ul>
                                <li>

                                  <a>Secretaria de Desarrollo Legislativo<br><img src="consejo/" alt="Little Egret"><br><label></label></span></a>
                                </li>
                              </ul>
                            </li>
                            <li>

                              <a> Secretario de Desarrollo Institucional<br>Administrativo y Financiero<br><img src="consejo/Ramiro_mamani.jpeg " alt="Little Egret"><br><label>Ramiro Mamani Escalera.</label></span></a>
                              <ul>
                                <li>

                                  <a>Secretaria de Genero y Derechos Humanos<br><img src="consejo/Gregoria_hinojosa.jpeg " alt="Little Egret"><br><label>Gregoria Hinojosa Choque </label></span></a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </center>
          </div>
        </div>
      </div>
      <section class="well1 ins3">
        <div class="container">
          <center>
            <ul>
              <h3>Función Estratégica del Consejo Directivo</h3>
            </ul>
          </center>
          <li>La función estratégica del Consejo Directivo consistirá en la toma de decisiones resolutivas para el apoyo al fortalecimiento de las capacidades de gestión de los Gobiernos Autónomos Municipales y especialmente para la representación de los intereses comunes de la autonomía municipal, debiendo además ser los titulares de la representación política ante las instancias de gobierno departamental y central del Estado, así como de otras instancia públicas y privadas nacionales e internacionales, a los que el equipo técnico correspondiente podrá acompañar, para su asesoramiento.

            Así mismo, el Consejo Directivo es la responsable de la gestión de todos los objetivos institucionales y los objetivos del presente plan estratégico, siendo la estructura técnica simplemente un apoyo en la implementación de las tareas asignadas por la Asamblea de Gobiernos Autónomos Municipales a los miembros del Consejo Directivo. Por lo mismo, quienes realizan el informe ante la Asamblea son la Presidencia de manera general y las Comisiones en las temáticas correspondientes
            .</li>
        </div>
        <style>
          div {
            text-align: justify;
            text-justify: inter-word
          }
        </style>
      </section>


      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <?php include './include/footer.php'; ?>
    </div>
    <script src="js/script.js"></script>
    <style>
      .organigrama * {
        margin: 0px;
        padding: 0px;
      }

      .organigrama ul {
        padding-top: 20px;
        position: relative;
      }

      .organigrama li {
        float: left;
        text-align: center;
        list-style-type: none;
        padding: 20px 5px 0px 5px;
        position: relative;
      }

      .organigrama li::before,
      .organigrama li::after {
        content: '';
        position: absolute;
        top: 0px;
        right: 50%;
        border-top: 1px solid #27629b;
        width: 50%;
        height: 20px;
      }

      .organigrama li::after {
        right: auto;
        left: 50%;
        border-left: 1px solid #27629b;
      }

      .organigrama li:only-child::before,
      .organigrama li:only-child::after {
        display: none;
      }

      .organigrama li:only-child {
        padding-top: 0;
      }

      .organigrama li:first-child::before,
      .organigrama li:last-child::after {
        border: 0 none;
      }

      .organigrama li:last-child::before {
        border-right: 1px solid #27629b;
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
        border-radius: 0 5px 0 0;
      }

      .organigrama li:first-child::after {
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
      }

      .organigrama ul ul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        border-left: 1px solid #27629b;
        width: 0;
        height: 20px;
      }

      .organigrama li a {
        border: 1px solid #27629b;
        font-weight: bold;
        padding: 1em 0.75em;
        text-decoration: none;
        color: #333;
        background-color: rgba(255, 255, 255, 0.5);
        font-family: arial, verdana, tahoma;
        font-size: 0.85em;
        display: inline-block;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-transition: all 500ms;
        -moz-transition: all 500ms;
        transition: all 500ms;
      }

      .organigrama li a:hover {
        border: 1px solid #fff;
        color: #ddd;
        background-color: rgba(39, 98, 155, 0.7);
        display: inline-block;
      }

      .organigrama>ul>li>a {
        font-size: 1em;
        font-weight: bold;
      }

      .organigrama>ul>li>ul>li>a {
        width: 15%;
      }

      .organigrama li {
        float: left;
        text-align: center;
        list-style-type: none;
        padding: 20px 5px 0px 5px;
        position: relative;
      }
    </style>

  </body>
</php>