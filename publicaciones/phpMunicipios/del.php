 <?php
   include("config.inc.php");  
$servername = "localhost";
$username = "u826094500_amdeco_web";
$password = "Amdeco_web123";
$dbname = "u826094500_amdeco_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id =$_REQUEST['id'];
// sql to delete a record
$sql = "DELETE FROM tbl_municipios WHERE ID = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

 	
	
	header("Location: ../municipios.php");
?>