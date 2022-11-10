<?php session_start();
$t=$_SESSION["nivelUsuario"];
$iddatos=$_SESSION["idUsuario"];
if ($_SESSION['autenticado'] != "yeah" || $t != 1) {
    header("Location: ../../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Reporte de Alumnos Activos - SICACECSJ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" href="../../favicon.ico">
    <script src="../../js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../../css/sweet-alert.css">
    <link rel="stylesheet" href="../../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link href="../../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/modernizr.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/jquery.js"></script>


    <!--para tabla-->
    <link rel="stylesheet" type="text/css" href="../../paginacion/jquery.dataTables.min.css">
    <style type="text/css" class="init"></style>


    <script type="text/javascript" language="javascript" src="../../paginacion/jquery.dataTables.min.js">
    </script>





    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>



    <style>
        input {
            width: 350px;
        }
    </style>

    </style>

</head>

<body>

    <script>
        print();
    </script>
    <br>

    <!-- Form Name -->
    <center>
        <section class="main container">
            <div class="container">
                <article class="post clearfix"><a href="../ReportesA.php" class="thumb pull-left"><img src="../../images/logo.png" alt="espere un momento" class="img-responsive" width="100" height="100"></a>

                    <a class="thumb pull-right"><img src="../../images/min-edu.png" alt="espere un momento" class="img-responsive" width="250" height="250"></a>

                </article>
            </div>
        </section>
        <h3>SICACECSJ - Registro de Alumnos Activos&nbsp;&nbsp;&nbsp;
            <br>CONTROL ACADÉMICO DEL CENTRO ESCOLAR CATÓLICO SAN JOSÉ &nbsp;&nbsp;&nbsp;
                    <br>Verapaz, San Vicente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
        <table id="grid" class="display table-bordered" cellspacing="0" width="80%">
            <thead>
                <tr>

                <th>Carnet</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Grado</th>
                <th>Sección</th>
                <th>Dirección</th>
                <th>Telefóno del Responsable</th>

                </tr>
            </thead>

            <tbody>
                <?php
                include("../../config/conexion.php");
                $query_s = pg_query($conexion, "SELECT alumnos.idalum,carnet,nombrea,apellidoa,direcciona, inscripcion.grado,seccion,telefonor from alumnos INNER JOIN inscripcion ON inscripcion.idalum = alumnos.idalum where alumnos.estadoa=1 order by inscripcion.grado");
                while ($fila = pg_fetch_array($query_s)) {
                ?>

                    <tr>
                        <td align="left" style="font-size:15px"><?php echo $fila["carnet"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $fila["nombrea"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $fila["apellidoa"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $fila["grado"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $fila["seccion"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $fila["direcciona"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $fila["telefonor"]; ?></td>

                    </tr>


                <?php
                }
                ?>

            </tbody>
        </table>

    </center>

</body>

</html>