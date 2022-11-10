<?php /*session_start();
$t = $_SESSION['nivelUsuario'];
$iddatos = $_SESSION['idUsuario'];
if ($_SESSION['autenticado'] != 'yeah' || $t != 1) {
    header('Location: ../index.php');
    exit();
}*/
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

    <?php include 'AgregarDModal.php'; ?>

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
            location.href = ("docente.php");
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
                        <img src="../images/iconos/materia.svg" />
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
                        <img src="../images/iconos/horario.svg" />
                        <span>Gestión de Usuarios</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docs/RegistroUser.php">Registro de Usuarios</a>
                        </li>
                        <li class="active">
                            <a href="docs/ListadoUser.php">Listado</a>
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
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form class="form-horizontal" action="" method="post" class="form-group-sm" id="frmsica" name="frmsica">
                                <input type="hidden" name="bandera" id="bandera" />
                                <input type="hidden" name="baccion" id="baccion" value="<?php echo $iddatos; ?>" />

                                <?php
$fecha_min = date("Y-m-d");
$fecha_min = date("Y-m-d", strtotime($fecha_min . "- 80 year"));
$fecha_max = date("Y-m-d");
$fecha_max = date("Y-m-d", strtotime($fecha_max . "- 18 year"));
?>

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

        function limpia() {
            var val = document.getElementById("miInput").value;
            var tam = val.length;
            for (i = 0; i < tam; i++) {
                if (!isNaN(val[i]))
                    document.getElementById("miInput").value = '';
            }
        }
    </script>
      
<script type="text/javascript" src="../js/deptoD.js"></script>

    <!--Agregar nuevo docente Modal -->
    
                <div class="modal-body">
                    <div class="demo-masked-input">
                        <div class="row clearfix">
                            <form name="datos" id="datos" action="../docs/AgregarDocente.php" method="post">
                                <!--1-->
                                <fieldset>
                                    <legend>Datos Personales</legend>
                                    <div class="row form-group col-md-8">

                                        <div class="col-md-4">
                                            <b>Nombres *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/person.svg">
                                                </span>
                                                <input type="String" name="nombresd" autocomplete="off" onkeypress="return soloLetras(event)" onblur="limpia()" value="<?= (isset($_POST['nombresd'])) ? $_POST['nombresd'] : ""; ?>" required autofocus>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <b>Apellidos *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/person.svg">
                                                </span>
                                                <input type="String" name="apellidosd" autocomplete="off" onkeypress="return soloLetras(event)" onblur="limpia()" value="<?= (isset($_POST['apellidosd'])) ? $_POST['apellidosd'] : ""; ?>" required autofocus>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <b>Fecha de nacimiento *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/date_range.svg">
                                                </span>
                                                <div class="form-control input-sm">
                                                    <input type="date" name="fechanac" autocomplete="off" value="<?= (isset($_POST['fechanac'])) ? $_POST['fechanac'] : ""; ?>">
                                                </div>
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
                                            <input type="radio" name="" id="" class="with-gap radio-col-blue" value="Masculino" checked>
                                            <label for="">Masculino</label>

                                            <input type="radio" name="" id="" class="with-gap radio-col-blue" value="Femenino">
                                            <label for="" class="m-l-20">Femenino</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                            <b>Tipo de Agente *</b>
                                            <div class="input-group">
                                                <select id="" name="" class="form-control show-tick" style="width: 100%;">
                                                <option value="" disabled selected>Seleccione...</option>
                                                <option value="">Jefe</option>
                                                <option value="">Agente</option>    
                                            </select>
                                            </div>
                                        </div>
                                    

                                        <div class="col-md-3">
                                            <b>Telefono *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/phone.svg">
                                                </span>
                                                <input type="String" class="phone-number" placeholder="Ex: 0000-0000" name="tel" autocomplete="off" value="<?= (isset($_POST['tel'])) ? $_POST['tel'] : ""; ?>" required autofocus>
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
                                            <textarea type="String" name="dir" cols="90" rows="5" style="resize: both;" autocomplete="off" value="<?= (isset($_POST['dir'])) ? $_POST['dir'] : ""; ?>" required autofocus></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                        </div>
                    </div>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="modal-footer">
                    <span>Los campos marcados con * son campos obligatorios</span>
                    <button type="submit" name="agregar" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
                    <button type="reset" name="cancelar" class="btn btn-secondary waves-effect"><img src="../images/iconos/cancel.svg">Cancelar</button>
                </div>
                </form>

    <script>
        function validarNro(e) {
            var key;
            if (window.event) // IE
            {
                key = e.keyCode;
            } else if (e.which) // Netscape/Firefox/Opera
            {
                key = e.which;
            }

            if (key < 48 || key > 57) {
                if (key == 46 || key == 8) // Detectar . (punto) y backspace (retroceso)
                {
                    return true;
                } else {
                    return false;
                }
            }
            return true;
        }
       
        function FormatDateField(xField) {
            var theText = xField.value;
            theText = theText.replace(/\//gi, "");
            if (!(theText.length == 8 || theText.length == 8)) {
                alert("Fecha inv�lida, debe ser en formato DD/MM/AAAA");
                xField.focus();
                return false;
            }
            theText = theText.substring(0, 2) + "/" + theText.substring(2, 4) + "/" + theText.substring(4, 8);
            xField.value = theText;
        }
    </script>

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
<script src="../js/pages/forms/advanced-form-elements.js"></script>
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
/*if (isset($_REQUEST['bandera'])) {
    $bandera = $_REQUEST['bandera'];
    $baccion = $_REQUEST['baccion'];
    $estado = 0;

    include '../config/conexion.php';
    if ($bandera == 'baja') {
        pg_query('BEGIN');

        $result = pg_query($conexion, "UPDATE docente SET estado='$estado' where iddocente='$baccion'");

        if (!$result) {
            pg_query('rollback');
            echo "<script language='javascript'>";
            echo 'alertaError();';
            echo '</script>';
        } else {

            //bitacora
            $query_s = pg_query($conexion, "SELECT * from docente where iddocente='$baccion'");
            while ($fila = pg_fetch_array($query_s)) {
            $dnombre = $fila[1];
            $dapellido = $fila[2];
            }
            if (isset($_SESSION)) {
                $usuario = $_SESSION['idUsuario'];
                ini_set('date.timezone', 'America/El_Salvador');
                $fecha2 = date("Y/m/d");
                $hora = date("h:i:s");
                $actividad = "Dio de Baja al Docente " .$dnombre. " " .$dapellido. "";
                pg_query("BEGIN");
                $result2 = pg_query($conexion, "INSERT INTO bitacora(actividad,hora,fecha,idusuario) VALUES(trim('$actividad'),'$hora','$fecha2','$usuario')");

                if (!$result2) {
                    pg_query("rollback");
                } else {
                    pg_query("commit");
                }
            }
            //fin bitacora

            pg_query('commit');

            echo "<script language='javascript'>";
            echo 'alertaExito();';
            echo '</script>';
            echo "<script language='javascript'>";
            echo "setTimeout ('r()', 2000);";
            echo '</script>';
        }
    }
}*/
?>

</html>