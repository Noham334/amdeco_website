<?php 

$id=$_GET['id'];
include "db.php";
$img_datos=listarUsuario($id);
$nombre=$img_datos['title'];

?>
<html>
	<head>
		<title>EDITAR</title>
	  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	</head>
	<body>
<?php include("navbar.php");?>

<div class="container">
	<div class="row">
		<div class="col-md-12">	
			<h1>Subir imagenes o archivos</h1>
			<form action="acciones/actualizar.php" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="id" value="<?=$id?>">    
				<div class="form-group">
					<label for="exampleInputPassword1">Texto a mostrar</label>
					
                    <input  class='form-control form-control-sm' type='text' name="title" value="<?=$nombre?>" >
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Imagen</label>
                    <input  class='form-control form-control-sm' type='file' name="foto_usuario" >
        <center><img name="    " src="<?php echo $img_datos["folder"] . $img_datos["src"]; ?>" style="width:240px;"></center>
				</div>

				<button type="submit" class="btn btn-primary mt-2">Actualizar</button>
			</form>
		</div>
	</div>
</div>

</div>
	</body>

</html>