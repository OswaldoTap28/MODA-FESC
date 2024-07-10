<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sesion</title>
</head>
	
<body>
	
<?php
include("consultas.php");
$textofinal = random();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modafesc";
	
$id = $_REQUEST['user'];	
$contra = $_REQUEST['pass'];
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT IdCliente, Nombre, Correo FROM Cliente WHERE IdCliente='$id' AND Contrasena='$contra' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row["IdCliente"];
    echo "<script language='javascript'>";
      echo "alert('Has iniciado sesión');";
      echo "document.location.href='index.php?xsftr412=".$id."&".$textofinal."';";//xsftr412 es la variable que se usará para que el index cambie dependiendo del cliente que inicie sesión
    echo "</script>";
  }
//header( "refresh:3;url=index.php?IdCliente=".$id);
} else {
    echo "<script language='javascript'>";
      echo "alert('Usuario no registrado');";
      echo "document.location.href='cuenta.php';";//cambios
    echo "</script>";
  $conn->close();
  //header( "refresh:3;url=cuenta.php" );
}
?>

</body>

</html>