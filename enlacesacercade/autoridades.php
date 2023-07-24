<?php 
include("conexion.php");
?>
<!DOCTYPE php>
<html lang="en">
  <head>
    <title>Autoridades</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Galería de imágenes con Bootstrap, PHP y MySQL</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/deco.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script src="js/jquery.js"></script>
    
    
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
      
      <main class="mobile-center">
          <style>
              div
              {
                    text-align: justify;
                    text-justify: inter-word
              }
              </style>
        <section>
            <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    
                    <br>
                      <h2>Nuestras autoridades municipales de Cochabamba</h2>
                      <br>
                      <div>
                  <p>Son 47 Gobiernos Autónomos Municipales del Departamento de Cochabamba, mismos que están representados por sus alcaldes o alcaldesas y sus concejales y concejalas.</p>
                            <p>El sistema de representación de la AMDECO parte de la consideración de que la población de cada una de las unidades territoriales municipales del Departamento de Cochabamba está políticamente representada por sus respectivos Gobiernos Autónomos Municipales, máxima forma de representación del actual sistema democrático establecido por la Constitución Política del Estado. La AMDECO representa a cada uno de esos Gobiernos Autónomos Municipales, por lo que se constituye a su vez en la representación política de las autonomías municipales del Departamento.</p>
                
                  </div>
                  <div class="col-sm-6">
                    
                  </div>
                  
                </div>
            
          <div>
          <div class="container hr well1 ins2">
              <div><img src="images\reunion1.jpeg" width="520" height="500"></div>
            </div>
                </div>
                <div class="grid_6">
              
                
          </div>
        </div>
        </section>
        
        <div class='container'>
		<div class="row">
			<div class="col-lg-12">
        <center><h1 class="page-header">Alcaldes Municipales del Departamento de Cochabamba</h1></center>
				
			<?php
				$nums=1;
				$sql_banner_top=mysqli_query($con,"select * from alcaldes where estado=1 order by orden ");
				while($rw_banner_top=mysqli_fetch_array($sql_banner_top)){
					?>
					
          <div class="col-lg-3 col-md-4 col-xs-6 thumb" style='width:150px; height:150px'>
          
						<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $rw_banner_top['titulo'];?>" data-caption="<?php echo $rw_banner_top['descripcion'];	?>" data-image="img/banner/<?php echo $rw_banner_top['url_image'];?>" data-target="#image-gallery">
							<img class="img-responsive" src="img/banner/<?php echo $rw_banner_top['url_image'];?>" alt="Another alt text" style='width:100px; height:100px'>
              <center><p><?php echo $rw_banner_top['titulo'];?></p></center>
              
            </a>
            
					</div>
					<?php
          
					if ($nums%60==0){
						echo '<div class="clearfix"></div>';
					}
					$nums++;
				}
			?>
						
			</div>
		</div>
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
            <img id="image-gallery-image" class="img-responsive" src="" width="200" height="200" align="left">
            </div>
            <div class="modal-footer">
            <div class="col-md-6 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>
           

                <div class="col-md-6">
                  <br>
                    <button type="button" class="btn btn-info" id="show-previous-image">Anterior</button>
                    <button type="button" id="show-next-image" class="btn btn-info">Siguiente</button>
                   
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
      <br>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
  <footer>
          <div class="bar">
            <div class="bar-wrap">
             <br>

                <div class="social">
                    <a href="#" class="fb">
                        <span data-icon="f" class="icon"></span>
                        <span class="info">
                            <span class="follow">Seguir en facebook</span>
                         
                        </span>
                    </a>

                    <a href="#" class="tw">
                        <span data-icon="T" class="icon"></span>
                        <span class="info">
                            <span class="follow">Síguenos en Twitter</span>
                           
                        </span>
                    </a>
          
                    <a href="#" class="rss">
                        <span data-icon="Ñ" class="icon"></span>
                        <span class="info">
                            <span class="follow">Fax: 4457406</span>
                            
                        </span>
                    </a>
                </div>
        
                <div class="clear"></div>
                <div class="copyright">Amdeco &copy; 2018.  Política de privacidad</div>
            </div>
        </div>
      </footer>
    </div>
    <script src="js/script.js"></script>
    
  </body>
</html>
