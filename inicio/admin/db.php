<?php

/**
* conexionexion a la base de datos y funciones
* Autor: evilnapsis
**/

function conexion(){
	return new mysqli("localhost","root","","u826094500_amdeco_web");
}

function insert_imgs($title, $folder, $image){
	$conexion = conexion();
	$conexion->query("insert into image (title, folder,src,created_at) value (\"$title\",\"$folder\",\"$image\",NOW())");
}

function get_foto(){
	$images = array();
	$conexion = conexion();
	$query=$conexion->query("select * from image order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgss($id){
	$image = null;
	$conexion = conexion();
	$query=$conexion->query("select * from image where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function delite($id){
	$conexion = conexion();
	$conexion->query("delete from image where id=$id");
}
   

function listarUsuario($id){
	$conexion = conexion();
	$sql = "SELECT * FROM `image` WHERE id=$id";
	$result = $conexion->query($sql);

	if ($result->num_rows > 0) {
		$datos = $result->fetch_assoc();
		//var_dump($datos);
		return $datos;
	} else {
		echo "sin resultados";
		return null;
	}
}
/**
function actualizar($id,$title){
	$sql="UPDATE  image SET title=$title WHERE id=$id";
	$query=mysqli_query(conexion(), $sql);
	return $query;

}
function actualizarSinFoto($id,$title){
	$sql="UPDATE  image SET title=$title WHERE id=$id";
	$query=mysqli_query(conexion(), $sql);
	return $query;
}
**/


function update_image($id, $title, $src)
{
	$conexion = conexion();
	$title = mysqli_real_escape_string($conexion, $title);
	$src = mysqli_real_escape_string($conexion, $src);
	$sql = "UPDATE image SET title='$title', src='$src' WHERE id=$id";
	$query = mysqli_query($conexion, $sql);
	return $query;
}

function update_image_title($id, $title)
{
	$conexion = conexion();
	$title = mysqli_real_escape_string($conexion, $title);
	$sql = "UPDATE image SET title='$title' WHERE id=$id";
	$query = mysqli_query($conexion, $sql);
	return $query;
}

?>
