<?php
include "db.php";
$images = get_imgs();
?>
<html>
	<head>
		<title>Subir Multiples Imagenes - Evilnapsis</title>
		  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	</head>
	<body>


		<div class="container">
			<div class="row">
				<div class="col-md-12">
		<h1>Eventos</h1>
		<a href="eventos/insertevent.php" class="btn btn-default">Agregar Evento</a> 
		<br><br>
		<?php if(count($images)>0):?>
				<table class="table table-bordered">
					<thead>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Lugar</th>
                        <th>Fecha del Evento </th>
						<th>Archivo Adjunto</th>
						<th>
					</thead>
			<?php foreach($images as $img):?>
				<tr>
                <td><?php echo $img->titulo; ?></td>
                <td><?php echo $img->descripcion; ?></td>
                <td><?php echo $img->lugar; ?></td>
                <td><?php echo $img->fecha; ?></td>
				<td><img src="images/pdf.png" style="width:50px;">	<a class="btn btn-success" href="eventos/download.php?id=<?php echo $img->idEvento; ?>">Descargar</a> 
				<a class="btn btn-danger" href="./delete.php?id=<?php echo $img->id; ?>">Eliminar</a>			</td>
				
				
				</tr>
			<?php endforeach;?>
</table>
		<?php else:?>

			<h4 class="alert alert-warning">No hay eventos registrados!</h4>
		<?php endif; ?>
</div>
</div>
</div>
	</body>

</html>
