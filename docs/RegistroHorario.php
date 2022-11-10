<?php session_start();
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
                        <a href="HorarioA.pdf" title="Ayuda">
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
                        <li class="active">
                                <a href="ReportesNota.php">Reporte de Notas</a>
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
            <div class="block-header">
                <h1>
                    Horario
                </h1>
            </div>
                    <!-- menu -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 clearfix jsdemo-notification-button">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                            <div class="col-md-10">
                            <button class="btn btn-warning" data-toggle="modal" data-target="#myModal"><img src="../images/iconos/today.svg" alt="x" />Nuevo Horario</button>
                            <a class="btn btn-primary" href="lista.php"><img src="../images/iconos/date_range.svg" alt="x" />Lista de Horarios</a>
                            </div>
                        </div>
                    </div>
                    <!-- menu -->


                    <!-- container -->
                    <div class="container">
                        <div id="clockindex" class="col-sm-12 text-center">
                            <i class="fa fa-calendar-plus-o icon-clock-index animated infinite pulse" aria-hidden="true"></i>
                        </div>
                        <div id="mynew" class="col-sm-12">

                        </div>
                    </div>
                    <!-- container -->



                    <!-- modal nuevo horario -->
                    <div class="modal fade animated bounceInLeft" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close cancel-new" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                                    <h4 class="modal-title" id="myModalLabel"><img src="../images/iconos/today.svg" alt="x" />Crear Horario</h4>
                                </div>
                                <div class="modal-body">

                                    <form id="horariofrm">
                                        <label>Docente</label>
                                        <select class="form-control" name="nombre" style="width: 100%; height:36px;">
                                            <option>Seleccionar</option>
                                            <option value="Carlos Jose Molina Sosa">Carlos Jose Molina Sosa</option>
                                            <option value="Flor de Maria Torres Hernandez">Flor de Maria Torres Hernandez</option>
                                            <option value="Marlon Jose Alvarado Perez">Marlon Jose Alvarado Perez</option>
                                            <option value="Rosa Maria Perez Melano">Rosa Maria Perez Melano</option>
                                            <option value="Angelina Angelina Isabel Mira Montes">Angelina Isabel Mira Montes</option>
                                            <option value="Hugo Alexander Orantes Andrade">Hugo Alexander Orantes Andrade</option>
                                        </select>

                                        <label>Grado</label>
                                        <select class="form-control" name="grado" style="width: 100%; height:36px;">
                                            <option>Seleccionar</option>
                                            <option value="Primero">Primero</option>
                                            <option value="Segundo">Segundo</option>
                                            <option value="Tercero">Tercero</option>
                                            <option value="Cuarto">Cuarto</option>
                                            <option value="Quinto">Quinto</option>
                                            <option value="Sexto">Sexto</option>
                                            <option value="Septimo">Septimo</option>
                                            <option value="Octavo">Octvavo</option>
                                            <option value="Noveno">Noveno</option>
                                        </select>
                                        <label>Sección</label>
                                        <select class="form-control" name="seccion" style="width: 100%; height:36px;">
                                            <option>Seleccionar</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>

                                        </select>
                                        <label>Descripción:</label>
                                        <textarea class="form-control" name="descripcion" rows="3"></textarea>
                                        <label>Dias:</label>
                                        <div id="days-list" class="col-sm-12">
                                            <a data-day="1" class="day-option">Lunes</a>
                                            <a data-day="2" class="day-option">Martes</a>
                                            <a data-day="3" class="day-option">Miercoles</a>
                                            <a data-day="4" class="day-option">Jueves</a>
                                            <a data-day="5" class="day-option">Viernes</a>
                                            <a data-day="6" class="day-option">Sabado</a>
                                            <a data-day="7" class="day-option">Domingo</a>
                                        </div>
                                        <input id="days-chose" class="form-control" type="text" name="days">
                                        <label>Inicio:</label>
                                        <input class="form-control" type="text" id="time1" name="tiempo1">
                                        <label>Final:</label>
                                        <input class="form-control" type="text" id="time2" name="tiempo2">
                                        <label>Dividir Entre:</label>
                                        <select class="form-control" name="minutos">
                                            <option></option>
                                            <option value="35">35 Minutos</option>
                                            <option value="45">45 minutos</option>
                                            <option value="60">1 Hora</option>
                                        </select>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="create-horario btn btn-success"><img src="../images/iconos/save.svg">Crear</button>
                                    <button type="button" class="cancel-new btn btn-danger" data-dismiss="modal"><img src="../images/iconos/close.svg">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal nuevo horario -->


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
                                        <label>Materia</label>
                                        <input class="form-control" type="text" id="nametask">
                                        <label>Color:</label>
                                        <select class="form-control" id="idcolortask">
                                            <option value="purple-label">Purpura</option>
                                            <option value="red-label">Rojo</option>
                                            <option value="blue-label">Azul</option>
                                            <option value="pink-label">Rosa</option>
                                            <option value="green-label">Verde</option>
                                        </select>
                                        <input id="tede" type="hidden" name="tede">
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="savetask btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
                                    <button type="button" class="canceltask btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- append modal set data -->
                
        </div>


    </section>





    <!-- alert danger -->
    <div id="alert-error"><i class="fa fa-times fa-2x"></i></div>
    <!-- alert danger -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- datetimepicker -->
    <script src="../js/moment-with-locales.js"></script>
    <script src="../js/bootstrap-datetimepicker.js"></script>
    <!-- validate -->
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/additional-methods.min.js"></script>
    <script src="../js/script.js"></script>
    <!-- script -->
</body>
<!-- Modal Cerrar Sesion -->
<div class="modal fade" id="ModalCerrar" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button></h5>
            </div>
            <div class="modal-body">
                <div class="envolcentro">
                    <img src="../images/warning.png" />
                    <hr class="sidebar-divider d-none d-md-block">
                    Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" data-placement="bottom" onClick="Salir()">Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>
</html>