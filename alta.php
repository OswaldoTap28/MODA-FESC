<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alta</title>
</head>

<body>
	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modafesc";
	
$id = $_REQUEST['usr'];
$correo = $_REQUEST['cor'];
$nombre = $_REQUEST['nom'];
$telefono = $_REQUEST['tel'];
$direccion = $_REQUEST['dir'];	
$contra = $_REQUEST['con'];
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sqlcheck =	"select idcliente from cliente where idcliente='$id'";
$check = $conn->query($sqlcheck);

if($check->num_rows > 0){
	echo "<script language='javascript'>alert('Usuario ya existe')</script>";
	echo "<script language='javascript'>";
    echo "document.location.href='registrar.php'";
    echo "</script>";
    $conn->close();
}
else{	
$sql = "insert into cliente(idcliente,correo,nombre,telefono,direccion,contrasena)
	      values('$id','$correo','$nombre','$telefono','$direccion','$contra')";
$result = $conn->query($sql);

if ($result) {
    echo "<script language='javascript'>alert('Datos registrados')</script>";
	echo "<script language='javascript'>";
    echo "document.location.href='cuenta.php'";
    echo "</script>";
	$conn->close();
  }
}
?>	
	
</body>
</html>