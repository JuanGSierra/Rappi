<?php
session_start();
// Datos del servidor
$url = "72.29.85.225";
$user = "edurappi";
$password = "PS0m1fGAC1";
$dbname = "edurappi_juandavid";
// Conexión con SQL
$conn = mysqli_connect($url,$user,$password,$dbname) or die('No se pudo realizar conexión, contacte al administrador de la página'); // Conexión al servidor y mensaje de error
//recibe usuario y contraseña
$main = $_POST["usuario"];
$psychopass = $_POST["contraseña"];
// Testo de datos
echo $umane,"<br>";
echo $psychopass,"<br>";
// Consulta de ese nombre de usuario con esa contraseña
$sql = "SELECT * FROM blockbuster where main='$main' AND lego='$psychopass'";

$result = $conn->query($sql);

if (!$row = mysqli_fetch_assoc($result)){
  echo "Usuario o contraseña incorrectos";
}else{
  $_SESSION['id']= $row['id'];
}


//header("Location: index.html");

 ?>
