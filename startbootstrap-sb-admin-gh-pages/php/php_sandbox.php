  <?php
  // Datos del servidor
  $url = "72.29.85.225";
  $user = "edurappi";
  $password = "PS0m1fGAC1";
  $dbname = "edurappi_juandavid";

  $conn = mysqli_connect($url,$user,$password,$dbname) or die('No se pudo realizar conexión'); // Conexión al servidor y mensaje de error

  //$dato1 = $dato2 = $dato3 = $dato4 = ""; // declaración de variables

  // A las variables se le asignan los datos del formularios/*
  $dato1 = $_POST['dato1'];
  $dato2 = $_POST['dato2'];
  $dato3 = $_POST['dato3'];
  $dato4 = $_POST['dato4'];
  //Variables to string para correos
  $Sdato1 = (string)$dato1;
  $Sdato2 = (string)$dato2;
  $Sdato3 = (string)$dato3;
  $Sdato4 = (string)$dato4;


   // Test de datos

  echo $Sdato1;
  echo $Sdato2;
  echo $Sdato3;
  echo $Sdato4;

  // FUnción para validar Correo enviado
  echo '
   <script>
   function alertaCorreo(){
    alert("Correo enviado exitosamente");
    }
    </script>';

   // Envío de correos
   // DESTINATARIO                      asunto cuerpo header
   if (@mail("david.ramirez@rappi.com",$Sdato1,$Sdato2,$Sdato)) {
   echo('<script>  alertaCorreo();  </script>');
   } else {
   echo('<p>Mail could not be sent.</p>');
  };

  echo '
   <script>
   function alertaSQL(){
    alert("Datos enviados exitosamente");
    }
    </script>';


  // Query, las variables entran directamente por el POST
  $sql = "INSERT INTO php_sandbox (dato1, dato2, dato3 ,dato4) VALUES ('$_POST[dato1]', '$_POST[dato2]', '$_POST[dato3]', '$_POST[dato4]')"; // Query, las variables entran directamente




  //Confirmación de registro
  if ($conn->query($sql) === TRUE) {
      echo '
   <script>  alertaSQL();  </script>';
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close(); // Cerrar conexión
   ?>
