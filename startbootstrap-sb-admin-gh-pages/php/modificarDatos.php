<?php
// Datos del servidor
$url = "72.29.85.225";
$user = "edurappi";
$password = "PS0m1fGAC1";
$dbname = "edurappi_juandavid";

$conn = mysqli_connect($url,$user,$password,$dbname) or die('No se pudo realizar conexión'); // Conexión al servidor y mensaje de error

// Query, las variables entran directamente por el POST
$sql = "UPDATE opeReallyNew SET $_POST[campo] = '$_POST[nuevo]' WHERE email_rappi = '$_POST[email_rappi]'"; // Query, las variables entran directamente
$sql2 = "INSERT modif_opeReallyNew (email_rappi, dato_modificado) VALUES ('$_POST[email_rappi]','$_POST[campo]')";


echo '
 <script>
 function alerta(){
  alert("Datos modificados exitosamente");
  }
  </script>';
//Confirmación de registro
if ($conn->query($sql) === TRUE & $conn->query($sql2) === TRUE) {
    echo '
 <script>  alerta();  </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // Cerrar conexión
header('Location: index.html');
exit;
 ?>
