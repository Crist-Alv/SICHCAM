<?php session_start();
$id = $_SESSION["id_User"];
if ($_SESSION['autenticado'] != 'yeah') {
    header('Location: ../login.php');
    exit();
}
?>

<?php
include "../config/conexion.php";
$query_s = mysqli_query($conexion, "SELECT * from tbl_usuario where id_User='$id'");
while ($fila = mysqli_fetch_array($query_s)) {
    $rnombre = $fila[1];
    $rsexo = $fila[2];
    $rclave = $fila[5];
    $rclave = base64_decode($rclave);
    $rcorreo = $fila[3];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Perfil - SICHCAM</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />

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

    <script language="javascript">
        function alertaExito() {
            alertify.message("<p>Se guardo exitosamente</p>" + "<img src='../images/bien1.png' width='80' height='80'>").set({
                transition: 'flipx'
            });
        }

        function alertaError() {
            alertify.error("<p>No se puedo guardar exitosamente</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();


        }

        function alertaError2() {
            alertify.error("<p>Complete todos los campos</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();


        }

        function alertaError3() {
            alertify.error("<p>Error al digitar la contraseña anterior</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();


        }

        function alertaError4() {
            alertify.error("<p>No coincide la nueva contrasena</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();


        }

        function alertaErrorRegistro() {
            alertify.error("<h1>Error</h1>" + "<p>El correo ya estan vinculados con otro usuario</p>" + "<img src='../images/error.png' width='80' height='80'>").set({
                transition: 'flipx'
            });
        }

        function verificar() {
            if (document.getElementById('nomb').value == "" ||
                document.getElementById('sex').value == "" ||
                document.getElementById('Email').value == "") {

                alertaError2();

            } else {


                $(document).ready(function() {

                    $('#evpersonal').click(function() {
                        var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

                        if ($("#Email").val().indexOf('@', 0) == -1 || $("#Email").val().indexOf('.', 0) == -1 || caract.test($('#Email').val()) == false) {
                            alertaErrorC();


                        } else {

                            document.getElementById('bandera').value = "personal";

                            document.datos.submit();

                        }
                    });
                });



            }

        }

        ////cambiar contraseña
        function verificar2() {
            if (document.getElementById('PassAnt').value == "" ||
                document.getElementById('NPass').value == "" ||
                document.getElementById('NPassConf').value == "" ||
                document.getElementById('Email').value == "") {

                alertaError2();

            } else {

                if (document.getElementById('PassAnt').value != "<?php echo $rclave ?>") {
                    alertaError3();
                } else {

                    if (document.getElementById('NPass').value != document.getElementById('NPassConf').value) {
                        alertaError4();
                    } else {

                        $(document).ready(function() {

                            $('#evcontra').click(function() {
                                var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

                                if ($("#Email").val().indexOf('@', 0) == -1 || $("#Email").val().indexOf('.', 0) == -1 || caract.test($('#Email').val()) == false) {
                                    alertaErrorC();


                                } else {

                                    document.getElementById('bandera2').value = "contra";

                                    document.datos2.submit();

                                }
                            });
                        });

                    }

                }

            }

        }

        function r() {
            location.href = ("perfil.php");
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

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="../images/iconos/mundo.svg" width="25px" />
                        <span>Gestión de Zonas</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="Listadozona.php">Listado</a>
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
                            <a href="seguridad.php">Opciones de Seguridad</a>
                        </li>
                    </ul>
                    <a href="acercade.php">Acerca de</a>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <img src="../images/minerva2.png" width="40" height="50" />
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
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="../images/logo.png" width="150" height="150" />
                            </div>
                            <div class="content-area">
                                <h3>
                                    <?php if (isset($_SESSION)) {
                                        $nomb = $_SESSION["nombre_User"];
                                        echo $nomb;
                                    }
                                    ?>
                                </h3>
                                <?php
                                if (isset($_SESSION)) {
                                    $nivel = $_SESSION["rol_User"];
                                    echo '<p>' . $nivel . '</p>';
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Información Personal</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Cambiar Contraseña</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                        <form class="form-horizontal" name="datos" id="datos" role="form" action="" method="post">
                                            <input type="hidden" name="bandera" id="bandera" />
                                            <input type="hidden" name="baccion" id="baccion" value="<?php echo $id; ?>" />
                                            <div class="form-group">
                                                <label for="nomb" class="col-sm-2 control-label">Nombres</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="nomb" name="nomb" autocomplete="off" placeholder="Escribir su nombre..." value="<?php echo $rnombre; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="Email" name="Email" autocomplete="off" placeholder="Escribir su correo Electrónico..." value="<?php echo $rcorreo; ?>" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="Sex" class="col-sm-2 control-label">Genero</label>
                                                <div class="col-sm-4">
                                                    <select id="sex" name="sex" class="form-control show-tick">
                                                        <?php
                                                        if ($rsexo == 'Masculino') {
                                                            echo "<option selected value='Masculino'>Masculino</option>";
                                                            echo "<option value='Femenino'>Femenino</option>";
                                                        } else {
                                                            echo "<option value='Masculino'>Masculino</option>";
                                                            echo "<option selected value='Femenino'>Femenino</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="button" id="evpersonal" name="evpersonal" class="btn btn-success waves-effect" onclick="verificar()">Guardar Cambios</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form class="form-horizontal" name="datos2" id="datos2" role="form" action="" method="post">
                                            <input type="hidden" name="bandera2" id="bandera2" />
                                            <input type="hidden" name="baccion2" id="baccion2" value="<?php echo $id; ?>" />
                                            <div class="form-group">
                                                <label for="PassAnt" class="col-sm-3 control-label">Contraseña anterior</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="PassAnt" name="PassAnt" autocomplete="off" placeholder="Escribir la contraseña anterior...." required>
                                                        <div class="col-xs-7 p-t-6">
                                                            <input type="checkbox" id="recr" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('PassAnt').type = this.checked ? 'text' : 'password'">
                                                            <label for="recr">Mostrar Contraseña</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="NPass" class="col-sm-3 control-label">Nueva contraseña</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NPass" name="NPass" autocomplete="off" placeholder="Escriba la nueva contraseña..." required>
                                                        <div class="col-xs-7 p-t-6">
                                                            <input type="checkbox" id="recr1<?php echo $id; ?>" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('NPass').type = this.checked ? 'text' : 'password'">
                                                            <label for="recr1<?php echo $id; ?>">Mostrar Contraseña</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NPassConf" class="col-sm-3 control-label">Nueva Contraseña (Confirmar)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NPassConf" name="NPassConf" autocomplete="off" placeholder="Confirmar la nueva contraseña..." required>
                                                        <div class="col-xs-7 p-t-6">
                                                            <input type="checkbox" id="recr2<?php echo $id; ?>" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('NPassConf').type = this.checked ? 'text' : 'password'">
                                                            <label for="recr2<?php echo $id; ?>">Mostrar Contraseña</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="button" id="evcontra" name="evcontra" class="btn btn-success waves-effect" onclick="verificar2()">Guardar cambios</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>
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
if (isset($_REQUEST["bandera"])) {
    $bandera = $_REQUEST["bandera"];
    $baccion = $_REQUEST["baccion"];

    include_once('../Config/Conexion.php');
    if ($bandera == 'personal') {
        $nombres = $_REQUEST['nomb'];
        $email = $_REQUEST['Email'];
        $sexo = $_REQUEST['sex'];

        $query_s2 = mysqli_query($conexion, "SELECT * FROM tbl_usuario where correo_User='$email' and id_User!='$baccion'");
        $rows = mysqli_num_rows($query_s2);

        if ($rows == 0) {

            $result = mysqli_query($conexion, "UPDATE tbl_usuario SET nombre_User=trim('$nombres'), sexo_User=trim('$sexo'), correo_User=trim('$email') WHERE id_User='$baccion'");

            if (!$result) {
                echo "<script language='javascript'>";
                echo 'alertaError();';
                echo '</script>';
                echo "<script language='javascript'>";
                echo "setTimeout ('r()', 1500);";
                echo '</script>';
            } else {
                $_SESSION["nombre_User"] = $nombres;
                $_SESSION["correo_User"] = $email;
                $_SESSION["sexo_User"] = $sexo;
                echo "<script language='javascript'>";
                echo 'alertaExito();';
                echo '</script>';
                echo "<script language='javascript'>";
                echo "setTimeout ('r()', 1500);";
                echo '</script>';
            }
        } else {

            echo "<script language='javascript'>";
            echo "alertaErrorRegistro();";
            echo "</script>";
        }
    }
}

if (isset($_REQUEST["bandera2"])) {
    $bandera2 = $_REQUEST["bandera2"];
    $baccion2 = $_REQUEST["baccion2"];

    include_once('../Config/Conexion.php');

    if ($bandera2 == 'contra') {
        $pass = $_REQUEST['NPass'];

        $pass = base64_encode($pass);

        $result = mysqli_query($conexion, "UPDATE tbl_usuario SET pass_User=trim('$pass') WHERE id_User='$baccion2'");

        if (!$result) {
            echo 'alertaError();';
            echo "<script language='javascript'>";
            echo "setTimeout ('r()', 1500);";
            echo '</script>';
        } else {
            echo "<script language='javascript'>";
            echo 'alertaExito();';
            echo '</script>';
            echo "<script language='javascript'>";
            echo "setTimeout ('r()', 1500);";
            echo '</script>';
        }
    }
}

?>