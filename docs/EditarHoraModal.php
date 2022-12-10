<?php date_default_timezone_set("America/El_Salvador"); 

$idd= $fila['cod_horario'];

$result = mysqli_query($conexion, "SELECT * from horario where cod_horario=$idd");
$row = mysqli_fetch_array($result);
$zona = $row['zonah'];
$agente = $row['agenteh'];
$arma = $row['armah'];

$result_Zo = mysqli_query($conexion, "SELECT * from tbl_zonas order by nombre_zona");
$result_Ag = mysqli_query($conexion, "SELECT * from tbl_agentes order by nombre_agente");
$result_Ar = mysqli_query($conexion, "SELECT * from tbl_armas order by modelo_arma");
?>

<script type="text/javascript" src="../js/cargarComboboxH.js"></script>
<!--Modifiar Horario Modal -->
<div class="modal fade" id="ModalEdiHora_<?php echo $ridhora; ?>" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="demo-masked-input">
                <div class="modal-header bg-blue">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form name="datoszona" id="datoszona" action="FuncionEditHora.php?ridhora=<?php echo $ridhora; ?>" role="form" method="POST" enctype="multipart/form-data" class="form-group">
                            <!--1-->
                            <fieldset>
                                    <legend>Editar Horario</legend>
                                    <div class="row form-group col-md-8">

                                        <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Zona *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/marcador-de-mapa.svg" width="25" height="25">
                                                </span>
                                                <select name="edzonah" id="edzonah" class="form-control" placeholder="Zona" required>
                                                <?php                                                
                                                while ($rowZo = mysqli_fetch_array($result_Zo)) {
                                                    ?>
                                                    <option value="<?php echo $rowZo['nombre_zona']; ?>" <?php if($rowZo['nombre_zona']== $zona) { echo 'selected'; }?>><?php echo $rowZo['nombre_zona']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        </p>

                                        <p>
                                        <div class="col-sm-5 selectContainer">
                                            <b>Agente *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/person.svg">
                                                </span>
                                                <select name="edagenteh" id="edagenteh" class="form-control" placeholder="Agente" required>
                                                <?php
                                                while ($rowAg = mysqli_fetch_array($result_Ag)) {
                                                    ?>
                                                    <option value="<?php echo $rowAg['nombre_agente'].' '.$rowAg['apellido_agente']; ?>" <?php if($rowAg['nombre_agente'].' '.$rowAg['apellido_agente']== $agente) { echo 'selected'; }?>><?php echo $rowAg['nombre_agente'].' '.$rowAg['apellido_agente']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        </p>

                                        <p>
                                        <div class="col-sm-4 selectContainer">
                                            <b>Arma *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/objetivo.svg" width="25" height="25">
                                                </span>
                                                <select name="edarmah" id="edarmah" class="form-control" placeholder="Arma" required>
                                                <?php
                                                while ($rowAr = mysqli_fetch_array($result_Ar)) {
                                                    ?>
                                                    <option value="<?php echo $rowAr['serie_arma'] .' - '.$rowAr['modelo_arma']; ?>" <?php if($rowAr['serie_arma'] .' - '.$rowAr['modelo_arma']== $arma) { echo 'selected'; }?>><?php echo $rowAr['serie_arma'] .' - '.$rowAr['modelo_arma']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        </p>

                                        <p>
                                        <div class="col-md-3" style="width : 160px">
                                            <b>Hora de entrada *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/reloj.svg" width="25" height="25">
                                                </span>
                                                <input type="time" name="edhentrada" id="edhentrada" autocomplete="off" value="<?php echo $fila[5]; ?>" required></input>
                                            </div>
                                        </div>
                                        </p>

                                        <p>
                                        <div class="col-md-3" style="width : 160px">
                                            <b>Hora de salida *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/reloj-tres.svg" width="25" height="25">
                                                </span>
                                                <input type="time" name="edhsalida" id="edhsalida" autocomplete="off" value="<?php echo $fila[6]; ?>" required></input>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </fieldset>
                    </div>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="modal-footer">
                    <button type="submit" name="editar" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
                    <button type="reset" name="cancelar" class="btn btn-secondary waves-effect"><img src="../images/iconos/cancel.svg">Cancelar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>