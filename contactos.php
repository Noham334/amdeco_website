<!DOCTYPE html>
<html lang="es">

<head>
  <title>Amdeco-Contactos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="images/deco.ico" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="Contactos/css/google-map.css">
  <link rel="stylesheet" href="Contactos/css/mailform.css">
  <script src="js/device.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
    <section class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column align-items-center">
            <h3 class="">NUESTRA UBICACION</h3>
            <iframe style="border-radius: 1rem;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1903.9216117496762!2d-66.13916497705121!3d-17.371275369231157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e376a128b004c1%3A0x3faa8f545e8bb89f!2sAMDECO!5e0!3m2!1ses!2sbo!4v1542343030261" width="450px" height="390px" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6 d-flex flex-column align-items-center">
            <h3 class="">CONTACTESE CON NOSOTROS</h3>
            <form class="form w-100" id="contact-form" method="GET" action="Contactos/cinsert.php" role="form">
              <div class="messages"></div>
              <div class="form-group col-12">
                <label class="my-2" for="form_name">Nombre</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Por favor, escriba su nombre" required="required" data-error="name is required.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="row">
                <div class="col-8">
                  <label for="form_email">Correo</label>
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Por favor, escriba su correo electronico" required="required" data-error="Correo válido requerido.">
                  <div class="help-block with-errors"></div>
                </div>
                <div class=" col-4">
                  <label for="form_phone">Telefono</label>
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="N° de telefono">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label class="my-2" for="form_message">Asunto</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Escriba su mensaje" rows="4" required="required" data-error="send a message."></textarea>
                <div class="help-block with-errors"></div>
                <input type="submit" class="mt-2 btn btn-primary btn-send" value="Enviar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer>
    <?php include './include/footer.php'; ?>
  </footer>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>