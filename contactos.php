<!DOCTYPE html>
<html lang="es">

<head>
  <title>Amdeco-Contactos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="Contactos/css/google-map.css">
  <link rel="stylesheet" href="Contactos/css/mailform.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>
  <script src="js/device.min.js"></script>

  <style>
    .inherit-size>* {
      height: inherit;
    }
  </style>
</head>

<body>
  <header>
    <?php include './include/header.php'; ?>
  </header>
  <main>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h2>
              <p class="text-primary"> <strong>Nuestra Ubicacion </strong></p>
            </h2><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1903.9216117496762!2d-66.13916497705121!3d-17.371275369231157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e376a128b004c1%3A0x3faa8f545e8bb89f!2sAMDECO!5e0!3m2!1ses!2sbo!4v1542343030261" width="450px" height="400px" style="border:0" allowfullscreen></iframe>
            <!--img src="images/mapaamdeco.jpg" alt=""-->
          </div>
          <div class="col-sm-4">
            <fieldset class="container">
              <legend align="rigth">
                <font color="red">
                  <h2>
                    <p class="text-primary"> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contáctese Con Nosotros </strong></p>
                  </h2>
                </font>
              </legend>
              <div class="container-fluid sm-light">
                <form id="contact-form" method="GET" action="Contactos/cinsert.php" role="form">
                  <div class="messages"></div>
                  <div class="controls">
                    <div class="form-group inherit-size">
                      <label for="form_name">Nombre</label>
                      <input id="form_name" type="text" name="name" style="width:inherit;height:40px; font-size: 10pt;" class="form-control" placeholder="Por favor, escriba su nombre*" required="required" data-error="name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="form_email">Correo</label>
                      <input id="form_email" type="email" name="email" style="width:inherit;height:40px; font-size: 10pt;" class="form-control" placeholder="Por favor, escriba su  email *" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="form_phone">Telefono</label>
                      <input id="form_phone" type="tel" name="phone" style="width:inherit;height:40px; font-size: 10pt;" class="form-control" placeholder="Por favor, escriba su numero telefonico o celular *">
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
  <script src="js/script.js"></script>
</body>

</html>