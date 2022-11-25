<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SICHCAM - Registrate!!</title>
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

    <style type="text/css">
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

    <style>
        #nombres {
            text-transform: capitalize;
        }

        #apellidos {
            text-transform: capitalize;
        }
    </style>

    <script language="javascript">
        function verificar() {
            if (document.getElementById('nombre').value == "" ||
                document.getElementById('clave').value == "" ||
                document.getElementById('claveconf').value == "" ||
                document.getElementById('email').value == "" ||
                document.getElementById('rol').value == "" ||
                document.getElementById('sexo').value == "" ||
                document.getElementById('cargo').value == "") {
                alertaError();
            } else {
                if (document.getElementById('clave').value != document.getElementById('claveconf').value) {
                    alertaError2();
                } else {
                    $(document).ready(function() {

                        $('#enviar').click(function() {

                            var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

                            if ($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1 || caract.test($('#email').val()) == false) {
                                alertaErrorC();

                            } else {

                                document.getElementById('bandera').value = "add";

                                document.sichcam.submit();

                            }
                        });
                    });
                }
            }

            function alertaError() {
                alertify.error("<h1>Error</h1>" + "<p>Campos sin llenar</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();
            }

            function alertaError2() {
                alertify.error("<h1>Error</h1>" + "<p>Las contraseña no coinciden</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();
            }

            function alertaErrorC() {
                alertify.error("<h1>Error</h1>" + "<p>Correo Electronico no valido</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();
            }
        }
    </script>

    <script>
        $(document).ready(function() {

            /////////////////validacion nombre 
            $("#nombre").keypress(function(key) {
                window.console.log(key.charCode)
                if ((key.charCode < 97 || key.charCode > 122) //letras mayusculas
                    &&
                    (key.charCode < 65 || key.charCode > 90) //letras minusculas
                    &&
                    (key.charCode != 8) //retroceso
                    &&
                    (key.charCode != 241) //ñ
                    &&
                    (key.charCode != 209) //Ñ
                    &&
                    (key.charCode != 32) //espacio
                    &&
                    (key.charCode != 225) //á
                    &&
                    (key.charCode != 233) //é
                    &&
                    (key.charCode != 237) //í
                    &&
                    (key.charCode != 243) //ó
                    &&
                    (key.charCode != 250) //ú
                    &&
                    (key.charCode != 193) //Á
                    &&
                    (key.charCode != 201) //É
                    &&
                    (key.charCode != 205) //Í
                    &&
                    (key.charCode != 211) //Ó
                    &&
                    (key.charCode != 218) //Ú

                )
                    return false;
            });
        });
    </script>


</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="card">
            <div class="logo">
                <a style="color:blue;"><img src="../images/logo.jpg" width="120" height="160"><b>SICHCAM</b></a>
            </div>
            <div class="body">
                <form role="form" action="AgregarUser.php" enctype="multipart/form-data" method="post" class="form-group" id="sichcam" name="sichcam">
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/person.svg" />
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Usuario" autocomplete="off" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <select type="text" name="sexo" id="sexo" class="form-control" placeholder="Sexo" autocomplete="off" required>
                            <option value="" disabled selected>Seleccione el sexo...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>

                        </select>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/email.svg" />
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Dirección de correo electrónico" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <select type="text" name="rol" id="rol" class="form-control" placeholder="rol" autocomplete="off" required>
                            <option value="" disabled selected>Seleccione un rol...</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Agente">Agente</option>

                        </select>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/lock.svg" />
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="clave" id="clave" minlength="6" placeholder="Contraseña" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/lock.svg" />
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="claveconf" id="claveconf" minlength="6" placeholder="Confirmar Contraseña" autocomplete="off" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-block btn-lg bg-blue waves-effect" name="enviar" id="enviar" onclick="verificar()">REGÍSTRARSE</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="login.php">¿Ya tienes una cuenta?</a>
                    </div>
                </form>
            </div>
        </div>

        <footer class="footer full-reset">
            <div class="copyright text-center"><img src="../images/minerva2.png" width="40" height="60" />
                <h6 style="color:white;">UES-FMP 2022 &copy; Todos Derechos Reservados </h6>
            </div>
        </footer>
    </div>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

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
</body>

</html>