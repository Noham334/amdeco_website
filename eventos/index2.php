<?php
include "db.php";
$images = get_imgs();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Projects</title>
<meta charset="charset=iso-8859-1">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Contactos/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

</head>
<body>
<!-- header -->
<div class="row">

<ol class="breadcrumb">
    <li><a href="/amdeco/enlacesacercade/login/principal.php">Inicio</a></li>
    <li><a href="/amdeco/enlacesacercade/admin/bannerlist.php">Alcaldes</a> </li>
    <li class="active">Eventos</li>
    <li><a href="/amdeco/Contactos/reportes.php">Contactos</a> </li>
    <li><a href="/amdeco/noticias/admin/bannerlist.php">Noticias</a> </li>
    <li><a href="http://localhost/amdeco/publicaciones/phpLibros/phplibros.php">Publicaciones</a> </li>
    <li><a href="/amdeco/registros_personal/personal.list.php">Registro Personal</a> </li>
    <li><a href="/amdeco/enlacesacercade/login/cerrar.php">Cerrar Sesion</a></li>
</ol>

</div>
    <div class="container">
        <h1>Eventos</h1>
                <a href="insertevent.php" class="btn btn-primary" role="button">Agregar Evento</a> 
                <a href="../enlacesacercade/login/principal.php" class="btn btn-primary pull-right" role="button">Regresar</a>
    </div>
		<br>
<!-- content -->
<section>

<div class=container>
    <table class="table">
        <thead>
            <th>Título</th>
            <th>Lugar</th>
            <th>Fecha del Evento</th>
            <th>Archivo adjunto del evento</th>
        </thead>
        <?php foreach($images as $img):?>
        <tr>
            <td><?php echo $img->titulo; ?></td>
            <td><?php echo $img->lugar; ?></td>
            <td><?php $fecha=$img->fecha; $fecha1= date("m-d-Y", strtotime("$fecha"));
                echo $fecha1 ?></td>
            <td><img src="../images/adobe.png" width="50" height="50">&nbsp;&nbsp;<a class="btn btn-primary" href="download.php?id=<?php echo $img->idEvento; ?>">  Descargar</a>
            <a href="download.php?id2=<?php echo $img->idEvento?>" class="btn btn-danger" role="button">Eliminar</a></td>

        </tr>
        <?php endforeach;?>	
    </table>
</div>  

					
					
		
	
</section>
<!-- footer -->

</body>
</html>