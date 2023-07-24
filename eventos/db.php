<?php

/**
* Conexion a la base de datos y funciones 
**/

function con(){
	return new mysqli("localhost","root","","u826094500_amdeco_web");
}

function insert_img($title, $description, $lugar, $folder, $image, $fecha){
	$con = con();
	$con->query("INSERT INTO evento (titulo,descripcion,lugar, folder,src,fecha) value (\"$title\",\"$description\",\"$lugar\",\"$folder\",\"$image\",\"$fecha\")");
}

function get_imgs(){
	$images = array();
	$con = con();
	$query=$con->query("SELECT * FROM evento WHERE estado=1 ORDER BY fecha desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_img($id){
	$image = null;
	$con = con();
	$query=$con->query("SELECT * FROM evento WHERE idEvento=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function del($id){
	$con = con();
	//$con->query("delete from image where id=$id");
	$con->query("UPDATE evento SET estado = 0 WHERE (idEvento = $id)");
}

?>