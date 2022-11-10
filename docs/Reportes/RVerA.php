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
                <article class="post clearfix"><a href="../alumno.php" class="thumb pull-left"><img src="../../images/logo.png" alt="espere un momento" class="img-responsive" width="100" height="100"></a>

                    <a class="thumb pull-right"><img src="../../images/min-edu.png" alt="espere un momento" class="img-responsive" width="250" height="250"></a>

                </article>
            </div>
        </section>
        <h3>SICACECSJ - Información General del Alumno&nbsp;&nbsp;&nbsp;
            <br>CONTROL ACADÉMICO DEL CENTRO ESCOLAR CATÓLICO SAN JOSÉ &nbsp;&nbsp;&nbsp;
                    <br>Verapaz, San Vicente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></h3><br><br><br>
                 
        <section class="main container">
            <div class="container">
<!--1-->
        <?php
            include('../../config/conexion.php');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $id = $_GET['rid'];
            
            $query_s = pg_query($conexion, "SELECT alumnos.*, inscripcion.* from alumnos INNER JOIN inscripcion ON inscripcion.idalum = alumnos.idalum where alumnos.idalum=$id");
            while ($fila = pg_fetch_array($query_s)) {                
        ?>
        <fieldset>                
                            <div class="row clearfix">
                                
                                    <div class="col-xs-5" >
                                        <?php
                                        $path = "../../images/foto_estudiantes/" . $fila[59];
                                        if (file_exists($path)) {
                                            $directorio = opendir($path);
                                            while ($archivo = readdir($directorio)) {
                                                if (!is_dir($archivo)) {
                                                    echo "<img src='../../images/foto_estudiantes/$fila[59]/$archivo'
                                                                class='rounded float-right' alt='200' width='200'/>";
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                

                                <div class="row clearfix">
                                
                                <div class="col-xs-3">
                                    <b>Carnet</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[59]; ?></h4>
                                    </div>
                                </div>
                                

                                
                                <div class="col-xs-3">
                                    <b>Nombre</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[1]; ?> <?php echo $fila[2]; ?></h4>
                                    </div>
                                </div>
                                

                                
                                <div class="col-xs-3">
                                    <b>Fecha de Nacimiento</b>
                                    <div class="input-group">
                                        <h4 type="date"><?php echo dameFecha($fila[9]); ?></h4>
                                    </div>
                                </div>
                                

                                
                                <div class="col-xs-3">
                                    <b>Género</b>
                                    <div class="input-group">                                       
                                        <h4 class="font-bold"><?php echo $fila[8]; ?></h4>
                                    </div>
                                </div>
                                                                                      

                                
                                <div class="col-xs-3">
                                    <b>Nacionalidad</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[3]; ?></h4>
                                    </div>
                                </div>
                                

                                
                                <div class="col-xs-3">
                                    <b>Lugar de Nacimiento</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[11]; ?></h4>
                                    </div>
                                </div>
                                                                

                                
                                <div class="col-xs-3">
                                    <b>Estado Civil</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[13]; ?></h4>
                                    </div>
                                </div>
                                
                            </div> 
                        </fieldset>&nbsp;&nbsp;&nbsp;
                        <br><br><br>

                        <!----------Datos de Contanto del Alumno---------->

                        <fieldset>
                            <legend>Datos de Contanto del Alumno</legend>
                            <div class="row form-group col-md-12">

                                
                                <div class="col-md-3">
                                    <b>Dep. de Nacimiento</b>
                                    <div class="input-group">
                                        <?php                                        
                                        $result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[4]"); 
                                         while ($rowD = pg_fetch_array($result_DV)) {   
                                        ?>                                                                  
                                        <h4 class="font-bold" value="<?php echo $rowD['iddep']; ?>"><?php echo $rowD['departamento']; ?></h4>
                                         <?php
                                         }
                                         ?>                                                                
                                    </div>
                                </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Zona</b>
                                        <br>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[15]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Municipio</b>
                                        <div class="input-group">
                                            <?php                                        
                                        $result_MV = pg_query($conexion, "SELECT * from municipio where idmunicipio=$fila[5]"); 
                                         while ($rowM = pg_fetch_array($result_MV)) {   
                                        ?>                                                                  
                                        <h4 class="font-bold" value="<?php echo $rowM['idmunicipio']; ?>"><?php echo $rowM['municipio']; ?></h4>
                                         <?php
                                         }
                                         ?>
                                         </div>
                                    </div>
                                
                            
                                <div class="col-md-3">
                                    <b>Dirección</b>
                                    <div class="input-group">
                                        <h4 class="font-bold" aria-setsize="50"><?php echo $fila[6]; ?></h4>
                                    </div>
                                </div>
                                                            
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">

                                
                                    <div class="col-sm-3">
                                        <b>Tipo de Calle</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[14]; ?></h4>
                                        </div>
                                    </div>
                                

                                <div class="col-md-3">
                                    <b>Teléfono</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[10]; ?></h4>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <b>Email</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[7]; ?></h4>
                                    </div>
                                </div>

                            </div>
                        </fieldset><br><br>
                        <!----------Otros Datos---------->
                        <fieldset>
                            <legend>Otros Datos</legend>
                            <div class="row form-group col-md-10">
                                
                                    <div class="col-sm-3 selectContainer">
                                        <b>Medio de Transporte</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[16]; ?></h4>
                                        </div>
                                    </div>
                                

                                <div class="col-md-4">
                                    <b>Distancia al C.E</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[17]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Factor riesgo</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[18]; ?></h4>
                                    </div>
                                </div>

                                
                                    <div class="col-md-3">
                                        <b>Trabaja</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[19]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-sm-4">
                                        <b>Dependencia Económica</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[20]; ?></h4>
                                        </div>
                                    </div>
                                
                            </div>
                        </fieldset>
                        <!----------Datos de Salud---------->
                        <fieldset>
                            <legend>Datos Salud</legend>
                            <div class="row form-group col-md-10">

                                
                                    <div class="col-md-2">
                                        <b>Presenta Tarjeta de Vacunas</b>
                                        <br>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[21]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-2">
                                        <b>Esquema de Vacunas Completo</b>
                                        <br>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[22]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-4">
                                        <b>Discapacidad o Enfermedad</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[23]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Tiene alguna Prescripción Médica</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[24]; ?></h4>
                                        </div>
                                    </div>
                            </div>
                            
                        </fieldset>
                        <!----------Datos del Padre de Familia---------->
                        <fieldset>
                            <legend>Datos del Padre de Familia</legend>
                            <div class="row form-group col-md-12">

                                <div class="col-md-3">
                                    <b>N° DUI</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[39]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>N° NIT</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[40]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Nombres</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[25]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Apellidos</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[26]; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">
                            <div class="col-md-3">
                                    <b>Fecha de Nacimiento</b>
                                    <div class="input-group">
                                        <h4 type="date"><?php echo dameFecha($fila[38]); ?></label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Nacionalidad </b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[27]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Lugar de Nacimiento</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[29]; ?></h4>
                                    </div>
                                </div>

                                
                                    <div class="col-md-3">
                                        <b>Depto. de Nacimiento</b>
                                        <div class="input-group">
                                        <?php                                        
                                        $result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[28]"); 
                                         while ($rowD = pg_fetch_array($result_DV)) {   
                                        ?>                                                                  
                                        <h4 class="font-bold" value="<?php echo $rowD['iddep']; ?>"><?php echo $rowD['departamento']; ?></h4>
                                         <?php
                                         }
                                         ?>                           
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Zona</b>
                                        <br>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[41]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Género</b>
                                        <br>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[30]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-sm-3">
                                        <b>Estado Familiar</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[31]; ?></h4>
                                        </div>
                                    </div>
                                
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">

                                <div class="col-md-3">
                                    <b>Grado de Estudio </b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[32]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Profesión </b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[33]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Dirección </b>
                                    <div class="input-group">
                                        <h4 class="font-bold" aria-setsize="50"><?php echo $fila[34]; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                            <fieldset>
                            <div class="row form-group col-md-12">
                                <div class="col-md-3">
                                    <b>Lugar de Trabajo </b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[37]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Teléfono</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[35]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Email</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[36]; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!----------Datos de la Madre de Familia---------->
                        <legend>Datos de la Madre de Familia</legend>
                        <fieldset>
                            <div class="row form-group col-md-12">

                                <div class="col-md-3">
                                    <b>N° DUI</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[42]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>N° NIT</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[43]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Nombres</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[44]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Apellidos</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[45]; ?></h4>
                                    </div>
                                </div>                                
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">
                            <div class="col-md-3">
                                    <b>Fecha de Nacimiento</b>
                                    <div class="input-group">
                                        <h4 type="date"><?php echo dameFecha($fila[46]); ?></h4>
                                    </div>
                                </div>

                                
                                    <div class="col-md-3">
                                        <b>Género</b>
                                        <br>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[51]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Nacionalidad </b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[47]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Lugar de Nacimiento</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[48]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Dep. de Nacimiento</b>
                                        <div class="input-group">
                                        <?php                                        
                                        $result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[49]"); 
                                         while ($rowD = pg_fetch_array($result_DV)) {   
                                        ?>                                                                  
                                        <h4 class="font-bold" value="<?php echo $rowD['iddep']; ?>"><?php echo $rowD['departamento']; ?></h4>
                                         <?php
                                         }
                                         ?>                             
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Zona</b>
                                        <br>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[50]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Estado Familiar</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[52]; ?></h4>
                                        </div>
                                    </div>
                                
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">
                                
                                    <div class="col-md-3">
                                        <b>Grado de Estudio </b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[53]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Profesión </b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[54]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Dirección </b>
                                        <div class="input-group">
                                            <h4 class="font-bold" aria-setsize="50"><?php echo $fila[55]; ?></h4>
                                        </div>
                                    </div>
                                
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">
                                
                                    <div class="col-md-3">
                                        <b>Lugar de Trabajo </b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[58]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Teléfono</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[56]; ?></h4>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-md-3">
                                        <b>Email</b>
                                        <div class="input-group">
                                            <h4 class="font-bold"><?php echo $fila[57]; ?></h4>
                                        </div>
                                    </div>
                                
                            </div>
                        </fieldset>
                        <!--Datos de Inscripcion-->
                        <legend>Datos de Inscripción</legend>

                        <div class="row form-group col-md-12">

                            <div class="col-md-3">
                                <b>Fecha de Ingreso</b>
                                <div class="input-group">                                    
                                        <h4 type="date"><?php echo dameFecha($fila[61]); ?></h4>                                    
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Codigo de Infraestructura</b>
                                <div class="input-group">
                                    <h4 class="font-bold"><?php echo $fila[62]; ?></h4>
                                </div>
                            </div>

                            
                                <div class="col-md-3">
                                    <b>Ciclo</b>
                                    <br>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[63]; ?></h4>
                                    </div>
                                </div>
                            
                            
                                <div class="col-sm-3 selectContainer">
                                    <b>Grado</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[65]; ?></h4>
                                    </div>
                                </div>
                            
                        </div>

                        <div class="row form-group col-md-12">                   

                            <div class="col-md-3">
                                <b>Año Lectivo</b>
                                <div class="input-group">                                    
                                        <h4 class="font-bold"><?php echo $fila[64]; ?><h4>                                    
                                </div>
                            </div>

                            
                                <div class="col-sm-3 selectContainer">
                                    <b>Sección</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[66]; ?></h4>
                                    </div>
                                </div>
                            

                            
                                <div class="col-sm-3 selectContainer">
                                    <b>Turno</b>
                                    <div class="input-group">
                                        <h4 class="font-bold"><?php echo $fila[67]; ?></h4>
                                    </div>
                                </div>
                            
                        </div>

                        <legend>Datos del Responsable</legend>

                        <div class="row form-group col-md-12">
                            <div class="col-md-3">
                                <b>N° DUI</b>
                                <div class="input-group">
                                    <h4 class="font-bold"><?php echo $fila[68]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>N° NIT</b>
                                <div class="input-group">
                                    <h4 class="font-bold"><?php echo $fila[69]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Nombre del Responsable</b>
                                <div class="input-group">
                                    <h4 class="font-bold"><?php echo $fila[70]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Apellidos</b>
                                <div class="input-group">
                                    <h4 class="font-bold"><?php echo $fila[71]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Teléfono</b>
                                <div class="input-group">
                                    <h4 class="font-bold"><?php echo $fila[72]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Dirección</b>
                                <div class="input-group">
                                    <h4 class="font-bold"><?php echo $fila[73]; ?></h4>
                                </div>
                            </div>
                        </div>
            </div>
        <?php
            }
        }
        ?>
        </section>            
    </center>

</body>

</html>
<?php 
function dameFecha($fecha){
	list($year,$mon,$day)=explode('-',$fecha);
	return date('d-m-Y',mktime(0,0,0,$mon,$day,$year));
	}
?>