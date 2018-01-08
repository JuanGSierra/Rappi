<?php
// Datos del servidor
$url = "72.29.85.225";
$user = "edurappi";
$password = "PS0m1fGAC1";
$dbname = "edurappi_juandavid";
// Conexión con SQL
$conn = mysqli_connect($url,$user,$password,$dbname) or die('No se pudo realizar conexión, contacte al administrador de la página'); // Conexión al servidor y mensaje de error
//recibe usuario y contraseña
$umane = $_POST["usuario"];
$psychopass = $_POST["contraseña"];
// Testo de datos
echo $umane,"<br>";
echo $psychopass,"<br>";
header("Location: index.html");

 ?>
