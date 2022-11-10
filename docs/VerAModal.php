<?php date_default_timezone_set("America/El_Salvador"); 

include('../config/conexion.php');
?>
<!--Ver Alumno Modal -->
<div class="modal fade" id="ModalVer_<?php echo $rid = $fila[0]; ?>" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" name="datos" action="Reportes/RepVerA.php?rid=<?php echo $rid; ?>" enctype="multipart/form-data" class="form-horizontal">
                        <!--1-->
                        <fieldset>
                            <legend>Datos del Alumno</legend>
                            
                            <div class="row clearfix">
                                <p>
                                    <div class="col-xs-5" >
                                        <?php
                                        $path = "../images/foto_estudiantes/" . $fila[59];
                                        if (file_exists($path)) {
                                            $directorio = opendir($path);
                                            while ($archivo = readdir($directorio)) {
                                                if (!is_dir($archivo)) {
                                                    echo "<img src='../images/foto_estudiantes/$fila[59]/$archivo'
                                                                class='rounded float-right' alt='200' width='200'/>";
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                </p>

                                <div class="row clearfix">
                                <p>
                                <div class="col-xs-3">
                                    <b>Carnet</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/carnet.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[59]; ?></h4>
                                    </div>
                                </div>
                                </p>

                                <p>
                                <div class="col-xs-3">
                                    <b>Nombre</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/person.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[1]; ?> <?php echo $fila[2]; ?></h4>
                                    </div>
                                </div>
                                </p>

                                <p>
                                <div class="col-xs-3">
                                    <b>Fecha de Nacimiento</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/date_range.svg">
                                        </span>
                                        <label class="font-bold col-cyan"><input type="date" readonly="readonly" value="<?php echo $fila[9]; ?>"></label>
                                    </div>
                                </div>
                                </p>

                                <p>
                                <div class="col-xs-3">
                                    <b>Genero</b>
                                    <div class="input-group">                                        
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/genero.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[8]; ?></h4>
                                    </div>
                                </div>
                                </p>
                            </div>

                            </div>                            

                                <p>
                                <div class="col-xs-3">
                                    <b>Nacionalidad</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/03.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[3]; ?></h4>
                                    </div>
                                </div>
                                </p>

                                <p>
                                <div class="col-xs-3">
                                    <b>Lugar de Nacimiento</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/03.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[11]; ?></h4>
                                    </div>
                                </div>
                                </p>

                                <p>
                                <div class="col-xs-3">
                                    <b>Estado Civil</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/group-24px.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[13]; ?></h4>
                                    </div>
                                </div>
                                </p>
                            
                        </fieldset>

                        <!----------Datos de Contanto del Alumno---------->

                        <fieldset>
                            <legend>Datos de Contanto del Alumno</legend>
                            <div class="row form-group col-md-12">

                                <p>
                                <div class="col-md-3">
                                    <b>Dep. de Nacimiento</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                        <?php                                        
                                        $result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[4]"); 
                                         while ($rowD = pg_fetch_array($result_DV)) {   
                                        ?>                                                                  
                                        <h4 class="font-bold col-cyan" value="<?php echo $rowD['iddep']; ?>"><?php echo $rowD['departamento']; ?></h4>
                                         <?php
                                         }
                                         ?>                                                                
                                    </div>
                                </div>
                                </p>

                                <p>
                                    <div class="col-md-3">
                                        <b>Zona</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[15]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-3">
                                        <b>Municipio</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <?php                                        
                                        $result_MV = pg_query($conexion, "SELECT * from municipio where idmunicipio=$fila[5]"); 
                                         while ($rowM = pg_fetch_array($result_MV)) {   
                                        ?>                                                                  
                                        <h4 class="font-bold col-cyan" value="<?php echo $rowM['idmunicipio']; ?>"><?php echo $rowM['municipio']; ?></h4>
                                         <?php
                                         }
                                         ?>
                                         </div>
                                    </div>
                                </p>

                                <div class="col-md-6">
                                    <b>Direccion</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/03.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[6]; ?></h4>
                                    </div>
                                </div>

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Tipo de Calle</b>
                                        <div class="input-group">
                                            <h4 class="font-bold col-cyan"><?php echo $fila[14]; ?></h4>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">

                                <div class="col-md-4">
                                    <b>Telefono</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/phone.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[10]; ?></h4>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <b>Email</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/email.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[7]; ?></h4>
                                    </div>
                                </div>

                            </div>
                        </fieldset>
                        <!----------Otros Datos---------->
                        <fieldset>
                            <legend>Datos de Contanto del Alumno</legend>
                            <div class="row form-group col-md-10">

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Medio de Transporte</b>
                                        <div class="input-group">
                                            <h4 class="font-bold col-cyan"><?php echo $fila[16]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <div class="col-md-4">
                                    <b>Distancia al C.E</b>
                                    <div class="input-group">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[17]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Factor riesgo</b>
                                    <div class="input-group">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[18]; ?></h4>
                                    </div>
                                </div>

                                <p>
                                    <div class="col-md-3">
                                        <b>Trabaja</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[19]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Dependencia Económica</b>
                                        <div class="input-group">
                                            <h4 class="font-bold col-cyan"><?php echo $fila[20]; ?></h4>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </fieldset>
                        <!----------Datos de Salud---------->
                        <fieldset>
                            <legend>Datos Salud</legend>
                            <div class="row form-group col-md-10">

                                <p>
                                    <div class="col-md-2">
                                        <b>Presenta Tarjeta de Vacunas</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[21]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-2">
                                        <b>Esquema de Vacunas Completo</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[22]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Discapacidad o Enfermedad</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[23]; ?></h4>
                                        </div>
                                    </div>
                                </P>

                                <p>
                                    <div class="col-md-3">
                                        <b>Tiene alguna Prescripción Médica</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[24]; ?></h4>
                                        </div>
                                    </div>
                            </div>
                            </p>
                        </fieldset>
                        <!----------Datos del Padre de Familia---------->
                        <fieldset>
                            <legend>Datos del Padre de Familia</legend>
                            <div class="row form-group col-md-12">

                                <div class="col-md-4">
                                    <b>N° DUI</b>
                                    <div class="input-group">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[39]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <b>N° NIT</b>
                                    <div class="input-group">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[40]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Nombres</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/person.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[25]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Apellidos</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/person.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[26]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Fecha de Nacimiento</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/date_range.svg">
                                        </span>
                                        <label class="font-bold col-cyan"><input type="date" readonly="readonly" value="<?php echo $fila[38]; ?>"></label>
                                    </div>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">

                                <div class="col-md-4">
                                    <b>Nacionalidad </b>
                                    <div class="input-group">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[27]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Lugar de Nacimiento</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/03.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[29]; ?></h4>
                                    </div>
                                </div>

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Depto. de Nacimiento</b>
                                        <div class="input-group">
                                        <?php                                        
                                        $result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[28]"); 
                                         while ($rowD = pg_fetch_array($result_DV)) {   
                                        ?>                                                                  
                                        <h4 class="font-bold col-cyan" value="<?php echo $rowD['iddep']; ?>"><?php echo $rowD['departamento']; ?></h4>
                                         <?php
                                         }
                                         ?>                           
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-3">
                                        <b>Zona</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[41]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Genero</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[30]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Estado Familiar</b>
                                        <div class="input-group">
                                            <h4 class="font-bold col-cyan"><?php echo $fila[31]; ?></h4>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">

                                <div class="col-md-4">
                                    <b>Grado de Estudio </b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/01.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[32]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Profesión </b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/01.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[33]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Direccion </b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/03.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[34]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Lugar de Trabajo </b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/01.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[37]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Telefono</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/phone.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[35]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Email</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/email.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[36]; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!----------Datos de la Madre de Familia---------->
                        <legend>Datos de la Madre de Familia</legend>
                        <fieldset>
                            <div class="row form-group col-md-12">

                                <div class="col-md-4">
                                    <b>N° DUI</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/group-24px.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[42]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <b>N° NIT</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/group-24px.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[43]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Nombres</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/person.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[44]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Apellidos</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/person.svg">
                                        </span>
                                        <h4 class="font-bold col-cyan"><?php echo $fila[45]; ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Fecha de Nacimiento</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/date_range.svg">
                                        </span>
                                        <label class="font-bold col-cyan"><input type="date" readonly="readonly" value="<?php echo $fila[46]; ?>"></label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">

                                <p>
                                    <div class="col-md-4">
                                        <b>Genero</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[51]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Nacionalidad </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[47]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Lugar de Nacimiento</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[48]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Dep. de Nacimiento</b>
                                        <div class="input-group">
                                        <?php                                        
                                        $result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[49]"); 
                                         while ($rowD = pg_fetch_array($result_DV)) {   
                                        ?>                                                                  
                                        <h4 class="font-bold col-cyan" value="<?php echo $rowD['iddep']; ?>"><?php echo $rowD['departamento']; ?></h4>
                                         <?php
                                         }
                                         ?>                             
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-3">
                                        <b>Zona</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[50]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Estado Familiar</b>
                                        <div class="input-group">
                                            <h4 class="font-bold col-cyan"><?php echo $fila[52]; ?></h4>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row form-group col-md-12">
                                <p>
                                    <div class="col-md-4">
                                        <b>Grado de Estudio </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[53]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Profesión </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[54]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Direccion </b>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/03.svg">
                                        </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[55]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Lugar de Trabajo </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[58]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Telefono</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/phone.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[56]; ?></h4>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-3">
                                        <b>Email</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/email.svg">
                                            </span>
                                            <h4 class="font-bold col-cyan"><?php echo $fila[57]; ?></h4>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </fieldset>
                        <!--Datos de Inscripcion-->
                        <legend>Datos de Inscripción</legend>

                        <div class="row form-group col-md-12">

                            <div class="col-md-3">
                                <b>Fecha de Ingreso</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/date_range.svg">
                                    </span>
                                    <div class="form-control">
                                        <label class="font-bold col-cyan"><input type="date" readonly="readonly" value="<?php echo $fila[61]; ?>"> </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <b>Codigo de Infraestructura</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/apartment-24px.svg">
                                    </span>
                                    <h4 class="font-bold col-cyan"><?php echo $fila[62]; ?></h4>
                                </div>
                            </div>

                            <p>
                                <div class="col-md-4">
                                    <b>Ciclo</b>
                                    <br>
                                    <div class="input-group">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[63]; ?></h4>
                                    </div>
                                </div>
                            </p>
                        </div>

                        <div class="row form-group col-md-12">
                            <p>
                                <div class="col-sm-3 selectContainer">
                                    <b>Grado</b>
                                    <div class="input-group">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[65]; ?></h4>
                                    </div>
                                </div>
                            </p>

                            <div class="col-md-3">
                                <b>Año Lectivo</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/date_range.svg">
                                    </span>
                                    <div class="form-control">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[64]; ?><h4>
                                    </div>
                                </div>
                            </div>

                            <p>
                                <div class="col-sm-3 selectContainer">
                                    <b>Sección</b>
                                    <div class="input-group">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[66]; ?></h4>
                                    </div>
                                </div>
                            </p>

                            <p>
                                <div class="col-sm-3 selectContainer">
                                    <b>Turno</b>
                                    <div class="input-group">
                                        <h4 class="font-bold col-cyan"><?php echo $fila[67]; ?></h4>
                                    </div>
                                </div>
                            </p>
                        </div>

                        <legend>Datos del Responsable</legend>

                        <div class="row form-group col-md-12">
                            <div class="col-md-4">
                                <b>N° DUI</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/group-24px.svg">
                                    </span>
                                    <h4 class="font-bold col-cyan"><?php echo $fila[68]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <b>N° NIT</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/group-24px.svg">
                                    </span>
                                    <h4 class="font-bold col-cyan"><?php echo $fila[69]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <b>Nombre del Responsable</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/person.svg">
                                    </span>
                                    <h4 class="font-bold col-cyan"><?php echo $fila[70]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <b>Apellidos</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/person.svg">
                                    </span>
                                    <h4 class="font-bold col-cyan"><?php echo $fila[71]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <b>Teléfono</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/phone.svg">
                                    </span>
                                    <h4 class="font-bold col-cyan"><?php echo $fila[72]; ?></h4>
                                </div>
                            </div>

                            <div class="col-md-10">
                                <b>Direccion</b>
                                <div class="input-group">
                                <span class="input-group-addon">
                                            <img src="../images/iconos/03.svg">
                                        </span>
                                    <h4 class="font-bold col-cyan"><?php echo $fila[73]; ?></h4>
                                </div>
                            </div>
                            
                        </div>

                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><img src="../images/iconos/impresora.svg">Imprimir</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><img src="../images/iconos/close.svg">Cerrar</button>
            </div>
            </form>
        </div>
    </div>