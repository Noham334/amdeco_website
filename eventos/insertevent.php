<html>
	<head>
		<title>Subir Multiples Imagenes y/o Archivos - By Evilnapsis</title>
	  <link rel="stylesheet" type="text/css" href="../noticias/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	</head>
	<body>
    

		<div class="container">
			<div class="row">
				<div class="col-md-12">		
		<h1>Subir evento</h1>
		<form enctype="multipart/form-data" method="post" action="uploadEvent.php">

  <div class="form-group">
    <label for="exampleInputPassword1">Titulo  a mostrar</label>
    <input type="text"  name="titulo" class="form-control"  placeholder="Titulo a mostrar">
  </div>
	<div class="form-group">
        <label for="exampleInputPassword1">Descripcion a mostrar</label>
        <input type="text"  name="descripcion" class="form-control"  placeholder="Descripcion a mostrar">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Lugar del evento</label>
        <input type="text"  name="lugar" class="form-control"  placeholder="Lugar del evento">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Fecha del evento</label>
        <input type="date"  name="fecha" class="form-control"  placeholder="Lugar del evento">
    </div>
  <div class="form-group">
    <label for="exampleInputFile">Archivo adjunto</label>
    <input type="file" name="image" required>
  </div>

		<input type="submit" value="Subir evento" class="btn btn-primary">
		</form>
	</div>
</div>
</div>
	</body>

</html>
