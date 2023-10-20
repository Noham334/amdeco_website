<?php
$mensaje = "";
$results = "";
include("registros_personal/php/conexion.php");
include "registros_personal/php/personal.php";
/*Buscar al paciente por CI */
if (isset($_POST['search_ci']) && isset($_POST['input_search_ci'])) {
    $results = personal::search_ci($_POST['input_search_ci']);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Amdeco - Registros</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/deco.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mailform.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="assets/js/device.min.js"></script>
</head>

<body>
    <header>
        <?php include './include/header.php'; ?>
    </header>
    <main>
        <div class='container'>
            <div class="row ">
                <div class="col-md-12 d-flex flex-column align-items-center justify-content-center">
                    <h2 class="page-header text-center my-3"> REGISTRO DE PERSONAL DE AMDECO</h2>
                    <div class="col-md-8 img-thumbnail p-5">
                        <h6 class="text-center mb-5">Buscar por Numero de CI:</h6>
                        <div class="row">
                            <form class="d-flex justify-content-around align-items-center" action="registros.php" method="post">
                                <div class="col-md-5">
                                    <input type="number" style="padding: 0 0 0 5%; width:100%;" name="input_search_ci" class="form-control" placeholder="Ingrese el CI a buscar">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" name="search_ci" style="background-color:#62bfe6; border:none; padding:4px 6px;color:white;border-radius:5px;">Buscar persona</button>
                                </div>
                            </form>
                        </div><br>
                    </div>
                    <!--Pacientes encontrados-->
                    <div class="col-md-12">
                        <ul class="list-group">
                            <li>
                                <?php if (!empty($results)) : ?>
                                    <h6 class="text-dark">Personas encontradas <?php if (!empty($results)) : echo '('; ?><?= $longitud = count($results);
                                                                                                                            echo ')';
                                                                                                                        endif; ?></h6>
                                    <ul class="list-group" style="list-style-type   : none; padding:2% 0 5% 0;">
                                        <?php $longitud = count($results);
                                        for ($i = 0; $i < $longitud; $i++) : ?>
                                            <li style="list-style-type   : none; padding:2% 0 5% 0;">
                                                <div class="col-md-4">
                                                    <p><?= $results[$i]['nombre'] ?> </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p><?= $results[$i]['ci'] ?> </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="registro_person.php?idPersonalShow=<?= $results[$i]['id_personal'] ?>" style="background-color:green; padding:10px;color:white;border-radius:5px;">Ver datos</a>
                                                </div>
                                            </li>
                                        <?php endfor;
                                    else : ?>
                                        <li class="pt-2 row">
                                            <div class="col-md-12">
                                                <p style="padding:0  2%">Ningun dato encontrado</p>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
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
    <footer>
        <?php include './include/footer.php'; ?>
    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>