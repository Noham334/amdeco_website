<?php
$mensaje = "";
$results = "";
$actividades = "";
include("registros_personal/php/conexion.php");
include "registros_personal/php/personal.php";
/*Buscar al paciente por CI */
if (!empty($_GET['idPersonalShow'])) {
    $results = personal::generate_pdf($_GET['idPersonalShow']);
}

?>

<!DOCTYPE php>
<html lang="en">

<head>
    <title>Amdeco - Registros</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/deco.ico" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/google-map.css">
    <link rel="stylesheet" href="css/mailform.css">
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

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header text-center"> Registro de contrato</h1>

                        <?php if (!empty($results)) : ?>
                            <div class="container" style="background-color: #f8f9fa; padding:1%;">
                                <div class="col-md-6" style="padding-left: 10%;">
                                    <h6><strong> Nombre completo: </strong></h6>
                                    <p><?= $results['nombre'] . " " . isset($results['apellido_p']) . " " . isset($results['apellido_m']) ?></p>
                                </div>
                                <div class="col-md-6" style="padding-left: 10%;">
                                    <h6><strong>CI: </strong> </h6>
                                    <p><?= $results['ci'] ?></p>
                                </div>
                                <div class="col-md-6" style="padding-left: 10%;">
                                    <h6><strong> Fecha de inicio: </strong></h6>
                                    <p><?= $results['fecha_ini'] ?></p>
                                </div>
                                <div class="col-md-6" style="padding-left: 10%;">
                                    <h6><strong>Fecha de finalizacion: </strong> </h6>
                                    <p><?= $results['fecha_fin'] ?></p>
                                </div>

                            <?php else : ?>
                                <div class="col-md-6">
                                    <h6>No se encontraron datos</h6>
                                </div>
                            </div>
                            <hr>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            loadGallery(true, 'a.thumbnail');
            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image').show();
                if (counter_max == counter_current) {
                    $('#show-next-image').hide();
                } else if (counter_current == 1) {
                    $('#show-previous-image').hide();
                }
            }
            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
                var current_image,
                    selector,
                    counter = 0;

                $('#show-next-image, #show-previous-image').click(function() {
                    if ($(this).attr('id') == 'show-previous-image') {
                        current_image--;
                    } else {
                        current_image++;
                    }

                    selector = $('[data-image-id="' + current_image + '"]');
                    updateGallery(selector);
                });

                function updateGallery(selector) {
                    var $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-caption').text($sel.data('caption'));
                    $('#image-gallery-title').text($sel.data('title'));
                    $('#image-gallery-image').attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if (setIDs == true) {
                    $('[data-image-id]').each(function() {
                        counter++;
                        $(this).attr('data-image-id', counter);
                    });
                }
                $(setClickAttr).on('click', function() {
                    updateGallery($(this));
                });
            }
        });
    </script>
    </main>
    <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
    <footer>
        <?php include './include/footer.php'; ?>
    </footer>
    </div>
    <script src="js/script.js"></script>
</body>

</html>