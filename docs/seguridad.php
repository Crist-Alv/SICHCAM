<?php session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if ($_SESSION['autenticado'] != 'yeah') {
    header('Location: ../login.php');
    exit();
}
date_default_timezone_set('America/El_Salvador');
?>
<?php
// scrypt for backup and restore postgres database
///tomamos la fecha actual
$fecha = strftime('%d/%m/%Y %H:%M:%S', time());

function dl_file($file)
{
    if (!is_file($file)) {
        die('<b>404 File not found!</b>');
    }
    $len = filesize($file);
    $filename = basename($file);
    $file_extension = strtolower(substr(strrchr($filename, '.'), 1));
    $ctype = 'application/force-download';
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: public');
    header('Content-Description: File Transfer');
    header("Content-Type: $ctype");
    $header = 'Content-Disposition: attachment; filename=' . $filename . ';';
    header($header);
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . $len);
    @readfile($file);
    exit;
}

$action = $_POST['bandera'];
$ficheiro = $_FILES['path']['name'];
switch ($action) {
    case 'Importar Respaldo':
        $dbname = 'sicacecsj'; //database name
        $dbconn = pg_pconnect("host=localhost port=5432 dbname=$dbname 
user=postgres password=root"); //connectionstring
        if (!$dbconn) {
            echo "Can't connect.\n";
            exit;
        }
        $back = fopen($ficheiro, 'r');
        $contents = fread($back, filesize($ficheiro));
        $res = pg_query(utf8_encode($contents));
        // echo "Upload Ok";

        echo "<script language='javascript'>";

        //  echo "alertaExito();";////////////////////////////////////////////////////aqui
        echo 'alertaExito();';
        // echo "alert('base restaurada')";
        echo '</script>';
        fclose($back);
        break;
    case 'Exportar Respaldo':
        $dbname = 'sicacecsj'; //database name
        $dbconn = pg_pconnect("host=localhost port=5432 dbname=$dbname 
user=postgres password=root"); //connectionstring
        if (!$dbconn) {
            echo "Can't connect.\n";
            exit;
        }
        $back = fopen("$dbname.sql", 'w');
        $res = pg_query(" select relname as tablename
                    from pg_class where relkind in ('r')
                    and relname not like 'pg_%' and relname not like 
'sql_%' order by tablename");

        $res9 = pg_query(" select relname as tablename
                    from pg_class where relkind in ('r')
                    and relname not like 'pg_%' and relname not like 
'sql_%' order by tablename");

        $str = '';
        while ($row = pg_fetch_row($res)) {
            $table = $row[0];
            $str .= "\n--\n";
            $str .= "-- Estrutura da tabela '$table'";
            $str .= "\n--\n";
            $str .= "\nTRUNCATE $table CASCADE;";

            $res1 = pg_query("SELECT pg_index.indisprimary,
            pg_catalog.pg_get_indexdef(pg_index.indexrelid)
        FROM pg_catalog.pg_class c, pg_catalog.pg_class c2,
            pg_catalog.pg_index AS pg_index
        WHERE c.relname = '$table'
            AND c.oid = pg_index.indrelid
            AND pg_index.indexrelid = c2.oid
            AND pg_index.indisprimary");
            while ($r = pg_fetch_row($res1)) {
                $str .= "\n\n--\n";
                $str .= "-- Creating index for '$table'";
                $str .= "\n--\n\n";
                $t = str_replace('CREATE UNIQUE INDEX', '', $r[1]);
                $t = str_replace('USING btree', '|', $t);
                // Next Line Can be improved!!!
                $t = str_replace('ON', '|', $t);
                $Temparray = explode('|', $t);
            }
        }
        //////////////////////////////////////////////////
        while ($row9 = pg_fetch_row($res9)) {
            $table = $row9[0];
            $str .= "\n--\n";
            $str .= "-- Estrutura da tabela '$table'";
            $str .= "\n--\n";

            $res3 = pg_query("SELECT * FROM $table");
            while ($r = pg_fetch_row($res3)) {
                $sql = "INSERT INTO $table VALUES ('";
                $sql .= utf8_decode(implode("','", $r));
                $sql .= "');";
                $str = str_replace("''", 'NULL', $str);
                $str .= $sql;
                $str .= "\n";
            }
            ///////////////////////////////

            $res1 = pg_query("SELECT pg_index.indisprimary,
            pg_catalog.pg_get_indexdef(pg_index.indexrelid)
        FROM pg_catalog.pg_class c, pg_catalog.pg_class c2,
            pg_catalog.pg_index AS pg_index
        WHERE c.relname = '$table'
            AND c.oid = pg_index.indrelid
            AND pg_index.indexrelid = c2.oid
            AND pg_index.indisprimary");
            while ($r = pg_fetch_row($res1)) {
                $str .= "\n\n--\n";
                $str .= "-- Creating index for '$table'";
                $str .= "\n--\n\n";
                $t = str_replace('CREATE UNIQUE INDEX', '', $r[1]);
                $t = str_replace('USING btree', '|', $t);
                // Next Line Can be improved!!!
                $t = str_replace('ON', '|', $t);
                $Temparray = explode('|', $t);
            }
        }

        $res = pg_query(" SELECT
  cl.relname AS tabela,ct.conname,
   pg_get_constraintdef(ct.oid)
   FROM pg_catalog.pg_attribute a
   JOIN pg_catalog.pg_class cl ON (a.attrelid = cl.oid AND cl.relkind = 'r')
   JOIN pg_catalog.pg_namespace n ON (n.oid = cl.relnamespace)
   JOIN pg_catalog.pg_constraint ct ON (a.attrelid = ct.conrelid AND
   ct.confrelid != 0 AND ct.conkey[1] = a.attnum)
   JOIN pg_catalog.pg_class clf ON (ct.confrelid = clf.oid AND 
clf.relkind = 'r')
   JOIN pg_catalog.pg_namespace nf ON (nf.oid = clf.relnamespace)
   JOIN pg_catalog.pg_attribute af ON (af.attrelid = ct.confrelid AND
   af.attnum = ct.confkey[1]) order by cl.relname ");

        ///////////////////////////////

        //bitacora 
        if (isset($_SESSION)) {
            $usuario = $_SESSION['idUsuario'];
            ini_set('date.timezone', 'America/El_Salvador');
            $fecha2 = date("Y/m/d");
            $hora = date("h:i:s");
            $actividad = "Realizo un Backup";
            pg_query("BEGIN");
            $result2 = pg_query($dbconn, "INSERT INTO bitacora(actividad,hora,fecha,idusuario) VALUES(trim('$actividad'),'$hora','$fecha2','$usuario')");

            if (!$result2) {
                pg_query("rollback");
            } else {
                pg_query("commit");
            }
        }
        //fin bitacora


        fwrite($back, $str);
        fclose($back);
        dl_file("$dbname.sql");
        break;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Seguridad-Tabla</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
        alertify.defaults.theme.cancel = "btn btn-danger";
        alertify.defaults.theme.input = "form-control";
    </script>

    <script type="text/javascript" class="init">
        function alertaError() {
            alertify.error("<p>No ha seleccionado un archivo</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();


        }

        function alertaErrorEx() {
            alertify.error("<p>Tipo de archivo no valido, solo .sql</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();


        }

        function alertaExito() {
            alertify.message("<p>Datos restaurados sin incovenientes</p>" + "<img src='../images/bien1.png' width='80' height='80'>").set({
                transition: 'flipx'
            });
        }
    </script>

    <script>
        function r() {
            location.href = "seguridad.php"
        }

        function validar() {

            var fileInput = document.getElementById('path');
            var filePath = fileInput.value;
            var allowedExtensions = /(.sql)$/i;

            if (document.dataForm.path.value == '') {

                alertaError();
            } else {

                if (!allowedExtensions.exec(filePath)) {

                    //	alert('error, tipo de archivo invalido, solo archivos .sql');
                    alertaErrorEx();
                    fileInput.value = '';
                    return false;

                } else {
                    //para validar que haya un archivo

                    document.getElementById('bandera').value = "Importar Respaldo";

                    document.dataForm.submit();
                    alertaExito();
                }


            }
        }


        function exportar() {

            document.getElementById('bandera').value = "Exportar Respaldo";
            document.dataForm.submit();
            alertaExito();
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
                        <a href="seguridadA.pdf" title="Ayuda">
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
                        <li class="active">
                            <a href="ReportesNota.php">Reporte de Notas</a>
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

                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="../images/iconos/security.svg" />
                            <span>Seguridad</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="seguridad.php">Opciones de Seguridad</a>
                            </li>
                        </ul>
                    </li>
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
                    Seguridad
                </h1>
            </div>

            <div class="card shadow mb-4">
                <form id="dataForm" name="dataForm" method="post" enctype="multipart/form-data" action="">
                    <input type="hidden" name="bandera" id="bandera" />
                    <div class="card-header py-3 clearfix jsdemo-notification-button">
                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                        <!-- Button trigger modal -->
                        <div class="col-md-10">
                            <button type="button" value="Exportar Respaldo" class="btn btn-primary waves-effect" name="actionButton" id="actionButton" onclick="exportar()">
                                <img src="../images/iconos/cloud_upload.svg">
                                Exportar Información
                            </button>

                            <button type="button" value="Importar Respaldo" class="btn btn-success waves-effect" name="actionButton" id="actionButton" onclick="validar()">
                                <img src="../images/iconos/cloud_download.svg">Importar Infomación</button>

                            <a type="button" class="btn bg-teal waves-effect" href="bitacora.php">
                                <img src="../images/iconos/class.svg">Bitácora</a>

                            <a type="button" class="btn bg-teal waves-effect" href="listaUsuario.php">
                                <img src="../images/iconos/class.svg">Listado de Usuarios</a>
                        </div>
                    </div>
            </div>
            <br>
            <div class="row form-group col-md-10 bg-blue">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Selecionar el archivo de Recuperación y luego dar click en el boton Importar Información</label>
                    <input type="file" class="form-control-file" name="path" id="path">
                </div>
            </div>
            </form>
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

    <!-- Validation Plugin Js -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>

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

</html>