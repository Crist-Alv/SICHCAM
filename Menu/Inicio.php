<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Inicio - SICHCAM</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="../style2.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

    <!--Para el horario-->
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />



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
            document.location.href = "Config/fin.php";
        }
    </script>
</head>

<body class="theme-blue">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="media">
            <div class="media-left media-middle">
                <img class="media-object" src="images/logo.png" width="60" height="50">
                </a>
            </div>
            <div class="media-body">
                <a class="navbar-brand" href="index.php">ALCALDIA MUNICIPAL DE SAN RAFAEL CEDROS</a>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <a href="" title="Ayuda">
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
                            $sexo = $_SESSION['sexo_User'];
                            $man = 'images/user.png';
                            $woman = 'images/userWoman.png';
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
                        <img data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 36px;" src="images/iconos/keyboard_arrow_down.svg" />
                        <ul class="dropdown-menu pull-right">
                            <li><a data-toggle="modal" data-target="#ModalCerrar"><img src="images/iconos/input.svg" />Cerrar Sesión</a></li>
                            <li><a href="docs/perfil.php"><img src="images/iconos/settings.svg" />Configuración de Cuenta</a></li>
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
                        <img src="images/iconos/horario.svg" />
                        <span>Gestión de Horarios</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docs/VerHorario.php">Ver Horarios</a>
                        </li>
                    </ul>
                    <?php
                    $t = $_SESSION['rol_User'];
                    if ($t != "Agente") {
                    ?>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="images/iconos/assignment_ind.svg" />
                            <span>Gestión de Agentes</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="docs/agente.php">Registro de Agentes</a>
                            </li>
                            <li class="active">
                                <a href="docs/listadoAgentes.php">Listado</a>
                            </li>
                        </ul>

                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="images/iconos/clipboard.svg" />
                            <span>Gestión de Armas</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="docs/arma.php">Registro de Armas</a>
                            </li>
                            <li class="active">
                                <a href="docs/ListadoArma.php">Listado</a>
                            </li>
                        </ul>

                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="images/iconos/horario.svg" />
                            <span>Gestión de Horarios</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="docs/RegistroHorario.php">Registro de Horarios</a>
                            </li>
                        </ul>

                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="images/iconos/mundo.svg" width="25px" />
                            <span>Gestión de Zonas</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="docs/Listadozona.php">Listado</a>
                            </li>
                        </ul>

                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="images/iconos/class.svg" />
                            <span>Gestión de Usuarios</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="docs/ListadoUser.php">Listado de Usuarios</a>
                            </li>
                        </ul>

                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="images/iconos/security.svg" />
                            <span>Seguridad</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="docs/seguridad.php">Opciones de Seguridad</a>
                            </li>
                        </ul>
                    <?php } ?>
                    <a href="docs/acercade.php">Acerca de</a>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <img src="images/minerva2.png" width="40" height="50" />
                <div class="copyright">
                    <span>UES-FMP 2022 &copy; Todos Derechos Reservados</span>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>