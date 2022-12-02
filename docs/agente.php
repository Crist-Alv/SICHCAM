<?php session_start();
$t = $_SESSION['rol_User'];
$iddatos = $_SESSION['id_User'];
if ($_SESSION['autenticado'] != 'yeah' || $t != "Administrador") {
    header('Location: ../index.php');
    exit();
    ///prueba
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Registro de Agentes</title>
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
            if (document.getElementById('nombres').value == "" ||
                document.getElementById('apellidos').value == "" ||
                document.getElementById('dui').value == "" ||
                document.getElementById('codigo').value == "" ||
                document.getElementById('tel').value == "" ||
                document.getElementById('direc').value == "") {
                alertaErrorVacio();
            } else {
                $(document).ready(function() {

                    $('#enviar').click(function() {

                        var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

                        if ($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1 || caract.test($('#email').val()) == false) {
                            alertaErrorC2();

                        } else {

                            document.getElementById('bandera').value = "add";

                            document.sichcam.submit();
                        }

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

        function alertaErrorC() {
            alertify.error("<h1>Error</h1>" + "<p>Correo Electronico ya existe</p>" + "<img src='../images/error.png' width='80' height='80'>").set({
                transition: 'flipx'
            });
        }

        function alertaErrorC2() {
            alertify.error("<h1>Error</h1>" + "<p>Correo Invalido/p>" + "<img src='../images/error.png' width='80' height='80'>").set({
                transition: 'flipx'
            });
        }

        function alertaErrorCod() {
            alertify.error("<h1>Error</h1>" + "<p>El N° de placa ya existe</p>" + "<img src='../images/error.png' width='80' height='80'>").set({
                transition: 'flipx'
            });
        }

        function alertaErrorDui() {
            alertify.error("<h1>Error</h1>" + "<p>El N° de DUI ya existe</p>" + "<img src='../images/error.png' width='80' height='80'>").set({
                transition: 'flipx'
            });
        }

        function r() {
            location.href = ("agente.php");
        }
    </script>

    <script type="text/javascript" class="init">
        function Salir() {
            document.location.href = "../config/fin.php";
        }
    </script>

    <script>
        function soloLetras(e) {
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            especiales = [8, 37, 39, 46];

            tecla_especial = false
            for (var i in especiales) {
                if (key == especiales[i]) {
                    tecla_especial = true;
                    break;
                }
            }

            if (letras.indexOf(tecla) == -1 && !tecla_especial)
                return false;
        }
    </script>
</head>

<body class="theme-blue">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="media">
            <div class="media-left media-middle">
                <img class="media-object" src="../images/logo.jpg" width="40" height="50">
                </a>
            </div>
            <div class="media-body">
                <a class="navbar-brand" href="../index.php">SISTEMA INFORMÁTICO PARA EL CONTROL DE HORARIOS PARA EL CUERPO DE AGENTES MUNICIPALES</a>
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

                    <li class="active">
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
                    </li>

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
                            <a href="docs/RegistroHorario.php">Registro de Horarios</a>
                        </li>
                        <li class="active">
                            <a href="docs/VerHorario.php">Ver Horarios</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/mundo.svg" width="25px" />
                        <span>Gestión de Zonas</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docs/zona.php">Registro de Zonas</a>
                        </li>
                        <li class="active">
                            <a href="docs/Listadozona.php">Listado</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/class.svg" />
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
                            <a href="docs/seguridad.php">Opciones de Seguridad</a>
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
                    Agentes
                </h1>
            </div>
            <!--Agregar nuevo agente-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="demo-masked-input">
                                <form class="form-group" role="form" method="post" id="sichcam" name="sichcam">
                                    <input type="hidden" name="bandera" id="bandera" />
                                    <input type="hidden" name="baccion" id="baccion" value="<?php echo $iddatos; ?>" />

                                    <fieldset>
                                        <legend>Datos Personales</legend>
                                        <div class="row form-group col-md-8">

                                            <div class="col-sm-3" style="width : 158px">
                                                <b>Codigo de agente *</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <img src="../images/iconos/dn.svg">
                                                    </span>
                                                    <input type="String" style="width : 80px" name="codigo" id="codigo" autocomplete="off" autofocus>
                                                </div>
                                            </div>

                                            <div class="col-md-3" style="width : 165px">
                                                <b>N° de DUI *</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <img src="../images/iconos/dn.svg">
                                                    </span>
                                                    <input type="String" class="dui-number" style="width : 110px" name="dui" id="dui" autocomplete="off" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4" style="width : 220px">
                                                <b>Nombres *</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <img src="../images/iconos/person.svg">
                                                    </span>
                                                    <input type="String" name="nombres" id="nombres" autocomplete="off" onkeypress="return soloLetras(event)" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <b>Apellidos *</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <img src="../images/iconos/person.svg">
                                                    </span>
                                                    <input type="String" name="apellidos" id="apellidos" autocomplete="off" onkeypress="return soloLetras(event)" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group col-md-8">
                                            <div class="col-md-4">
                                                <b>Genero</b>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <img src="../images/iconos/group-24px.svg">
                                                    </span>
                                                    <input type="radio" name="genero" id="r1" class="with-gap radio-col-blue" value="Masculino" checked>
                                                    <label for="r1">Masculino</label>

                                                    <input type="radio" name="genero" id="r2" class="with-gap radio-col-blue" value="Femenino">
                                                    <label for="r2">Femenino</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3" style="width : 160px">
                                                <b>Telefono *</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <img src="../images/iconos/phone.svg">
                                                    </span>
                                                    <input type="String" class="phone-number" style="width : 110px" name="tel" id="tel" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <b>Correo *</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <img src="../images/iconos/email.svg" />
                                                    </span>
                                                    <input type="String" class="email" style="width : 150px" name="correo" id="correo" autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="col-md-5">
                                            <b>Dirección *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/03.svg">
                                                </span>
                                                <textarea type="String" name="direc" id="direc" cols="90" rows="5" style="resize: both;" autocomplete="off" required></textarea>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="modal-footer">
                                        <span>Los campos marcados con * son campos obligatorios</span>
                                        <button type="submit" name="enviar" id="enviar" onclick="verificar()" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
                                        <button type="reset" name="cancelar" class="btn btn-secondary waves-effect"><img src="../images/iconos/cancel.svg">Cancelar</button>
                                    </div>

                                    <!--Elementos Avansados -->
                                    <script src="../js/pages/forms/advanced-form-elements.js"></script>
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
            </div>
        </div>
        <!-- #END# Basic Examples -->
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

    $nombres = $_REQUEST["nombres"];
    $nombres = ucwords($nombres);
    $apellidos = $_REQUEST["apellidos"];
    $apellidos = ucwords($apellidos);
    $dui = $_REQUEST["dui"];
    $sexo = $_REQUEST["genero"];
    $codigoag = $_REQUEST["codigo"];
    $tel = $_REQUEST["tel"];
    $correo = $_REQUEST["correo"];
    $direc = $_REQUEST["direc"];
    $activo = 1;

    $rolUser = "Agente";
    $estado = 1;

    $clave = $apellidos . rand(0, 100) . rand(0, 500);
    $clave = base64_encode($clave);

    $query_s2 = mysqli_query($conexion, "SELECT * FROM tbl_agentes where correo_agente='$correo'");
    $rows = mysqli_num_rows($query_s2);

    $query_s3 = mysqli_query($conexion, "SELECT * FROM tbl_usuario where correo_User='$correo'");
    $rows2 = mysqli_num_rows($query_s3);

    $query_s4 = mysqli_query($conexion, "SELECT * FROM tbl_agentes where codigo_cam_agente ='$codigoag'");
    $rows3 = mysqli_num_rows($query_s4);

    $query_s5 = mysqli_query($conexion, "SELECT * FROM tbl_agentes where dui_agente ='$dui'");
    $rows4 = mysqli_num_rows($query_s5);

    if ($rows4 == 0) {
        if ($rows3 == 0) {
            if ($rows == 0 && $rows2 == 0) {

                $result = mysqli_query($conexion, "INSERT INTO tbl_agentes(nombre_agente, apellido_agente, dui_agente, sexo_agente, codigo_cam_agente, telefono_agente, correo_agente, direccion, activo) values(trim('$nombres'),'$apellidos','$dui','$sexo','$codigoag','$tel','$correo','$direc','$activo')");

                if (!$result) {
                    echo "<script language='javascript'>";
                    echo "alertaError();";
                    echo "</script>";

                    echo "<script language='javascript'>";
                    echo "setTimeout ('r()', 1500);";
                    echo "</script>";
                } else {
                    //Se crea una cuenta de usuario al agente registrado
                    $result2 = mysqli_query($conexion, "INSERT INTO tbl_usuario(nombre_User, sexo_User, correo_User, rol_User, pass_User, estado) values(trim('$nombres'),'$sexo','$correo','$rolUser','$clave','$estado')");

                    echo "<script language='javascript'>";
                    echo "alertaExito();";
                    echo "</script>";

                    echo "<script language='javascript'>";
                    echo "setTimeout ('r()', 1500);";
                    echo "</script>";
                }
            } else {
                echo "<script language='javascript'>";
                echo "alertaErrorC();";
                echo "</script>";
            }
        } else {
            echo "<script language='javascript'>";
            echo "alertaErrorCod();";
            echo "</script>";
        }
    } else {
        echo "<script language='javascript'>";
        echo "alertaErrorDui();";
        echo "</script>";
    }
}
?>

</html>