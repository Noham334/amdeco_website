<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bienvenido</title>
  <meta charset="UTF-8">
  <link rel="icon" href="\amdeco_website\enlacesacercade\login\frontend\images\deco.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu .dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -1px;
    }
  </style>
  <!--===============================================================================================-->

  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->


  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
</head>

<body>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Bienvenido
          </span>
        </div>

        <div class="container">
          <br>
          <h1 class='text-info'>Se conecto como <strong>Administrador</strong> </h1> <br>


          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Eliga Una Opción
              <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="../../inicio/admin/">Inicio</a></li>
              <li><a tabindex="-1" href="../../enlacesacercade/admin/bannerlist.php">Autoridades</a></li>
              <li><a tabindex="-1" href="../../eventos/index2.php">Eventos</a></li>
              <li><a tabindex="-1" href="../../Contactos/reportes.php">Contactos</a></li>
              <li><a tabindex="-1" href="../../noticias/admin/bannerlist.php">Noticias</a></li>
              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">Publicaciones <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="../../publicaciones/phpLibros/phplibros.php">Libros</a></li>
                  <li><a tabindex="-1" href="../../publicaciones/phpfolletos/phpfolletos.php">Folletos</a></li>
                  <li><a tabindex="-1" href="../../publicaciones/phpLeyes/phpleyes.php">Leyes</a></li>
                  <li><a tabindex="-1" href="../../publicaciones/phpMunicipios/phpmunicipios.php">Municipios</a></li>
                  <li><a tabindex="-1" href="../../publicaciones/phpAmdeco/amdeco.php">Amdeco</a></li>
                  <li><a tabindex="-1" href="../../publicaciones/phpVarios/phpvarios.php">Otros</a></li>

                </ul>
              </li>
              <li><a tabindex="-1" href="../../registros_personal/personal.list.php">Registro de personal</a></li>
            </ul>
          </div>

        </div>

        <br><br><br><br><br><br><br>
        <div class="text-right" style="margin-right: 5%;">
          <center><a class="btn btn-danger" href="cerrar.php" role="button">Cerrar sesion</a> </center>
        </div>



        <br><br><br><br><br><br>

        <script>
          $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
              $(this).next('ul').toggle();
              e.stopPropagation();
              e.preventDefault();
            });
          });
        </script>
      </div>
    </div>
  </div>


  <script src="js/main.js"></script>


</body>

</html>