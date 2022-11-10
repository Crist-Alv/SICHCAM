<?php session_start();
if ($_SESSION['autenticado'] != 'yeah') {
    header('Location: ../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Reporte de Notas</title>
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
    <script src="../js/jquery-1.11.2.min.js"></script>
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

<script>
 $(document).ready(function() {
        $('#printf').hide();
  $('#notaAl').submit(e => {
    e.preventDefault();
    obtenerAlumno();
    
        });
function obtenerAlumno(){
  const postData = {
      ciclo: $('#ciclo').val(),
      anio: $('#anio').val(),
      carnet:$('#carnet').val()
    };
    url= 'AlumnoNota.php';
    $.post(url, postData, (response) => {
            $('#printf').show();
       const alumnos = JSON.parse(response);
          let template = '';
        $('#banderacarnet').val($('#carnet').val());
        $('#banderaciclo').val($('#anio').val());
        $('#banderaanio').val($('#ciclo').val());
        alumnos.forEach(alumno => {
             template += `
                  <tr>
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  </tr>
                ` 
    });
                 $('#alumnos').html(template);
});
}
});
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
            </div>
            <div class="media-body">
                <a class="navbar-brand" href="../index.php">SISTEMA INFORMÁTICO PARA EL CONTROL ACADÉMICO DEL CENTRO
                    ESCOLAR CATÓLICO SAN JOSÉ</a>
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
                    Reportes de Alumnos
                </h1>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3 clearfix jsdemo-notification-button">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                    <!-- Button trigger modal -->
  <form id="notaAl">
                    <div class="col-md-12">                       
                                        <div class="col-md-2">
                                            <b>Ciclo</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="ciclo" id="ciclo" class="form-control" list="listaciclo" placeholder="Seleccione" required="">

                                                    <datalist id="listaciclo">
                                                        <?php
                                                        include("../config/conexion.php");
                                                        $result = pg_query($conexion, "SELECT ciclo 
                                            FROM
                                            inscripcion 
                                            GROUP BY ciclo
                                            ORDER BY
                                            ciclo ASC");
                                                        if ($result) {

                                                            while ($ciclo = pg_fetch_object($result)) {
                                                                echo "<option value='$ciclo->ciclo'>";
                                                            }
                                                        }
                                                        ?>
                                                    </datalist>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-2">

                                            <b>Año lectivo</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="anio" id="anio" class="form-control" list="listaanio" placeholder="Seleccione" required="">

                                                    <datalist id="listaanio">
                                                        <?php
                                                        include("../config/conexion.php");
                                                        $result = pg_query($conexion, "SELECT 
                                            anioelectivo
                                            FROM
                                            inscripcion 
                                            GROUP BY anioelectivo
                                            ORDER BY
                                            anioelectivo ASC");
                                                        if ($result) {

                                                            while ($anio = pg_fetch_object($result)) {
                                                                echo "<option value='$anio->anioelectivo'>";
                                                            }
                                                        }
                                                        ?>
                                                    </datalist>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-2">
                                            <b>Carnet</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="carnet" id="carnet" class="form-control" placeholder="Carnet" required="">
                                                </div>
                                            </div>
                                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-float">
                        <img src="../images/iconos/impresora.svg">Buscar Datos
                       </button> 
                    </form>
                    </div>
                    </div>
                    <form action="Reportes/ReporNotas.php" method="post">
                    <div id="printf" class="row-md-2">
                    
                        <input type="hidden" id="banderacarnet" name="banderacarnet" value="0">
                        <input type="hidden" id="banderaciclo" name="banderaciclo" value="0">
                        <input type="hidden" id="banderaanio" name="banderaanio" value="0">
                         <button id="print" type="submit" class="btn btn-primary waves-effect waves-float">
                        <img src="../images/iconos/impresora.svg">Reporte
                       </button> 
                        </div>
                    <div class="table-responsive">
                                <table id="datosA" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Carnet</th>
                                            <th>Apellidos</th>
                                            <th>Nombres</th>
                                        </tr>
                                    </thead>

                                    <tbody id="alumnos">
                                    </tbody>
                                </table>
                            </div>
                     </form> 
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

    <!-- Bootstrap Colorpicker Js -->
    <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

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

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

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
