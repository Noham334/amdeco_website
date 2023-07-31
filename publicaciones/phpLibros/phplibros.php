<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <title>Publicaciones</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="../images/deco.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
	  <!-- CSS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>     
    <link rel="stylesheet" href="../phpLibros/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../phpLibros/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" href="../phpLibros/css/form-elements.css">
    <link rel="stylesheet" href="../phpLibros/css/style.css">
		<link rel="stylesheet" type="text/css" href="../phpLibros/css/normalize.css" />
			
		<link rel="stylesheet" type="text/css" href="../phpLibros/css/component.css" />
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
		
    <script src="../js/jquery-migrate-1.2.1.js"></script>
    <script src="../js/device.min.js"></script>
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
            <h1 class="brand_name"><img src="../images/amdecologo.png"><a href="./"></a></h1>
            <p class="brand_slogan"></p>
            
            </div><a href="" class=""></a>
          
          </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
                <ul data-type="navbar" class="sf-menu">

                    <li class="active"><a href="/amdeco_website/publicaciones/phpLibros/phplibros.php">Libros</a></li>
                    <li ><a href="/amdeco_website/publicaciones/phpfolletos/phpfolletos.php">Folletos</a></li>
                    <li><a href="/amdeco_website/publicaciones/phpLeyes/phpleyes.php">Leyes</a></li>
                    <li><a href="/amdeco_website/publicaciones/phpMunicipios/phpmunicipios.php">Municipios</a></li>
                    <li><a href="/amdeco_website/publicaciones/phpAmdeco/amdeco.php">Amdeco</a></li>
                    <li><a href="/amdeco_website/publicaciones/phpVarios/phpvarios.php">Otros</a></li>
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
<br>
      <div class="container">
          <a href="../../enlacesacercade/login/principal.php" class="btn btn-danger" role="button">Retornar</a>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">

<i class="fas fa-upload"></i>
Subir</button>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Subir Archivo</h3>
                              
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-file"></i>
                            </div>
                            </div>
                            <div class="form-bottom contact-form">

                           <form method="post" action="" enctype="multipart/form-data">
                
                                <div class="form-group">                            
                                <input type="text"  name="titulo" placeholder="Titulo" class="contact-email form-control" id="contact-email">
                                 </div>
                  
                                <div class="form-group">
                                <textarea name="descripcion" placeholder="Descripcion" class="contact-message form-control" id="contact-message"></textarea>
                                 </div>
                  
                              <div class="form-group">
                                <input type="date" name="fecha" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                              </div>
                  
                                  <div class="box">
                                  <input type="file" name= "archivo" name="file-1[]" id="file-1"  class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                  <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Cargar Archivo&hellip;</span></label>
                                   </div>            
                              
          <button type="submit" class="btn" name="subir" >Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        
                            </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Modal content-->

   <!-- capturar datos de registro-->
<?php
include_once '../phpLibros/config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];    
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../phpLibros/archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
			      $fecha= $_POST['fecha'];
			
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_libros(titulo,descripcion,fecha,tipo,nombre_archivo) VALUES('$titulo','$descri','$fecha'	,'$tipo','$nombre')";
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
					  <th width=5><p class="text-while"><center> <strong>ELIMINAR</strong></center></th>					
            </tr>
			     </thead>
			
        <?php
     
        $db=new Conect_MySql();
            $sql = "select*from tbl_libros order by fecha desc";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
            <td><?php echo $datos['titulo']; ?></td>
            <td><?php echo $datos['descripcion']; ?></td>
            <td><?php echo $datos['fecha']; ?></td>
            <td><?php echo $datos['tipo']; ?></td>
		<!--	<td> ?php echo '<img src="archivos/'.$datos["nombre_archivo"].'" width="30" heigth="30">'?></td>-->


<td><center><a class="btn btn-success" href="../phpLibros/archivos/<?php echo $datos["nombre_archivo"];?>"download> <i class="fa fa-download" aria-hidden="true"></i></a></center></td>


 <td><a class="btn btn-danger"  onClick="deleteme(<?php echo $datos['id']; ?>)"  name="Delete"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a></td>

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
 window.location.href='../phpLibros/del.php?id=' +id+'';
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

      <script src="../phpLibros/js/custom-file-input.js"></script>

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