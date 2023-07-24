<?php
include "../db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $id = $_POST['id'];
   $title = $_POST['title'];

   // Verificar se foi enviada uma nova imagem
   if (isset($_FILES['foto_usuario']) && $_FILES['foto_usuario']['error'] === UPLOAD_ERR_OK) {
      var_dump($_FILES);
      $filename = $_FILES['foto_usuario']['name'];
      $tmp_path = $_FILES['foto_usuario']['tmp_name'];

      //cambia el directorio de la imagen temporaria por el directorio que elijamos donde se guardará la imagen que se recibe del POST($_FILES)
      move_uploaded_file($tmp_path, '../uploads/' . $filename);

      // FUNCION DE LA CONSULTA UPDATE
      update_image($id, $title, $filename);
   } else {
      // FUNCION DE LA CONSULTA UPDATE SIN LA IMAGEN
      update_image_title($id, $title);
   }

   // Redireccionar para el index
   header("Location: ../index.php");
   exit();
}
