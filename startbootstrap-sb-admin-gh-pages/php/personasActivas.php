<?php


echo'<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf8_spanish_ci" />
<title>Personas Activas</title></head>
<body>';

$url = "72.29.85.225";
$user = "edurappi";
$password = "PS0m1fGAC1";
$dbname = "edurappi_juandavid";

$db = mysqli_connect($url,$user,$password,$dbname) or die('NOPE');

$prueba = "SELECT email_rappi,nombre1,nombre2, apellido1, apellido2, celular, fecha_ingreso, rol, modalidad, lider, turno, dia_d, pais from opeReallyNew";

$resultado = $db->query($prueba);
echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0' >
  <tr>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Correo Rappi</th>
    <th>Celular</th>
    <th>Fecha Ingreso</th>
    <th>Rol</th>
    <th>Modalidad</th>
    <th>Lider</th>
    <th>Turno</th>
    <th>Dia de Descanso</th>
    <th>Pais</th>
  </tr>";

while($row = $resultado->fetch_assoc()){

  echo "<tr>
    <td>" . $row["nombre1"]. " " . $row["nombre2"] . "</td>
    <td>" . $row["apellido1"]. " " . $row["apellido2"] . "</td>
    <td> " . $row["email_rappi"]. "</td>
    <td> " . $row["celular"]. "</td>
    <td> " . $row["fecha_ingreso"]. "</td>
    <td> " . $row["rol"]. "</td>
    <td> " . $row["modalidad"]. "</td>
    <td> " . $row["lider"]. "</td>
    <td> " . $row["turno"]. "</td>
    <td> " . $row["dia_d"]. "</td>
    <td> " . $row["pais"]. "</td>
  </tr> "
;

}
echo '
</table>
</body>
</html>';
 ?>
