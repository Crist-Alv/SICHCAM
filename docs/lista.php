<?php
//para que te funcione la tabla si la quitas te jodistes
include 'include/config.php';
require_once 'include/functions.php';

session_start();
if ($_SESSION['autenticado'] != 'yeah') {
    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Horario-Tabla</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />

<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Select Plugin Js -->
<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Bootstrap Colorpicker Js -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

<!-- Dropzone Plugin Js -->
<script src="../plugins/dropzone/dropzone.js"></script>

<!-- Input Mask Plugin Js -->
<script src="../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

<!-- Multi Select Plugin Js -->
<script src="../plugins/multi-select/js/jquery.multi-select.js"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- noUISlider Plugin Js -->
<script src="../plugins/nouislider/nouislider.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="../js/admin.js"></script>
		
    <style type="text/css">
        .envolcentro {
            display: table-cell;
            text-align: center;
            vertical-align: middle;

        }

        .envolcentro * {
            vertical-align: middle;
        }

        .envolcentro {
            display: block;
        }

        .envolcentro span {
            display: inline-block;
            height: 100%;
            width: 1px;
        }
    </style>

    <script type="text/javascript" class="init">
        function Salir() {
            document.location.href = "../config/fin.php";
        }
    </script>

    <script>
        function verificar() {


            var hora1 = document.getElementById('tim1').value;
            var hora1 = hora1.replace(/\D/g, '');

            var hora2 = document.getElementById('tim2').value;
            var hora2 = hora2.replace(/\D/g, '');



            hora1 = parseInt(hora1);
            hora2 = parseInt(hora2);




            if (document.getElementById('materia').value == "" ||
                document.getElementById('days-chose').value == "" ||
                document.getElementById('tim1').value == "" ||
                document.getElementById('tim2').value == "" ||
                document.getElementById('nivelE').value == ""




            ) {

                alertaError();

            } else {

                var ver = document.getElementById('days-chose').value;
                var cantidad = ver.length;
                if (cantidad > 4 || cantidad < 3) { //validacion para que no se pueda ingresar mas de dos dias a la semana


                    alertaError2();
                } else {

                    if (hora1 >= hora2 || (hora2 - hora1) == 100 || (hora2 - hora1) == 300 || (hora2 - hora1) == 400 || (hora2 - hora1) == 500 || (hora2 - hora1) == 600 || (hora2 - hora1) == 700 || (hora2 - hora1) == 800 || (hora2 - hora1) == 900 || (hora2 - hora1) == 1000 || (hora2 - hora1) == 1100) {
                        alertaError3();

                    } else {

                        document.getElementById('bandera').value = "add";

                        document.frmcdi.submit();
                    }

                } ////////////////////////////////


            }
        }
    </script>
    <!-- include alertify.css -->
    <link rel="stylesheet" href="../alertas/build/css/alertify.css">

    <!-- include boostrap theme  -->
    <link rel="stylesheet" href="../alertas/build/css/themes/bootstrap.css">

    <!-- include alertify script -->
    <script src="../alertas/build/alertify.js"></script>

    <script type="text/javascript">
        //override defaults
        alertify.defaults.transition = "slide";
        alertify.defaults.theme.ok = "btn btn-primary";
        alertify.defaults.theme.cancel = "btn btn-secondary";
        alertify.defaults.theme.input = "form-control";
    </script>
</head>

<body class="theme-blue">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="media">
            <div class="media-left media-middle">
                <img class="media-object" src="../images/logo.png" width="40" height="50">
            </div>
            <div class="media-body">
                <a class="navbar-brand" href="../index.php">SISTEMA INFORMÁTICO PARA EL CONTROL ACADÉMICO DEL CENTRO
                    ESCOLAR CATÓLICO SAN JOSÉ</a>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <a href="" title="Ayuda">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <img class="bg-white" src="../images/iconos/help_outline.svg" />
                            </div>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <figure>

                        <!--aqui va la foto del usuario -->

                        <?php

                        if (isset($_SESSION)) {
                            $sexo = $_SESSION['sexoT'];
                            $man = '../images/user.png';
                            $woman = '../images/userWoman.png';
                            $user = 'user-picture';
                            $class = 'img-responsive img-circle center-box';
                            $style = 'max-width: 110px;';
                            if (isset($_SESSION)) {
                                if ($sexo == 'Masculino') {
                                    echo '<img src="'.$man.'" alt="'.$user.'" class="'.$class.'" >';
                                } else {
                                    if ($sexo == 'Femenino') {
                                        echo '<img src="'.$woman.'" alt="'.$user.'" class="'.$class.'" >';
                                    }
                                }
                            }
                        }
                        ?>
                    </figure>
                </div>
                <div class="info-container">
                    <li style="color:#fff; cursor:default;">
                        <span class="all-tittles">
                            <?php if (isset($_SESSION)) {
                            $usu = $_SESSION['nombresT'];
                            echo "$usu";
                        }
                            ?>
                        </span>
                    </li>
                    <div class="btn-group user-helper-dropdown">
                        <img data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" src="../images/iconos/keyboard_arrow_down.svg" />
                        <ul class="dropdown-menu pull-right">
                            <li><a data-toggle="modal" data-target="#ModalCerrar"><img src="../images/iconos/input.svg" />Cerrar Sesión</a></li>
                            <li><a href="perfil.php"><img src="../images/iconos/settings.svg" />Configuración de Cuenta</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENÚ</li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/face.svg" />
                        <span>Alumnos</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="alumno.php">Registro de Alumnos</a>
                        </li>
                        <li class="active">
                            <a href="altaA.php">Dar de Alta</a>
                        </li>
                        <li class="active">
                                <a href="ReportesA.php">Reportes</a>
                            </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/assignment_ind.svg" />
                        <span>Docentes</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docente.php">Registro de Docente</a>
                        </li>
                        <li class="active">
                            <a href="altaD.php">Dar de Alta</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/clipboard.svg" />
                        <span>Notas</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                        <a href="nota.php">Registro de Notas</a>
                        </li>
                    </ul>

                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="../images/iconos/horario.svg" />
                            <span>Horarios</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="RegistroHorario.php">Registro de Horarios</a>
                            </li>                            
                        </ul>
                    </li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/materia.svg" />
                        <span>Materias</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="materia.php">Registro de Materias</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/security.svg" />
                        <span>Seguridad</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="seguridad.php">Opciones de Seguridad</a>
                        </li>
                    </ul>
                    <a href="acercade.php">Acerca de</a>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <img src="../images/minerva2.png" width="30" height="50" />
                <div class="copyright">
                    <span>UES-FMP 2019 &copy; Todos Derechos Reservados</span>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="row mb-12">  
          <!-- menu -->
    <div id="menu" class="col-md-6">
      <div class="container">
          <a class="btn btn-warning" href="RegistroHorario.php"><img src="../images/iconos/today.svg" alt="x" />Nuevo Horario</a>
      </div>
    </div>
    <!-- menu -->

<div  class="col-md-12">
    <!-- container -->
      
         <div class="panel panel-info" style="margin-top: 10px;">
           <div class="panel-heading"><img src="../images/iconos/date_range.svg" alt="x" />Lista de Horarios</div>
           <div class="panel-body nopadding">
                <?php
                    if (isset($_GET['page'])) {
                        horariostable($_GET['page']);
                    } else {
                        horariostable(1);
                    }
                ?>
           </div>
         </div>
     
    <!-- container -->

    <!-- apend data -->
    <div id="appenddata"></div>
    <!-- apend data -->


<!-- append modal set data -->
<div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Agregar Tarea</h4>
      </div>
      <div class="modal-body">
        
        <form id="taskfrm">
           <label>Tarea</label>
           <input class="form-control" type="text" id="nametask" >
           <label>Color:</label>
           <select class="form-control" id="idcolortask">
              <option value="purple-label">Purpura</option>
              <option value="red-label">Rojo</option>
              <option value="blue-label">Azul</option>
              <option value="pink-label">Rosa</option>
              <option value="green-label">Verde</option>
           </select> 
          <input id="tede" type="hidden" name="tede" >
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="savetask btn btn-success"><img src="../images/iconos/save.svg"> Guardar</button>
        <button type="button" class="canceltask btn btn-danger" data-dismiss="modal"><img src="../images/iconos/close.svg">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- append modal set data -->
                </div><!--div row de 12-->
            
      </div>      
        </div>
           

    </section>

    

<!-- append modal set data -->

    <!-- alert danger -->
    <div id="alert-error"><i class="fa fa-times fa-2x"></i></div>
    <!-- alert danger -->
  <!-- script -->
  <script src="../js/script.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<!-- datetimepicker -->
<script src="../js/moment-with-locales.js"></script>
<script src="../js/bootstrap-datetimepicker.js"></script>
<!-- validate -->
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/additional-methods.min.js"></script>
<!-- script -->
<script src="../js/scripts-custom.js"></script>  
        </body>
</html>

