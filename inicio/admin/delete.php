<?php

if(isset($_GET["id"])){
	include "db.php";
	$img = get_imgss($_GET["id"]);
	if($img!=null){
		delite($img->id);
		unlink($img->folder.$img->src);
		header("Location: index.php");


	}
}


?>