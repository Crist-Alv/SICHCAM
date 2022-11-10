<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Recupera tu Contraseña</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        body {

            background-image: url(images/fondo3.jpg);
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

            if (document.getElementById('email').value == "") {

                alertaError();

            } else {

                $(document).ready(function() {

                    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

                    if ($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1 || caract.test($('#email').val()) == false) {
                        alertaErrorC();


                    } else {

                        document.getElementById('bandera').value = "add";

                        document.frmsicacecsj.submit();

                    }

                });

            }

        }

        function alertaError() {
            alertify.error("<h1>Error</h1>" + "<p>No se pudo recuperar intente de nuevo!!!</p>" + "<img src='images/error.png'>").dismissOthers();
        }

        function alertaExito() {
            alertify.message("<h1>Exito</h1>" + "<p>Se han enviado sus credenciales con exito a su correo</p>" + "<img src='images/bien1.png'>").set({
                transition: 'flipx'
            });
        }


        function alertaErrorCorreo() {
            alertify.error("<h1>Error</h1>" + "<p>Este correo no esta vinculado con ninguna cuenta</p>" + "<img src='images/error.png'>").set({
                transition: 'flipx'
            });
        }

        function alertaErrorC() {
            alertify.error("<h1>Error</h1>" + "<p>Correo Electronico no valido</p>" + "<img src='images/error.png'>").dismissOthers();


        }

        function r() {
            location.href = "login.php"
        }
    </script>

    <script type="text/javascript">
        function boton(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 13) verificar();
            return true;
        }
    </script>

    <!-- include alertify.css -->
    <link rel="stylesheet" href="alertas/build/css/alertify.css">

    <!-- include boostrap theme  -->
    <link rel="stylesheet" href="alertas/build/css/themes/bootstrap.css">

    <!-- include alertify script -->
    <script src="alertas/build/alertify.js"></script>

    <script type="text/javascript">
        //override defaults
        alertify.defaults.transition = "slide";
        alertify.defaults.theme.ok = "btn btn-primary";
        alertify.defaults.theme.cancel = "btn btn-danger";
        alertify.defaults.theme.input = "form-control";
    </script>
</head>

<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a style="color:cornsilk;"><img src="images/logo.jpg" width="120" height="160"><b>SICHCAM</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form role="form" action="" method="post" class="form-group" id="frmsicacecsj" name="frmsicacecsj">
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion">

                    <div class="msg">
                        Ingrese su dirección de correo electrónico que utilizó para registrarse.
                        Le enviaremos un correo electrónico con su nombre de usuario y su contraseña.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="images/iconos/email.svg" />
                        </span>
                        <div class="form-line">
                            <input type="email" onKeypress="if (event.keyCode == 13) event.returnValue = false;" class="form-control" name="email" id="email" placeholder="Correo Electrónico" autocomplete="off" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-blue waves-effect" type="submit" id="enviar" name="enviar" onClick="verificar()">RESTABLECER</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="registrarse.php">¡Registrarse!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
</body>

</html>
<?php
include("config/conexion.php");
if (isset($_REQUEST["bandera"])) {

    $bandera = $_REQUEST["bandera"];
    $email = $_REQUEST["email"];

    if ($bandera == "add") {
        pg_query("BEGIN");


        $query_s2 = pg_query($conexion, "select * from usuario where email='$email' ");
        $rows = pg_num_rows($query_s2);

        if ($rows == 0) {
            echo "<script language='javascript'>";
            echo "alertaErrorCorreo();";
            echo "</script>";
        } else {

            $query_s = pg_query($conexion, "select * from usuario where email='$email' ");


            while ($fila = pg_fetch_array($query_s)) {

                $nomUsuario = $fila[3];
                $claveU = $fila[2];
            }
            
            $claveU = base64_decode($claveU);

            $mensaje = "usuario: ".$nomUsuario."\ncontraseña: ".$claveU;
            //Titulo
            $titulo = "RECUPERACIÓN DE CONTRASEÑA SISTEMA SICACECSJ";   
            //dirección del remitente 
            $headers = 'From: Sistema SICACECSJ < sicacecsj2019@gmail.com >' . "\r\n";         
            //cabecera
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
            //Enviamos el mensaje a tu_dirección_email 
            $success = mail($email, $titulo, $mensaje, $headers);
            if (!$success) {
                echo "<script language='javascript'>";
                echo "alertaError();";                
                echo "</script>";
            } else {
                echo "<script language='javascript'>";
                echo "alertaExito();";
                echo "</script>";
            }
        }
    } ///////llave que cierra if de bandera add


}

?>