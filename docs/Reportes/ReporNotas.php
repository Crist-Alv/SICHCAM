<?php session_start();
$iddatos=$_SESSION["idUsuario"];
//

$anio= $_POST['banderaanio'];
$ciclo= $_POST['banderaciclo'];
$carnet= $_POST['banderacarnet'];
//
if ($_SESSION['autenticado'] != "yeah" ) {
    header("Location: ../../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Reporte de Notas - SICACECSJ</title>
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
                <article class="post clearfix"><a class="thumb pull-left"><img src="../../images/logo.png" alt="espere un momento" class="img-responsive" width="100" height="100"></a>

                    <a class="thumb pull-right"><img src="../../images/min-edu.png" alt="espere un momento" class="img-responsive" width="250" height="250"></a>

                </article>
            </div> 
        </section>
        <h4>SICACECSJ - Registro de  de Notas &nbsp;&nbsp;&nbsp;
            <br>CONTROL ACADÉMICO DEL CENTRO ESCOLAR CATÓLICO SAN JOSÉ &nbsp;&nbsp;&nbsp;
                    <br>Verapaz, San Vicente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
        <table id="grid" class="display table-bordered" cellspacing="0" width="80%">
       <h5><?php 
     date_default_timezone_set('America/El_Salvador');
                $hora=  date('h:i:s A');
                $fecha= date("d/m/Y");
                ?>
    <div align="right">
            <?php echo $fecha."  ".$hora;?></h5>
            <thead>
                 <?php 
                include("../../config/conexion.php");
                $query_s = pg_query($conexion, "SELECT
                                                    alumnos.apellidoa,
                                                    alumnos.nombrea,
                                                    alumnos.carnet
                                                    FROM
                                                    alumnos
                                                    WHERE
                                                    alumnos.carnet = '$carnet'
                                                ");
                while ($fila = pg_fetch_array($query_s)) {
                     ?>
                <tr>
                <th><?php echo $fila["carnet"]; ?></th>
                <th colspan="5"><?php echo $fila["nombrea"]."  ".$fila["apellidoa"] ; ?></th>
                </tr>
                    <?php
                }
                ?>

                <tr>
                    <th>Materia</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                     <th>Nota 3</th>
                     <th>Nota 4</th>
                     <th>Promedio</th>
                </tr>
            </thead>

            <tbody>
<?php

                include("../../config/conexion.php");
                $query_s = pg_query($conexion, "SELECT
                                            materia.materia,
                                            alumnos.nombrea,
                                            alumnos.apellidoa,
                                            nota.nota1,
                                            nota.nota2,
                                            nota.nota3,
                                            nota.nota4,
                                            nota.promedio
                                        FROM
                                            materia
                                        INNER JOIN asignacion ON asignacion.idmateria = materia.idmateria
                                        INNER JOIN alumnos ON asignacion.idalum = alumnos.idalum
                                        INNER JOIN nota ON nota.idasignacion = asignacion.idasign
                                        WHERE
                                            alumnos.carnet = '$carnet'
                                                ");
                while ($filamat = pg_fetch_array($query_s)) {
                ?>
                    <tr>
                        <td align="left" style="font-size:15px"><?php echo $filamat["materia"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $filamat["nota1"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $filamat["nota2"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $filamat["nota3"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $filamat["nota4"]; ?></td>
                        <td align="left" style="font-size:15px"><?php echo $filamat["promedio"]; ?></td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

    </center>
    </div>
</body>

</html>