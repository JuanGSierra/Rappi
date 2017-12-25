<?php

// concexion de la base de datos y el servidor
$link = mysql_connect ("localhost","edurappi_juancho","Rappi123") or die ("<h2> Nombre de usuario o contraseña incorrectos</h2>");
$db mysql_select_db("edurappi_juandavid",$link) or die ("<h2> No es posible conectar con base de datos</h2>");

// obtener los valores del formulario

$nombre1 = $post('nombre1');
$nombre2 = $post('nombre2');
$apellido1 = $post('apellido1');
$apellido2 = $post('apellido2');
$email_rappi = $post('email_rappi');
$email_personal = $post('email_personal');
$cedula = $post('cedula');
$celular = $post('celular');
$fecha_nacimiento = $post('fecha_nacimiento');
$fecha_ingreso = $post('fecha_ingreso');
$rol = $post('rol');
$lider = $post('remoto');


// Se confirman los datos ingresados por medio de un método length

$req = (strlen($nombre1)*strlen($nombre2)*strlen($apellido1)*strlen($apellido2)*strlen($email_rappi)*strlen($email_personal)*strlen($cedula)*strlen($celular)*strlen($fecha_nacimiento)*strlen($fecha_ingreso)*strlen($rol)) or die("Formulario incompleto");

// ingreso de los datos pro medio de sqlsrv_begin_transaction

mysql_query("INSERT INTO prueba_php_2 VALUES('','$email_rappi','','$nombre1','$nombre2','$apellido1','$apellido2','$celular','$cedula','$fecha_nacimiento','$fecha_ingreso','1','','$email_personal','$rol','0','$lider')",$link) OR die ("<h2>Error cargando los datos al servidor</h2>");


?>
