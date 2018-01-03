<?php
// Datos del servidor
$url = "72.29.85.225";
$user = "edurappi";
$password = "PS0m1fGAC1";
$dbname = "edurappi_juandavid";

$conn = mysqli_connect($url,$user,$password,$dbname) or die('No se pudo realizar conexión'); // Conexión al servidor y mensaje de error

//$dato1 = $dato2 = $dato3 = $dato4 = ""; // declaración de variables
/*
// A las variables se le asignan los datos del formularios/*
$dato1 = $post['dato1'];
$dato1 = $post['dato2'];
$dato1 = $post['dato3'];
$dato1 = $post['dato4'];
*/
/* // Test de datos

echo $_POST['dato1'];
echo $_POST['dato2'];
echo $_POST['dato3'];
echo $_POST['dato4'];
*/

// Query, las variables entran directamente por el POST
$sql = "INSERT INTO php_sandbox (dato1, dato2, dato3 ,dato4) VALUES ('$_POST[dato1]', '$_POST[dato2]', '$_POST[dato3]', '$_POST[dato4]')"; // Query, las variables entran directamente


echo '
 <script>
 function alerta(){
  alert("Datos enviados exitosamente");
  }
  </script>';
//Confirmación de registro
if ($conn->query($sql) === TRUE) {
    echo '
 <script>  alerta();  </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // Cerrar conexión
 ?>