<?php
$mensaje = "";
$results = "";
include("registros_personal/php/conexion.php");
include "registros_personal/php/personal.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Amdeco - Registros</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/deco.ico" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <div class='container'>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header text-center"> LISTA DE PERSONAL</h2>
                        <!--personas-->
                        <table class="table caption-top">
                            <caption class="bg-primary" style="padding: 2px 2px 2px 10px;color:white;">Lista del personal</caption>
                            <thead>
                                <tr>
                                    <th scope="col"><strong> Nombre</strong></th>
                                    <th scope="col"><strong> Fecha de inicio</strong></th>
                                    <th scope="col"><strong> Fecha de finalización</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT CONCAT(nombre, ' ' ,apellido_p, ' ' ,apellido_m) nombre, fecha_ini, fecha_fin FROM personal";
                                $resultado = mysqli_query($conn, $sql);
                                while ($datos = mysqli_fetch_assoc($resultado)) :
                                ?>
                                    <th><?= $datos['nombre'] ?></th>
                                    <td><?= $datos['fecha_ini'] ?></td>
                                    <td><?= $datos['fecha_fin'] ?></td>
                            </tbody>
                        <?php endwhile; ?>
                        </table>
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
        <script src="js/common.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="./js/jquery.min.js"></script>
    </footer>
    </div>
    <script src="js/script.js"></script>
</body>

</html>