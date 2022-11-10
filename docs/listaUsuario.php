<?php session_start();
$t = $_SESSION["nivelUsuario"];
$iddatos = $_SESSION["idUsuario"];
if ($_SESSION['autenticado'] != "yeah" || $t != 1) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Lista de Usuarios</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

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


    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

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

    <!-- Bootstrap Colorpicker Js -->
    <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <?php include('AgregarDModal.php'); ?>

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
        function Alertabaja(id, nombre, apellido) {

            alertify.confirm("<center>ATENCI&Oacute;N!</center>", "<center><img src='../images/warning.png' width='30' height='30'></center>" + "<center><h1>¿Desea Dar De Baja A?</h1></center>  <center><h2 style='font-style:arial';> " + nombre + " " + apellido + "  </h2></center>",



                function() {
                    alertify.success('Ok');

                    document.getElementById('bandera').value = "baja";
                    document.getElementById('baccion').value = id;
                    document.frmsica.submit();

                },

                function() {
                    alertify.error('Ha Cancelado Dar De Baja').dismissOthers()
                }).set('labels', {
                ok: 'si',
                cancel: 'no'
            }).set({
                transition: 'zoom'
            });


        }

        function r() {
            location.href = ("listaUsuario.php");
        }


        function alertaExito() {
            alertify.message("<h1>Exito</h1>" + "<p>Se dio de baja exitosamente</p>" + "<img src='../images/bien1.png'>").set({
                transition: 'flipx'
            });
        }

        function alertaError() {
            alertify.error("<h1>Error</h1>" + "<p>No se puedo dar de baja</p>" + "<img src='../images/error.png'>").dismissOthers();


        }
    </script>

    <script type="text/javascript" class="init">
        function Salir() {
            document.location.href = "../config/fin.php";
        }
    </script>

</head>

<body class="theme-blue">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="media">
            <div class="media-left media-middle">
                <img class="media-object" src="../images/logo.png" width="40" height="50">
                </a>
            </div>
            <div class="media-body">
                <a class="navbar-brand" href="../index.php">SISTEMA INFORMÁTICO PARA EL CONTROL ACADÉMICO DEL CENTRO
                    ESCOLAR CATÓLICO SAN JOSÉ</a>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <a href="docente.php" title="Ayuda">
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
                    Usuarios
                </h1>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listado de Usuarios
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action="" method="post" class="form-group-sm" id="frmsica" name="frmsica">
                                <input type="hidden" name="bandera" id="bandera" />
                                <input type="hidden" name="baccion" id="baccion" value="<?php echo $iddatos; ?>" />

                                <div class="table-responsive dataTable">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Nivel</th>
                                                <th>Ver más</th>
                                                <th>Editar</th>
                                                <th>Activa ó Desactivar</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            include("../config/conexion.php");

                                            $query_s = pg_query($conexion, "SELECT * from usuario");
                                            while ($fila = pg_fetch_array($query_s)) {
                                            ?>

                                                <tr>
                                                    <td><?php echo $fila["nombre"]; ?></td>
                                                    <td><?php echo $fila["apellido"]; ?></td>
                                                    <td><?php echo $fila["nivel"]; ?></td>
                                                    <td>
                                                        <button type="button" name="verr" value="Verr" class="btn btn-info waves-effect waves-float verr_data" data-toggle="modal" data-target="#ModalVerD_<?php echo $fila['idusuario']; ?>"><img src="../images/iconos/baseline-chrome_reader_mode-24px.svg" /></button>
                                                    </td>
                                                    <?php //include('VerUModal.php');
                                                    ?>
                                                    <td>
                                                        <button type="button" name="editt" value="Editt" class="btn btn-warning waves-effect editt_data" data-toggle="modal" data-target="#ModalEdiD_<?php echo $fila['idusuario']; ?>"><img src="../images/iconos/baseline-edit-24px.svg" /></button>
                                                    </td>
                                                    <?php //include('EditarUModal.php');
                                                    ?>
                                                    <td>
                                                        <button type="button" name="baja" value="Baja" class="btn btn-danger waves-effect waves-float baja_data" data-toggle="modal" onClick="Alertabaja('<?php echo $fila["idusuario"]; ?>','<?php echo $fila["nombre"]; ?>','<?php echo $fila["apellido"]; ?>')"><img src="../images/iconos/thumb-down.svg" /></button>
                                                    </td>

                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>

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

<?php
if (isset($_REQUEST["bandera"])) {
    $bandera = $_REQUEST["bandera"];
    $baccion = $_REQUEST["baccion"];

    switch ($i) {
        case 0:
            $estado = 0;

            include("../config/conexion.php");
            if ($bandera == "baja") {
                pg_query("BEGIN");

                $result = pg_query($conexion, "UPDATE usuario SET estado='$estado' where idusuario='$baccion'");

                if (!$result) {
                    pg_query("rollback");
                    echo "<script language='javascript'>";
                    echo "alertaError();";
                    echo "</script>";
                } else {
                    pg_query("commit");

                    echo "<script language='javascript'>";
                    echo "alertaExito();";
                    echo "</script>";
                    echo "<script language='javascript'>";
                    echo "setTimeout ('r()', 2000);";
                    echo "</script>";
                }
            }
        case 1:
            $estado = 2;

            include("../config/conexion.php");
            if ($bandera == "baja") {
                pg_query("BEGIN");

                $result = pg_query($conexion, "UPDATE usuario SET estado='$estado' where idusuario='$baccion'");

                if (!$result) {
                    pg_query("rollback");
                    echo "<script language='javascript'>";
                    echo "alertaError();";
                    echo "</script>";
                } else {
                    pg_query("commit");

                    echo "<script language='javascript'>";
                    echo "alertaExito();";
                    echo "</script>";
                    echo "<script language='javascript'>";
                    echo "setTimeout ('r()', 2000);";
                    echo "</script>";
                }
            }
    }
}
?>

</html>