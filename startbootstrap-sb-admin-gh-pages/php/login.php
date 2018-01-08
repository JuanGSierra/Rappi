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
$main= $_POST["usuario"];
$psychopass= $_POST["pass"];
/*// Testo de datos
echo $main,"<br>";
echo $psychopass,"<br>";
*/
// Consulta de ese nombre de usuario con esa contraseña
$sql = "SELECT * FROM blockbuster where main='$main' AND lego='$psychopass'";

$result = $conn->query($sql);
// Alerta cuando el login está mal,
echo '
 <script>
 function alertaBadLogin(){
   window.alert("Usuario o contrasena incorrectos");
   window.location.href="http://edurappi.info/RappiFeed/rappi/login.html";
  }
  </script>';
// Alerta cuando el login está bien
echo '
 <script>
 function alertaLogin(){
   window.alert("Bienvenido a RappiFeed");
   window.location.href="http://edurappi.info/RappiFeed/rappi/index.html";
  }
  </script>';
//Checkeo de login
if (!$row = mysqli_fetch_assoc($result)){
  echo '<script>  alertaBadLogin();  </script>'; // Negativo primero
}else{
  $_SESSION['id']= $row['id'];
  echo '<script>  alertaLogin();  </script>';
}
$conn->close(); // Cerrar conexión

 ?>
