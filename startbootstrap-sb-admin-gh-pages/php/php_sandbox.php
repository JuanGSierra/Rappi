<?php


echo'<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Prueba</title></head>
<body>';
// Datos del servidor
$url = "72.29.85.225";
$user = "edurappi";
$password = "PS0m1fGAC1";
$dbname = "edurappi_juandavid";

$conn = new mysqli($servername, $username, $password, $dbname); // Conexión a la base de datos


if ($conn->connect_error) {
    die("No es posible conectarse a la base de datos: " . $conn->connect_error); // Test de conexión
}


$dato1 = $dato2 = $dato3 = $dato4 = ""; // declaración de variables

// A las variables se le asignan los datos del formularios
$dato1 = $post('dato1');
$dato1 = $post('dato2');
$dato1 = $post('dato3');
$dato1 = $post('dato4');

$sql = "INSERT INTO php_sandbox (dato1, dato2, dato3 ,dato4) VALUES ($dato1, $dato2, $dato3, $dato4)"; // Query

if ($conn->query($sql) === TRUE) {
    echo "Registro agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close(); // Cerrar conexión

// Conexión de mostrar datos
/*
$prueba = "SELECT correo_rappi,nombre1,nombre2 from soporte_activos_prueba";

$resultado = $db->query($prueba);

while($row = $resultado->fetch_assoc()){
  echo "Name: " . $row["nombre1"]. " " . $row["nombre2"] . "<br>". "Correo: " . $row["correo_rappi"]. "<br>";
}
echo '
*/
</body>
</html>';
 ?>
