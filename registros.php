<?php 
 $mensaje=""; 
 $results="";
 include("registros_personal/php/conexion.php");
 include "registros_personal/php/personal.php";
 /*Buscar al paciente por CI */
 if(isset($_POST['search_ci']) && isset($_POST['input_search_ci'])){
    $results= personal::search_ci($_POST['input_search_ci']);
}

?>

<!DOCTYPE php>
<php lang="en">
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
        <?php include './include/header.php';?>
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
				<h1 class="page-header text-center"> Registro del personal de AMDECO</h1>
                <div class="col-md-12">
                    <h6>Buscar por nº de CI:</h6>
                    <div class="row">
                        <form action="registros.php" method="post">
                        <div class="col-md-9">
                            <input type="number" style="padding: 0 0 0 5%; width:100%;" name="input_search_ci" class="form-control" placeholder="Ingrese el CI a buscar">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" name="search_ci" style="background-color:#62bfe6; padding:2px 6px;color:white;border-radius:5px;">Buscar persona</button>
                        </div>
                        </form>
                    </div><br>
                </div> 
                <!--Pacientes encontrados-->
                <div class="col-md-12">
                    <ul class="list-group">
                        <li>
                            <?php if(!empty($results)): ?>
                                <h6 class="text-dark">Personas encontradas <?php if(!empty($results)): echo '(';?><?= $longitud = count($results);echo ')'; endif;?></h6>
                                <ul class="list-group" style="list-style: none; padding:2% 0 5% 0;">
                                <?php $longitud = count($results); for($i=0; $i<$longitud; $i++):?>
                                <li >
                                    <div class="col-md-4">
                                        <p><?= $results[$i]['nombre']?> </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><?= $results[$i]['ci']?> </p>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="registro_person.php?idPersonalShow=<?= $results[$i]['id_personal']?>"  style="background-color:green; padding:10px;color:white;border-radius:5px;">Ver datos</a>
                                    </div>
                                </li>
                            <?php endfor; else:?>
                                <li class="pt-2 row">
                                    <div class="col-md-12">
                                        <p style="padding:0  2%">Ningun dato encontrado</p>
                                    </div>
                                </li>
                            <?php endif;?>
                            </ul>
                        </li>
                    </ul>
                </div>

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
	$(document).ready(function(){
    loadGallery(true, 'a.thumbnail');
    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }
    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
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

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
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
        <?php include './include/footer.php';?>
      </footer>
    </div>
    <script src="js/script.js"></script>
  </body>
</php>
