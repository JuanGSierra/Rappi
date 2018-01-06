<?php


echo'<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Prueba</title></head>
<body>';

$url = "72.29.85.225";
$user = "edurappi";
$password = "PS0m1fGAC1";
$dbname = "edurappi_juandavid";

$db = mysqli_connect($url,$user,$password,$dbname) or die('NOPE');

$prueba = "SELECT correo_rappi,nombre1,nombre2 from soporte_activos_prueba";

$resultado = $db->query($prueba);

while($row = $resultado->fetch_assoc()){
  echo "Name: " . $row["nombre1"]. " " . $row["nombre2"] . "<br>". "Correo: " . $row["correo_rappi"]. "<br>";
}

echo '
</body>
</html>';
 ?>
