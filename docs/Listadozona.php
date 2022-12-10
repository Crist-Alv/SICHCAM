<?php session_start();
$t = $_SESSION['rol_User'];
$iddatos = $_SESSION['id_User'];
if ($_SESSION['autenticado'] != 'yeah' || $t != "Administrador") {
    header('Location: ../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Tabla de Armas</title>
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

    <script language="javascript">
        function verificar() {
            if (
                document.getElementById('nomzona').value == "" ||
                document.getElementById('desczona').value == "") {
                alertaErrorVacio();
            } else {
                $(document).ready(function() {

                    $('#enviar').click(function() {

                        document.getElementById('bandera').value = "add";

                        document.sichcam.submit();

                    });
                });
            }
        }

        function alertaExitoVacio() {
            alertify.error("<p>Llene todos los campos solicitados</p>" + "<img src='../images/bien1.png'>").set({
                transition: 'flipx'
            });
        }

        function alertaExito() {
            alertify.message("<p>Se guardo exitosamente</p>" + "<img src='../images/bien1.png'>").set({
                transition: 'flipx'
            });
        }

        function alertaError() {
            alertify.error("<p>No se puedo guardar</p>" + "<img src='../images/error.png'>").set({
                transition: 'flipx'
            });

        }

        function r() {
            location.href = ("Listadozona.php");
        }
    </script>

    <script type="text/javascript" class="init">
        function Salir() {
            document.location.href = "../Config/fin.php";
        }
    </script>

</head>

<body class="theme-blue">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="media">
            <div class="media-left media-middle">
                <img class="media-object" src="../images/logo.png" width="60" height="50">
                </a>
            </div>
            <div class="media-body">
                <a class="navbar-brand" href="../index.php">ALCALDIA MUNICIPAL DE SAN RAFAEL CEDROS</a>
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
                            $sexo = $_SESSION['sexo_User'];
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
                                $usu = $_SESSION['nombre_User'];
                                echo "<h5'>CAM: $usu</h5>";
                            }
                            ?>
                        </span>
                    </li>
                    <div class="btn-group user-helper-dropdown">
                        <img data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 36px;" src="../images/iconos/keyboard_arrow_down.svg" />
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
                        <img src="../images/iconos/assignment_ind.svg" />
                        <span>Gestión de Agentes</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="agente.php">Registro de Agentes</a>
                        </li>
                        <li class="active">
                            <a href="listadoAgentes.php">Listado</a>
                        </li>
                    </ul>


                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/clipboard.svg" />
                        <span>Gestión de Armas</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="arma.php">Registro de Armas</a>
                        </li>
                        <li class="active">
                            <a href="ListadoArma.php">Listado</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/horario.svg" />
                        <span>Gestión de Horarios</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="RegistroHorario.php">Registro de Horarios</a>
                        </li>
                        <li class="active">
                            <a href="VerHorario.php">Ver Horarios</a>
                        </li>
                    </ul>

                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="../images/iconos/mundo.svg" width="25px" />
                            <span>Gestión de Zonas</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="Listadozona.php">Listado</a>
                            </li>
                        </ul>
                    </li>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/horario.svg" />
                        <span>Gestión de Usuarios</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="ListadoUser.php">Listado de Usuarios</a>
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
                    <span>UES-FMP 2022 &copy; Todos Derechos Reservados</span>
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
                    Zonas
                </h1>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form class="form-horizontal" method="post" class="form-group-sm" id="sichcam" name="sichcam">
                                <input type="hidden" name="bandera" id="bandera" />
                                <input type="hidden" name="baccion" id="baccion" value="<?php echo $iddatos; ?>" />

                                <fieldset>
                                    <legend>Registro de Zona</legend>
                                    <div class="row form-group col-md-8">
                                        <div class="col-md-4">
                                            <b>Nombre de la Zona *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/marcador-de-mapa.svg" width="25" height="25">
                                                </span>
                                                <input type="String" name="nomzona" id="nomzona" autocomplete="off" required autofocus>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <b>Dirección *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/marcador-del-mapa.svg" width="25" height="25">
                                                </span>
                                                <textarea type="String" name="desczona" id="desczona" cols="60" rows="4" style="resize: both;" autocomplete="off" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="modal-footer">
                                    <span>Los campos marcados con * son campos obligatorios</span>
                                    <button type="submit" name="enviar" onclick="verificar()" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
                                    <button type="reset" name="cancelar" class="btn btn-secondary waves-effect"><img src="../images/iconos/cancel.svg">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <form class="form-horizontal" action="" method="post" class="form-group-sm" id="sichcam" name="sichcam">
                                <input type="hidden" name="bandera" id="bandera" />
                                <input type="hidden" name="baccion" id="baccion" value="<?php echo $iddatos; ?>" />

                                <div class="table-responsive dataTable">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Nombre de la Zona</th>
                                                <th>Dirección</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            include '../Config/Conexion.php';

                                            $query_s = mysqli_query($conexion, 'SELECT * from tbl_zonas');
                                            while ($fila = mysqli_fetch_array($query_s)) {
                                            ?>

                                                <tr>
                                                    <td><?php echo $fila["nombre_zona"]; ?></td>
                                                    <td><?php echo $fila["direccion_zona"]; ?></td>
                                                    <?php include 'EditarZonaModal.php'; ?>
                                                    <td>
                                                        <button type="button" name="edit" value="Edit" class="btn btn-warning waves-effect waves-float edit_data" data-toggle="modal" data-target="#ModalEdiZona_<?php echo $ridzona = $fila['id_zona']; ?>"><img src="../images/iconos/baseline-edit-24px.svg" /></button>
                                                    </td>
                                                    <?php include 'EditarZonaModal.php'; ?>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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
                    </button>
                </h5>
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
include("../Config/Conexion.php");
if (isset($_REQUEST["enviar"])) {

    $nomzona = $_REQUEST["nomzona"];
    $desczona = $_REQUEST["desczona"];

    $result = mysqli_query($conexion, "INSERT INTO tbl_zonas(nombre_zona, direccion_zona) values(trim('$nomzona'),'$desczona')");

    if (!$result) {
        echo "<script language='javascript'>";
        echo "alertaError();";
        echo "</script>";

        echo "<script language='javascript'>";
        echo "setTimeout ('r()', 1500);";
        echo "</script>";
    } else {
        echo "<script language='javascript'>";
        echo "alertaExito();";
        echo "</script>";

        echo "<script language='javascript'>";
        echo "setTimeout ('r()', 1500);";
        echo "</script>";
    }
}
?>

</html>