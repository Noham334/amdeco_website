 <?php


function Noticias()
{
$usuario = "root";
$contrasena = ""; 
$servidor = "localhost";
$basededatos = "u826094500_amdeco_web";

$conn = mysqli_connect( $servidor, $usuario, "$contrasena" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conn, $basededatos );
$db = mysqli_select_db( $conn, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    $sql=  mysqli_query($conn, "SELECT * FROM banner ORDER BY fecha DESC LIMIT 3");
    //Si existe registros en la Base de datos.
    if (mysqli_num_rows($sql) > 0) {
        echo "<div class=holder-clear>";
        while($res= mysqli_fetch_array($sql)) {
            $imagen= $res['url_image'];
               echo "          
                <div class='col3 padding'>
                   <center><img src='noticias/img/banner/".$imagen."' width='280' height='200'/></center>
                    <br>
				<h5>".$res['titulo']. "</h5>
			  </br>
                    <a class=button href=noticias.php>Leer más</a>
                </div>
            ";
        } 
        echo "</div>";
    } else { 
        echo "No hay en la Base de Datos Noticias";
    }
  
   

}


?>
		




