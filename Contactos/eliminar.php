 <?php
   include("conexion.php");  

// Create connection

$id =$_REQUEST['id'];
// sql to delete a record
$sql = "DELETE FROM contactos WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: reportes.php");
?> 


