<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

		    <!-- CSS -->
       
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">
		
			<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
		   	  <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #C8E7F4}

th {
  background-color: #5AB7DE;
  color: white;
}


.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color: #8CCDE8;
}
</style> 
		   
</head>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
	
    
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
			 $fecha= $_POST['fecha'];
			
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(titulo,descripcion,fecha,tipo,nombre_archivo) VALUES('$titulo','$descri','$fecha'	,'$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query)
			{
                echo "Se guardo correctamente";
            }
            } 
			else 
			{
            echo "Error";
        }
		
    }
}
?>


    <body>
	<div class="container">

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cargar Archivos</button>

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
			                        	<input type="text"  name="titulo"placeholder="Titulo" class="contact-email form-control" id="contact-email">
			                        </div>
									
									 <div class="form-group">
			                        	<textarea name="descripcion" placeholder="Descripcion" class="contact-message form-control" id="contact-message"></textarea>
			                        </div>
									
			                        <div class="form-group">
			                        	<input type="date" name="fecha" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
			                        </div>
									
									
									
												<div class="box">
					<input type="file" name="archivo" name="file-1[]" id="file-1"  class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
					<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Cargar Archivo&hellip;</span></label>
				</div>						
			
					<button type="submit" class="btn" name="subir" >Guardar <i class="fa fa-save fa-lg" aria-hidden="true"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
          <button type="button" class="btn btn-default" data-dismiss="modal">Salir <i class="fa fa-close fa-lg" aria-hidden="true"></i></button>
        
			                       
			                        
			                    </form>
		                    </div>
                        </div>
                    </div>
            	 
      
      </div>
      
    </div>
  </div>
  
</div>


	
	
	
		<style> 
input[type=text1] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text1]:focus {
  width: 100%;
}
</style>
</head>
<body>


		
		
	
	
	<div class="container">  
                                
                <br><br>  
                <div align="center">  
                     <input type="text1" name="search" id="search" placeholder="Search.." class="form-control">
                </div>  
                <br>
				 <div class="table-responsive" > 
            <table class="table table-hover"  id="employee_table" > 
			 <thead>
            <tr>				
						<th><p class=" text-white">TITULO</p></th>
						<th><p class="text-white">DESCRIPCION</p></th>
						<th><p class="text-white">FECHA</p></th>
						<th><p class="text-white">FORMATO</p></th>
					    <th width=5><p class="text-while">DESCARGAR</p></th>
					    <th width=5><p class="text-while">ELIMINAR</p></th>						             				 
            </tr>
			</thead>
			
        <?php
     
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                 <td><?php echo $datos['fecha']; ?></td>
                 <td><?php echo $datos['tipo']; ?></td>
		<!--	<td> ?php echo '<img src="archivos/'.$datos["nombre_archivo"].'" width="30" heigth="30">'?></td>-->
				              								
				 <td><center><a class="btn btn-success" href="archivos/<?php echo $datos["nombre_archivo"];?>"download> <i class="fa fa-download" aria-hidden="true"></i></a></center></td>
   	<td><center><a class="btn btn-danger" href="del.php?id=<?php echo $datos["id"];?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a></center></td>
        
			      
      
            </tr>
                
          <?php  } ?>
            </div>
        </table>
    </body>
</html>

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
	
	
	
      <script src="js/custom-file-input.js"></script>
    </body>
</html>
