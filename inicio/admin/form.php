<html>

<head>
	<title>Subir Multiples Imagenes y/o Archivos - By Evilnapsis</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
	<link rel="icon" href="\amdeco_website\enlacesacercade\login\frontend\images\deco.ico" type="image/x-icon">
</head>

<body>
	<?php include("navbar.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Subir imagenes o archivos</h1>
				<form enctype="multipart/form-data" method="post" action="upload.php">

					<div class="form-group">
						<label for="exampleInputPassword1">Texto a mostrar</label>
						<input type="text" name="title" class="form-control" placeholder="Texto a mostrar">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Imagen</label>
						<input type="file" name="image" required>
					</div>

					<input type="submit" value="Subir imagen" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>

	</div>
</body>

</html>