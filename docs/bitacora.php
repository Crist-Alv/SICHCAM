<?php
session_start();
if ($_SESSION['autenticado'] != 'yeah') {
    header('Location: login.php');
    exit();
}

include_once '../config/conexion.php';
try {
    if ($_SESSION['nivelUsuario'] == '1' or $_SESSION['nivelUsuario'] == '2') {
        $profesor = $_SESSION['idUsuario'];
        $query_s = pg_query($conexion, "SELECT * FROM usuario WHERE idusuario='$profesor'");

        while ($row = pg_fetch_array($query_s)) {
            $nombre = $row['nombre'];
            $ape = $row['apellido'];
        }
    }
} catch (Exception $exc) {
    echo '<script>swal("EROR", "Favor revisar los datos e intentar nuevamente", "error");</script>';
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Bitacora - SICACECSJ</title>
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

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />



    <!-- ************-->

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
            document.location.href = "config/fin.php";
        }
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
                        <a href="InicioP.pdf" title="Ayuda">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <img class="bg-white" src="images/iconos/help_outline.svg" />
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
                                    echo '<img src="' . $man . '" alt="' . $user . '" class="' . $class . '" >';
                                } else {
                                    if ($sexo == 'Femenino') {
                                        echo '<img src="' . $woman . '" alt="' . $user . '" class="' . $class . '" >';
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
                    </li>
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

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/horario.svg" />
                        <span>Horarios</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="RegistroHorario.php">Registro de Horarios</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/materia.svg" />
                        <span>Materias</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="materia.php">Registro de Materias</a>
                        </li>
                    </ul>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="../images/iconos/security.svg" />
                            <span>Seguridad</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="seguridad.php">Opciones de Seguridad</a>
                            </li>
                        </ul>
                    </li>
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

            <!-- validacion por genero -->
            <div class="body">
                <!--inicio de content wrapper mi codigo-->
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <!--Comienza container Fluid-->

                                    <!--Dimencion de la pantalla-->
                                    <!--Encabezado de la pantalla-->
                                    <div class="row-fluid" align="center">
                                        <div class="span6">
                                            <h2 class="text-info">
                                                <img src="../images/buscar.gif" width="80" height="80">
                                                Bitacora.
                                            </h2>
                                            <script src="../js/buscaresc.js"></script>
                                        </div>
                                        <div class="span6">
                                            <form name="form1" method="post" action="">
                                                <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="buscar" id="filtrar" class="form-control" autocomplete="off" autofocus placeholder="Buscar: usuario,fecha,hora">
                                                    </div>
                                                </div>

                                            </form>
                                            <br>
                                        </div>
                                    </div>
                                    <!--Fin de Encabezado de la pantalla-->
                                    <br>
                                    <!--Comienza tabla-->
                                    <div class="panel-body">

                                        <table class="table table-striped table-condensed table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="70" class="text-center">Usuario</th>
                                                    <th width="200" class="text-center">Actividad</th>
                                                    <th width="70" class="text-center">Fecha</th>
                                                    <th width="70" class="text-center">Hora</th>

                                                </tr>
                                            </thead>
                                            <tbody class="buscar">
                                                <?php
                                                $pame =  pg_query($conexion, "SELECT * FROM bitacora INNER JOIN usuario ON bitacora.idusuario=usuario.idusuario");
                                                while ($row = pg_fetch_array($pame)) {
                                                    $dia = date_create($row['fecha']);
                                                    $hora = date_create($row['hora'])
                                                ?>
                                                    <tr>

                                                        <td class="text-center"><?php echo $row['nombre']; ?></td>
                                                        <td><?php echo $row['actividad']; ?></td>
                                                        <td class="text-center"><?php echo date_format($dia, 'd-m-Y'); ?></td>
                                                        <td class="text-center"><?php echo date_format($hora, 'h:i:s'); ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>


                                    </div>
                                    <!--termina tabla-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin de Dimencion de la pantalla-->

                </div>
                <!--Fin de content wrapper mi codigo-->

                <!--este es para pasar los parametros al modal-->
                <hr class="sidebar-divider d-none d-md-block">
            </div>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/ui/animations.js"></script>
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
                    <img src="images/warning.png" />
                    <hr class="sidebar-divider d-none d-md-block">
                    Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <li onClick="Salir()" data-placement="bottom" class="btn btn-primary">Cerrar sesión</li>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<!-- datetimepicker -->
<script src="../js/moment-with-locales.js"></script>
<script src="../js/bootstrap-datetimepicker.js"></script>
<!-- validate -->
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/additional-methods.min.js"></script>
<script src="../js/script2.js"></script>
<!-- script -->

</html>