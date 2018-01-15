<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Rappi Feed</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="../Imagenes/favicon.png"/>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" >

    <a class="navbar-left" href="../index.html"><img src="../Imagenes/rappi_header.png" alt="Rappi Feed"></a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultar">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseConsultar" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-search"></i>
            <span class="nav-link-text">Consultar</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseConsultar">
            <li>
              <a href="../GrupoConsultar/buscarPersona.php">Buscar Persona</a>
            </li>
            <!--
            <li>
              <a href="GrupoConsultar/consultarEquipo.html">Consultar Equipo</a>
            </li>
          -->
            <li>
              <a href="../GrupoConsultar/personasActivas.php">Personas Activas</a>
            </li>
            <li>
              <a href="../GrupoConsultar/consultarLideres.php">Consultar Líderes</a>
            </li>
            <!--
            <li>
              <a href="GrupoConsultar/todosLosEquipos.html">Todos los Equipos</a>
            </li>

            <li>
              <a href="GrupoConsultar/consultarHorario.php">Consultar Horario</a>
            </li>
            -->
            <li>
              <a href="../GrupoConsultar/misDatos.php">Mis Datos</a>
            </li>
            <!--
            <li>
              <a href="GrupoConsultar/misAuditorias.html">Mis Auditorias</a>
            </li>

            <li>
              <a href="GrupoConsultar/misHorasExtras.php">Mis Horas Extras</a>
            </li>
            <li>
              <a href="GrupoConsultar/solicitarHorasExtras.html">Solicitar Horas Extras</a>
            </li>
            -->
          </ul>
        </li>
        <!--

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Auditorias">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAuditorias" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-gavel"></i>
            <span class="nav-link-text">Auditorias</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAuditorias">
            <li>
              <a href="GrupoAuditorias/auditar.html">Auditar</a>
            </li>
            <li>
              <a href="GrupoAuditorias/consultarAuditorias.html">Consultar Auditorias</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administrativo">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseConsultasEspeciales" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-plus-circle"></i>
            <span class="nav-link-text">Consultas Especiales</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseConsultasEspeciales">
            <li>
              <a href="GrupoConsultasEspeciales/validarHorasExtras.html">Validar Horas Extras</a>
            </li>
            <li>
              <a href="GrupoConsultasEspeciales/todasLasAuditorias.html">Todas las Auditorias</a>
            </li>
            <li>
              <a href="GrupoConsultasEspeciales/personasInactivas.php">Personas Inactivas</a>
            </li>
            <li>
              <a href="GrupoConsultasEspeciales/consolidadoDeStrikes.html">Consolidado de Strikes</a>
            </li>
            <li>
              <a href="GrupoConsultasEspeciales/misDatosEspecial.php">Mis Datos </a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administrativo">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAdministrativo" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Administrativo</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAdministrativo">
            <li>
              <a href="GrupoAdministrativo/ingresarDatos.html">Ingresar Datos</a>
            </li>
            <li>
              <a href="GrupoAdministrativo/modificarDatos.html">Modificar Datos</a>
            </li>
            <li>
              <a href="GrupoAdministrativo/finalizacionDelContrato.html">Finalización de Contrato</a>
            </li>
            <li>
              <a href="GrupoAdministrativo/horasExtrasTotal.php">Horas Extras Total</a>
            </li>
          </ul>
        </li>
      -->

    </ul>

      <!-- Reductor de la barra deslizante -->

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Salir</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="card card-search">
        <div class = "card-header"><b>Mis datos</b></div>
          <div class = "card-body">
            <form method="post" action="misDatos.php">

              <div class="form-group">
                <div class = "form-row">
                  <div class="col-md-12">
                    <label for="porCorreo">Ingresa tu correo</label>
                    <div class="input-group">
                        <input class="form-control" name="email_rappi" id="email_rappi" type="email" aria-describedby="emailHelp">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class = "form-row">
                  <div class="col-md-12">
                    <label for="porCelular">Ingresa tu cédula</label>
                    <div class="input-group">
                      <input class="form-control" name="cedula" id="cedula" type="number" aria-describedby="numberHelp">
                      <span class="input-group-btn">
                        <!--<a class="btn btn-primary" href="http://edurappi.info/RappiFeed/rappi/buscarPersona.php">Buscar</a>-->
                        <button type="submit" class="btn btn-primary" name="btnPorCelular">Buscar</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user-circle-o"></i>Datos</div>
        <div class="card-body">

        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Fecha de Ingreso</th>
                <th>Rol</th>
                <th>Modalidad</th>
                <th>Lider</th>
                <th>Turno</th>
                <th>Dia de Descanso</th>
                <th>Pais</th>
                <th>Cedula</th>
              </tr>
            </thead>

            <tbody>
              <?php
              // Guarda los valores que estan en los input de busqueda
                $_correo = $_POST["email_rappi"];
                $_cedula = $_POST["cedula"];

                // conexión con la base de datos
                $url = "72.29.85.225";
                $user = "edurappi";
                $password = "PS0m1fGAC1";
                $dbname = "edurappi_juandavid";

                $db = mysqli_connect($url,$user,$password,$dbname) or die('NOPE');

                // si la variable de correo no esta vacia, busca por correo
                if(!empty($_correo) &&!empty($_cedula) ){

                  $_correo = (String)$_correo; // castea el correo a string, de lo consultarHorario
                                                // mysql cuenta la @ como sintax error
                  $prueba = "SELECT * from opeReallyNew where email_rappi = '$_correo' AND cedula =$_cedula";

                  $resultado = $db->query($prueba);


                  while($row = $resultado->fetch_assoc()){

                      echo "<tr>
                      <td> " . $row["nombre1"]. " " . $row["nombre2"] . "</td>
                      <td> " . $row["apellido1"]. " " . $row["apellido2"] . "</td>
                      <td> " . $row["email_rappi"]. "</td>
                      <td> " . $row["celular"]. "</td>
                      <td> " . $row["fecha_ingreso"]. "</td>
                      <td> " . $row["rol"]. "</td>
                      <td> " . $row["modalidad"]. "</td>
                      <td> " . $row["lider"]. "</td>
                      <td> " . $row["turno"]. "</td>
                      <td> " . $row["dia_d"]. "</td>
                      <td> " . $row["pais"]. "</td>
                      <td> " . $row["cedula"]. "</td>
                      </tr> ";
                    }

                }
                ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>


    </div>
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
  <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
            <small >Copyright ©Rappi <b>Todos los derechos reservados</b></small>
        </div>
      </div>
  </footer>
    <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seguro que quieres Salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="../login.html">Salir</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!------------------------------------------------------------->
    <script src="../js/imagen.js"></script>
    <!------------------------------------------------------------->


  </div>
</body>

</html>
