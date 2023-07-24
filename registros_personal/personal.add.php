<?php
session_start();
/*Mensaje */
$mensaje = "";
$idpersonal_edit ="";
$idpersonalDelete="";
$genero_masculino ="Masculino";
$genero_femenino="Femenino";
$errores;
$mensaje_errores ="";
$terminaciones_ci = array();
$terminaciones_ci[] = "CH";
$terminaciones_ci[] = "LP";
$terminaciones_ci[] = "CB";
$terminaciones_ci[] =  "OR";
$terminaciones_ci[] = "PT";
$terminaciones_ci[] = "TJ";
$terminaciones_ci[] =  "SC";
$terminaciones_ci[] = "BE";
$terminaciones_ci[] = "PD";
/* Llamar la Cadena de Conexion*/ 
include ("php/conexion.php");
include ("php/personal.php");
/*Guardar datos */
if(isset($_POST['guardar'])){
    if(empty($_POST['CI'])||strlen($_POST["CI"]) > 8){
        $errores[] = "El numero de CI solo tiene que tener un tamaño de 8 numeros";
    }
    if(empty($_POST['terminacion_ci'])){
        $errores[] = "Elija una terminación de CI";
    }
    if(empty($_POST['Nombre'])){
        $errores[] = "El nombre es requerido";
    }
    if(empty($_POST['Apellido_p'])){
        $errores[] = "El apellido paterno es requerido";
    }
    if(empty($_POST['Apellido_m'])){
        $errores[] = "El apellido materno es requerido";
    }
    if(empty($_POST['genero'])){
        $errores[] = "El nombre es requerido";
    }
    if(empty($_POST['fecha_ini'])){
        $errores[] = "Elija una fecha de inicio";
    }
    if (empty($_POST['fecha_fin'])) {
        $errores[] = "Elija una fecha de finalización";
    }
    if (empty($_POST['cargo'])) {
        $errores[] = "El cargo es requerido";
    }
    if(empty($_POST['descripcion'])){
        $errores[] = "La descripción de trabajo es requerida";
    }
    if(empty($errores)){
        $mensaje = personal::crear($_POST['CI'], $_POST['terminacion_ci'], $_POST['Nombre'], $_POST['Apellido_p'], $_POST['Apellido_m'], $_POST['genero'], $_POST['fecha_ini'], $_POST['fecha_fin'], $_POST['cargo'], $_POST['descripcion']);
    }
    else{
        $mensaje_errores = $errores;
    }
}
 /*Editar */
 if(!empty($_GET['idpersonal_edit'])){
    $idpersonal_edit = $_GET['idpersonal_edit'];
    $nombre = "";
    $apelli_p = "";
    $apelli_m = "";
    $genero = "";
    $ci = "";
    $terminacion_ci = "";
    $cargo = "";
    $descripcion = "";
    $fech_ini  = "";
    $fech_fin  = "";
    if(isset($idpersonal_edit)){
        $edit = personal::show($idpersonal_edit);
        $id_personal = $edit['id_personal'];
        $nombre = $edit['nombre'];
        $apelli_p = $edit['apellido_p'];
        $apelli_m = $edit['apellido_m'];
        $genero = $edit['genero'];
        $ci = $edit['ci'];
        $terminacion_ci = $edit['terminacion_ci'];
        $cargo = $edit['cargo'];
        $descripcion = $edit['descripcion_trabajo'];
        $fech_ini  = $edit['fecha_ini'];
        $fech_fin  = $edit['fecha_fin'];
    }
}
if(isset($_POST['actualizar'])){
    $actualizar = personal::edit($_POST['CI'], $_POST['terminacion_ci'], $_POST['Nombre'], $_POST['Apellido_p'], $_POST['Apellido_m'], $_POST['genero'], $_POST['cargo'], $_POST['descripcion'],$_POST['fecha_ini'], $_POST['fecha_fin'], $_POST['id']);
    $mensaje = $actualizar;
    header('Location: personal.list.php');
}
 /*Eliminar */
if (!empty($_GET['idpersonal_delete'])) {
    $idpersonalDelete = $_GET['idpersonal_delete'];
    $eliminar = personal::delete($idpersonalDelete);
    $mensaje = $eliminar;
    header('Location: personal.list.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Personal</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
    <style type="text/css"> 
   .transformacion1 { text-transform: capitalize;}   
   .transformacion2 { text-transform: uppercase;}   
   .transformacion3 { text-transform: lowercase;}   
   </style> 
  <body>
  <br>
  <!--Menu-->
     <?php include 'include/nav.php';?>
     <div class="container bg-light d-flex justify-content-center">
        <form method="post" action="personal.add.php" class="row container" style="background-color:#eeeee4;padding-bottom:2%;">
            <h3><strong> Registro de personas</strong></h3>
            <?php if(!empty($mensaje)):?> <p class="col-md-12 bg-danger" style="padding: 5px 5px 5px 8px;"><?= $mensaje ?></p> <?php endif;?>
            <?php if(!empty($mensaje_errores)):?> 
            <div class="col-md-12 bg-danger" style="padding: 5px 5px 5px 8px;">
                <?php foreach ($errores as $error):?>
                <li><?=$error ?></li>
                <?php endforeach;?>
                </div> <?php endif;?>
            <div class="col-md-2">
                <label for="CI" class="form-label">CI:</label>
                <input type="number" class="form-control" id="CI"  maxlength="8" name="CI"  placeholder="Ingrese el numero de CI" value="<?php if(!empty($ci)):?><?=$ci;?><?php endif; ?>"><br>
            </div>
            <div class="col-md-2">
                <label for="CI" class="form-label">Terminacion CI:</label>
                <select class="form-control" id="terminacion_ci" name="terminacion_ci">
                    <?php if(empty($terminacion_ci)):?>
                    <option selected value="">-Terminacion-</option>
                    <?php foreach ($terminaciones_ci as $terminacion):?>
                    <option value="<?=$terminacion ?>"><?=$terminacion?></option>
                    <?php endforeach;?>
                    <!---->
                    <?php else:?>
                    <option selected value="<?=$terminacion_ci?>"><?=$terminacion_ci?></option>
                    <?php for($i=0; $i<=8; $i++):
                            if($terminacion_ci== $terminaciones_ci[$i]):?>
                            <?php else:?>
                            <option value="<?=$terminaciones_ci[$i] ?>"><?=$terminaciones_ci[$i]?></option>
                            <?php endif;
                          endfor;
                    endif;?>
                    <br>
                </select>
            </div>
            <div class="col-md-5">
                <label for="cargo" class="form-label">Cargo que ocupa:</label>
                <input type="" class="form-control" id="cargo" name="cargo"  placeholder="Ingrese el cargo que ocupa"  value="<?php if(!empty($cargo)):?><?=$cargo;?><?php endif; ?>"><br>
            </div>
            <div class="col-md-3">
                <label for="genero" class="form-label">Género:</label>
                <select class="form-control" id="genero" name="genero">
                    <?php if(empty($genero)):?>
                    <option selected value="">-Seleccione el género-</option>
                    <option value="<?=$genero_masculino?>"><?=$genero_masculino?></option>
                    <option value="<?=$genero_femenino?>"><?=$genero_femenino?></option>
                    <?php else:?>
                    <option selected value="<?=$genero?>"><?=$genero?></option>
                    <?php if($genero == "Masculino"):?>
                    <option value="<?=$genero_femenino?>"><?=$genero_femenino?></option>
                    <?php endif; if($genero == "Femenino"):?>
                    <option value="<?=$genero_masculino?>"><?=$genero_masculino?></option>
                    <?php endif;endif;?>
                    <br>
                </select>
            </div>
            <div class="col-md-4">
                <label for="Nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control transformacion1" id="Nombre" name="Nombre"  placeholder="Ingrese los nombres" value="<?php if(!empty($nombre)):?><?=$nombre;?><?php endif; ?>">
            </div>
            <div class="col-md-4">
                <label for="Apellido_p" class="form-label">Apellido paterno:</label>
                <input type="text" class="form-control transformacion1" id="Apellido_p" name="Apellido_p"  placeholder="Ingrese el apellido paterno"  value="<?php if(!empty($apelli_m)):?><?=$apelli_m;?><?php endif; ?>">
            </div>
            <div class="col-md-4">
                <label for="Apellido_m" class="form-label">Apellido materno:</label>
                <input type="text" class="form-control transformacion1" id="Apellido_m" name="Apellido_m"  placeholder="Ingrese el apellido materno"  value="<?php if(!empty($apelli_p)):?><?=$apelli_p;?><?php endif; ?>"><br>
            </div>
            <div class="col-md-12">
                <label for="descripcion" class="form-label">Descripción del trabajo (Complete):</label>
                <p>Él o la suscrita ha desarrollado las actividades...</p>
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="..."><?php if(!empty($descripcion)):?><?=$descripcion;?><?php endif; ?></textarea><br>
            </div>
            <div class="col-md-6">
                <label for="fecha_ini" class="form-label">Fecha de inicio:</label>
                <p>(Seleccione la fecha en la que inicio)</p>
                <input type="date" class="form-control" id="fecha_ini"  name="fecha_ini" placeholder="" value="<?php if(!empty($fech_ini)):?><?=$fech_ini;?><?php endif; ?>">
            </div>
            <div class="col-md-6">
                <label for="fecha_fin" class="form-label">Fecha de finalización:</label>
                <p>(Seleccione la fecha en la que termino su contrato)</p>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="<?php if(!empty($fech_fin)):?><?=$fech_fin;?><?php endif; ?>">
            </div>
            <!--ID-->
            <input type="number" name="id" hidden value="<?php if(!empty($idpersonal_edit)):?><?=$idpersonal_edit;?><?php endif; ?>">
            <div class="col-md-12">
                <br>
                <?php if(empty($idpersonal_edit)):?>
                <button type="submit" name="guardar" class="btn btn-primary">Registrar datos</button>
                <a href="personal.list.php" type="button" class="btn btn-light text-success">Ver lista de registros <i class="bi bi-list"></i></a>
                <?php else:?>
                <button type="submit" name="actualizar" class="btn btn-success">Actualizar datos</button>
                <a href="personal.list.php" type="button" class="btn btn-danger">Cancelar</a>
                <?php endif;?>
            </div>
        </form>
     </div>
  </body>
</html>