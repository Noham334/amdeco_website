<?php
class personal {

    //metodos
    public static function crear($CI,$terminacion ,$Nombre, $Apellido_p, $Apellido_m, $genero, $fecha_ini, $fecha_fin, $cargo, $descripcion){
        include 'conexion.php';
        $records = $conn->prepare("INSERT INTO personal(id_personal, nombre, apellido_p, apellido_m, genero, ci, terminacion_ci, fecha_ini, fecha_fin, cargo, descripcion_trabajo) 
        VALUES (NULL,'$Nombre', '$Apellido_p', '$Apellido_m', '$genero', '$CI', '$terminacion','$fecha_ini', '$fecha_fin', '$cargo', '$descripcion')");
        if(!$records){
            echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
         }
        if($records->execute()){
            return "Datos ingresados exitosamente";
        }
        else{
            return "Ocurrio un error. Datos no registrados";
        }
    }
    public static function show($id_personal){
        include 'conexion.php';
        $records = $conn->prepare("SELECT * FROM personal WHERE id_personal = '$id_personal'");
        $records->execute();
        $results = $records->get_result()->fetch_assoc();
        return $results;
    }
    public static function delete($id){
        require 'conexion.php';
        $records = $conn->prepare("DELETE FROM personal WHERE id_personal = '$id'");
        if($records-> execute()){
            return "Datos eliminados exitosamente";
        }
        else{
            return "Datos no eliminados";
        }
    }
    public static function edit($CI, $terminacion, $Nombre, $Apellido_p, $Apellido_m, $genero, $cargo, $descripcion, $fecha_ini, $fecha_fin, $id){
        include 'conexion.php';
        $sql= "UPDATE personal SET  nombre = '$Nombre',apellido_p = '$Apellido_p', apellido_m = '$Apellido_m', genero = '$genero', cargo = '$cargo', descripcion_trabajo = '$descripcion', ci = '$CI', terminacion_ci = '$terminacion', fecha_ini = '$fecha_ini', fecha_fin = '$fecha_fin'  WHERE id_personal = '$id'";
        $resultado=mysqli_query($conn,$sql);

        if($resultado){
            $mensaje_verificacion = "Datos actualizados exitosamente";
        }
        else{
            $mensaje_verificacion = 'Datos no actualizados';
        }
        return $mensaje_verificacion;
    }
    public static function search_ci($buscar){
        include 'conexion.php';
        $lista=[];
        $records = mysqli_query($conn, "SELECT CONCAT(nombre,' ', apellido_p, ' ', apellido_m)nombre, ci, id_personal FROM personal WHERE CI LIKE '$buscar'");
        $i=0;
        while($results =  mysqli_fetch_array($records)){
            $lista[$i] = $results;
            $i++;
        }
        return $lista;
    }
    public static function generate_pdf($id_personal){
        include 'conexion.php';
        $records = $conn->prepare("SELECT CONCAT(nombre, ' ',apellido_p, ' ',apellido_m)nombre, ci, fecha_ini, fecha_fin, cargo, descripcion_trabajo, genero, terminacion_ci FROM personal WHERE id_personal = '$id_personal'");
        $records->execute();
        $results = $records->get_result()->fetch_assoc();
        return $results;
    }
}
?>