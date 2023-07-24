<?php


if(isset($_GET["id"])){
	include "db.php";
	$img = get_img($_GET["id"]);
	if($img!=null){
		//del($img->id);
		$fullpath = $img->folder.$img->src;
		header("Content-Disposition: attachment; filename=$img->src");
		readfile($fullpath);
	}
}


if(isset($_GET["id2"])){
	include "db.php";
	del($_GET["id2"]);?>
	<script type="text/javascript">
    alert("Se ha eliminado correctamente el Evento");
    location.href="http://localhost:8080/Amdeco/eventos/index2.php";
	</script>

	<?php
	
}



?>
