<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <title>Amdeco</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/deco.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
	  <!-- CSS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>     
    <link rel="stylesheet" href="phpAmdeco/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="phpAmdeco/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" href="phpAmdeco/css/form-elements.css">
    <link rel="stylesheet" href="phpAmdeco/css/style.css">
		<link rel="stylesheet" type="text/css" href="phpAmdeco/css/normalize.css" />
			
		<link rel="stylesheet" type="text/css" href="phpAmdeco/css/component.css" />
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
		
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/device.min.js"></script>
  </head>
  
    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
       <header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><img src="images/amdecologo.png"><a href="./"></a></h1>
            <p class="brand_slogan"></p>
            
            </div><a href="" class=""></a>
          
          </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
                <ul data-type="navbar" class="sf-menu">
                    <li><a href="..\index.php">Inicio</a>
                    <ul>
                      
                    </ul>
                    </li>
                    <li ><a href="..\acercade.php">Acerca De</a>
                      <ul>
                          <li><a href="..\enlacesacercade\quienessomos.php" target="_parent">Quienes somos</a></li>
                          <li><a href="..\enlacesacercade\misionyvision.php" target="_parent">Misión y Visión</a></li>
                          <li><a href="#">Organigrama</a></li>
                          <li><a href="..\enlacesacercade\consejo.php" target="_parent">Consejo directivo</a></li>
                          <li><a href="..\enlacesacercade\autoridades.php" target="_parent">Autoridades</a></li>
                        </ul>
                    </li>
                    <li><a href="..\municipios.php">Municipios</a>
                    </li>
                    <li><a href="publicaciones.php">Publicaciones</a>
				          <ul>
                    <li><a href="publicaciones\libros.php" target="_parent"><img src="publicaciones/iconos/Libros.png" alt="">Libros</a><li>
                    <li><a href="publicaciones\folletos.php" target="_parent"><img src="publicaciones/iconos/folletos.png" alt="">Folletos</a><li>
                    <li><a href="publicaciones\leyes.php" target="_parent"><img src="publicaciones/iconos/leyes.png" alt="">Leyes</a><li>
                    <li><a href="publicaciones\municipios.php" target="_parent"><img src="publicaciones/iconos/municipios.png" alt="">Municipios</a><li>
                    <li><a href="publicaciones\amdeco.php" target="_parent"><img src="publicaciones/iconos/amdeco.png" alt="">Amdeco</a><li>
                    <li><a href="publicaciones\otros.php" target="_parent"><img src="publicaciones/iconos/varios.png" alt="">Otros</a><li>
                  </ul>
                </li>
                    <li><a href="..\noticias.php">Noticias</a>
                    <ul>
                      <li><a href="#">Informacion reciente</a></li>
                    </ul>
                    </li>
                    <li><a href="..\contactos.php">Contactos</a>
                    </li>
                  </ul>
            </nav>
          </div>
        </div>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->

   

   <!-- capturar datos de registro-->
<?php
include_once 'phpAmdeco/config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];    
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "phpAmdeco/archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
			      $fecha= $_POST['fecha'];
			
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_amdeco(titulo,descripcion,fecha,tipo,nombre_archivo) VALUES('$titulo','$descri','$fecha'	,'$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query)
			       {
                 ?>

    <script>alert('Se registro con Exito...')</script>
       <?php
             }                   
        		else 
        			{
             ?>

     <script>alert('error...')</script>
       <?php
      }
    }
  }
}
?>
<!--End capturar datos de registro-->

<br>  
<!-- CARGAR REGISTRO A NUESTRA TABLA-->
	<div class="container">                                 
             <div align="center"><input type="text1" name="search" id="search" placeholder="Buscar.." class="form-control"> </div><br>            
            
				    <div class="table-responsive" > 
            <table class="table table-hover"  id="employee_table" > 
			     <thead>
            <tr>				
						<th><p class=" text-white"><center> <strong>TITULO</strong></center> </th>
						<th><p class="text-white"><center> <strong>DESCRIPCION</strong></center></th>
						<th><p class="text-white"><center> <strong>FECHA</strong></center></th>
						<th><p class="text-white"> <center> <strong>FORMATO</strong></center></th>
					  <th width=1><p class="text-while"><center> <strong>DESCARGAR</strong></center></th>
					 					
            </tr>
			     </thead>
			
        <?php
     
        $db=new Conect_MySql();
            $sql = "select*from tbl_amdeco order by fecha desc";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
            <td><?php echo $datos['titulo']; ?></td>
            <td><?php echo $datos['descripcion']; ?></td>
            <td><?php echo $datos['fecha']; ?></td>
            <td><?php echo $datos['tipo']; ?></td>
		<!--	<td> ?php echo '<img src="archivos/'.$datos["nombre_archivo"].'" width="30" heigth="30">'?></td>-->


<td><center><a class="btn btn-success" href="phpAmdeco/archivos/<?php echo $datos["nombre_archivo"];?>"download> <i class="fa fa-download" aria-hidden="true"></i></a></center></td>




        </tr>
       <?php } ?>
      </table>
		 </div>
    </div>
              <!-- CARGAR REGISTRO A NUESTRA TABLA-->
		         
   <!-- Javascript function for Mensaje Eliminar-->
 <script language="javascript">
 function deleteme(id)
 {
 if(confirm("Desea Eliminar!")){
 window.location.href='phpAmdeco/del.php?id=' +id+'';
 return true;
 }
 } 
 </script>
   <!-- End Javascript function for Mensaje Eliminar-->
 
<!-- FUNCION PARA EL BUSCADOR-->
<script>  

      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  
<!-- END FUNCION PARA EL BUSCADOR-->

      <script src="phpAmdeco/js/custom-file-input.js"></script>

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
                            <span class="follow">S&#237;guenos en Twitter</span>
                           
                        </span>
                    </a>
					
                    <a href="#" class="rss">
                        <span data-icon="&#209;" class="icon"></span>
                        <span class="info">
                            <span class="follow">Fax: 4457406</span>
                            
                        </span>
                    </a>
                </div>
				
                <div class="clear"></div>
                <div class="copyright">Amdeco &copy; 2018.  Pol&#237;tica de privacidad</div>
            </div>
        </div>
      </footer>
   
    <script src="js/script.js"></script>
  </body>
</html>