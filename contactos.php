<!DOCTYPE html>
<html lang="es">

<head>
  <title>Amdeco-Contactos</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="Contactos/css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="Contactos/css/google-map.css">
  <link rel="stylesheet" href="Contactos/css/mailform.css">


  <link rel="stylesheet" href="Contactos/css/bootstrap.css">
  <link rel="stylesheet" href="Contactos/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>
  <script src="js/device.min.js"></script>
</head>

<body>
  <div class="page">
    <header>
      <?php include './include/header.php'; ?>
    </header>
    <main>
      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h2>
                <p class="text-primary"> <strong>Nuestra Ubicacion </strong></p>
              </h2><br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1903.9216117496762!2d-66.13916497705121!3d-17.371275369231157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e376a128b004c1%3A0x3faa8f545e8bb89f!2sAMDECO!5e0!3m2!1ses!2sbo!4v1542343030261" width="500" height="520" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!--img src="images/mapaamdeco.jpg" alt=""-->
            </div>
            <div class="col-sm-6">
              <fieldset>
                <legend align="rigth">
                  <font color="red">
                    <h2>
                      <p class="text-primary"> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contáctese Con Nosotros </strong></p>
                    </h2>
                  </font>
                </legend>
                <div class="container-fluid sm-light py-5">
                  <form id="contact-form" method="GET" action="Contactos/cinsert.php" role="form">
                    <div class="messages"></div>
                    <div class="controls">

                      <div class="form-group">
                        <label for="form_name">Nombre</label>
                        <input id="form_name" type="text" name="name" style="width:400px;height:40px; font-size: 10pt;" class="form-control" placeholder="Por favor, escriba su nombre*" required="required" data-error="name is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <label for="form_email">Correo</label>
                        <input id="form_email" type="email" name="email" style="width:400px;height:40px; font-size: 10pt;" class="form-control" placeholder="Por favor, escriba su  email *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <label for="form_phone">Telefono</label>
                        <input id="form_phone" type="tel" name="phone" style="width:400px;height:40px; font-size: 10pt;" class="form-control" placeholder="Por favor, escriba su numero telefonico o celular *">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="form_message">Asunto </label>
                      <textarea id="form_message" name="message" style="font-size: 10pt;" class="form-control" placeholder="Mensaje para mi *" rows="4" required="required" data-error="send a message."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-send" value="Enviar">
                  </div>
                </div>
                </form>
              </fieldset>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <?php include './include/footer.php'; ?>
    </footer>
    <script src="js/common.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="./js/jquery.min.js"></script>
  </div>
  <script src="js/script.js"></script>
</body>

</html>