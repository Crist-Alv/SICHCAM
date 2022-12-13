<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Inicio de Sesión | SICHCAM</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="../image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <style>
        body {
            background-image: url(../images/fondo3.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        #mail {
            width: 100%;
            position: fixed;
        }
    </style>

    <script language="javascript">
        function verificar() {
            if (document.getElementById('usuariox').value == "" || document.getElementById('clavex').value == "") {
                alertaError();
            } else {

                document.getElementById('bandera').value = "add";

                document.sichcam.submit();

            }
        }

        function alertaError() {
            alertify.error("<h3>Error</h3>" + "<p>Campos sin llenar</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();
        }

        function alertaErrorLogin() {
            alertify.error("<h3>Error</h3>" + "<p>Usuario o contraseña no existen</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();

        }

        function alertaErrorLogin2() {
            alertify.error("<h3>Error</h3>" + "<p>No tiene permitido el acceso hasta que el admnistrador lo apruebe</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();

        }
    </script>

    <script type="text/javascript">
        function boton(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 13) verificar();
        }
    </script>

</head>

<body class="login-page">
    <div class="media-body">
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <a href="../docs/include/ayuda/Login.pdf" target="_blank" title="Ayuda">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <img class="bg-white" src="../images/iconos/help_outline.svg" />
                    </div>
                </a>
            </ul>
        </div>
    </div>
    <div class="login-box ">
        <div class="card">
            <div class="logo">

                <a style="color:blue;"><img src="../images/logo.png" width="180" height="160"><b>SICHCAM</b></a>
            </div>
            <div class="body">
                <form role="form" action="" method="post" id="sichcam" name="sichcam">
                    <input type="hidden" name="bandera" id="bandera" />
                    <input type="hidden" name="baccion" id="baccion" />
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/person.svg" />
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="usuariox" id="usuariox" placeholder="Correo del Usuario..." onkeypress="boton(event)" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/lock.svg" />
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="clavex" id="clavex" placeholder="Contraseña..." onkeypress="boton(event)" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 p-t-6">
                            <input type="checkbox" id="recr" class="filled-in chk-col-geed" onchange="document.getElementById('clavex').type = this.checked ? 'text' : 'password'">
                            <label for="recr">Mostrar Contraseña</label>
                        </div>
                        <div class="col-xs-5">
                            <button type="button" class="btn btn-block bg-blue waves-effect" onClick="verificar()">Iniciar Sesión</button>
                        </div>
                    </div>
                    <div class="row m-t-15">
                        <div class="align-center">
                            <a href="recuperarClave.php">¿Olvidastes tu Contraseña?</a>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <footer class="footer full-reset">
            <div class="copyright text-center"><img src="../images/minerva2.png" width="50" height="60" />
                <h6 style="color:white;">UES-FMP 2022 &copy; Todos Derechos Reservados </h6>
            </div>
        </footer>
    </div>
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
        alertify.defaults.theme.cancel = "btn btn-danger";
        alertify.defaults.theme.input = "form-control";
    </script>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/examples/sign-in.js"></script>
</body>

</html>
<?php
include '../Config/Conexion.php';
if (isset($_REQUEST['bandera'])) {
    $bandera = $_REQUEST['bandera'];
    $usuariox = $_REQUEST['usuariox'];
    $clavex = $_REQUEST['clavex'];
    $clavex = base64_encode($clavex);

    if ($bandera == 'add') {

        $query_s = mysqli_query($conexion, "SELECT * FROM tbl_usuario where correo_User=trim('$usuariox') and pass_User=trim('$clavex') and estado=1");

        while ($fila = mysqli_fetch_array($query_s)) {
            $_SESSION['id_User'] = $fila[0];
            $_SESSION['nombre_User'] = $fila[1];
            $_SESSION['sexo_User'] = $fila[2];
            $_SESSION['correo_User'] = $fila[3];
            $_SESSION['rol_User'] = $fila[4];
            $_SESSION['pass_User'] = $fila[5];
            $_SESSION['estado'] = $fila[6];

            $_SESSION['autenticado'] = 'yeah';

            echo "<script language='javascript'>";
            echo "location.href='../index.php';";
            echo '</script>';
        }

        echo "<script language='javascript'>";
        echo 'alertaErrorLogin();';
        echo '</script>';
    }
}
?>