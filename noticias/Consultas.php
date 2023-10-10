 <?php


    function Noticias()
    {
        $usuario = "root";
        $contrasena = "";
        $servidor = "localhost";
        $basededatos = "u826094500_amdeco_web";

        $conn = mysqli_connect($servidor, $usuario, "$contrasena") or die("No se ha podido conectar al servidor de Base de datos");
        $db = mysqli_select_db($conn, $basededatos);
        $db = mysqli_select_db($conn, $basededatos) or die("Upps! Pues va a ser que no se ha podido conectar a la base de datos");

        $sql =  mysqli_query($conn, "SELECT * FROM banner ORDER BY fecha DESC LIMIT 3");
        //Si existe registros en la Base de datos.
        if (mysqli_num_rows($sql) > 0) {
            while ($res = mysqli_fetch_array($sql)) {
                $imagen = $res['url_image'];
                echo "
                <div class='card'>
                <div class='category'><center>Noticias Amdeco</center></div>
                    <div class='card-image'><img src='noticias/img/banner/" . $imagen . "'   width='280' height='200'/></div>
                    <div>
                    <div class='heading d-flex flex-column align-items-center'> <center>" . $res['titulo'] .
                    "</center> <div class='author'><span class='name'>AMDECO </span>" . $res['fecha'] . "</div>
                    </div>
                    </div>
                </div>            ";
            }
        } else {
            echo "No hay en la Base de Datos Noticias";
        }
    }


    ?>
		




