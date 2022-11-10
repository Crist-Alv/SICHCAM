<?php include('../config/conexion.php'); ?>
<script>
    function soloLetras(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
        especiales = [8, 37, 39, 46];

        tecla_especial = false
        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }

        if (letras.indexOf(tecla) == -1 && !tecla_especial)
            return false;
    }

    function limpia() {
        var val = document.getElementById("miInput").value;
        var tam = val.length;
        for (i = 0; i < tam; i++) {
            if (!isNaN(val[i]))
                document.getElementById("miInput").value = '';
        }
    }
</script>
<?php
$fecha_min = date("Y-m-d");
$fecha_min = date("Y-m-d", strtotime($fecha_min . "- 80 year"));
$fecha_max = date("Y-m-d");
$fecha_max = date("Y-m-d", strtotime($fecha_max . "- 18 year"));

?>
<!--Modifiar docente Modal -->
<div class="modal fade" id="ModalVerD_<?php echo $viddoc = $fila[0]; ?>" tabindex="-2" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="post" class="form-group">
                        <!--1-->
                        <fieldset>
                            <legend>Datos del Docente</legend>
                            <div class="row form-group col-md-10">

                                <div class="col-md-4">
                                    <b>Nombres</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/person.svg">
                                        </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[1]; ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Apellidos</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                       <input type="String" readonly="readonly" value="<?php echo $fila[2]; ?>">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Fecha de nacimiento</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/date_range.svg">
                                        </span>
                                        <input type="date" readonly="readonly" value="<?php echo $fila[3]; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                        <b>Genero</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>                               
                                <input type="radio" name="gd" id="md" class="with-gap radio-col-blue" value="Masculino" disabled <?php
                                       $gend = $fila[4];
                                     if ($gend == "Masculino") {
                                           echo "checked";
                                                    }
                                                    ?>>
                                <label for="md">Masculino</label>

                                <input type="radio" name="gd" id="fd" class="with-gap radio-col-blue" value="Femenino" disabled <?php
                                        $gend = $fila[4];
                                     if ($gend == "Femenino") {
                                          echo "checked";
                                               }
                                              ?>>
                                <label for="fd" class="m-l-20">Femenino</label>

                            </div>
                            </div>
                            <div class="row form-group col-md-10">
                                <div class="col-md-4">
                                    <b>Especialidad</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[5]; ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Nacionalidad</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[6]; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-3 selectContainer">
                                    <b>Dep. de Nacimiento</b>
                                    <div class="input-group">
                                        <select class="form-control show-tick" style="width: 100%;" disabled>
                                        <?php                                        
                                        $result_DV = pg_query($conexion, "SELECT iddep, departamento from departamento where iddep=$fila[7]"); 
                                         while ($rowD = pg_fetch_array($result_DV)) {   
                                        ?>                                                                  
                                        <option value="<?php echo $rowD['iddep']; ?>"><?php echo $rowD['departamento']; ?></option>
                                         <?php
                                         }
                                         ?>       
                                        </select>
                                    </div>
                                </div>                                        
                        </div>
                    </fieldset>

                        <fieldset>                            
                            <div class="row form-group col-md-10">
                            <div class="col-md-4">
                                    <b>Municipio de Nacimiento</b>
                                    <div class="input-group">
                                    <select class="form-control show-tick" style="width: 100%;" disabled>                                       
                                    <?php                                        
                                        $result_MV = pg_query($conexion, "SELECT * from municipio where idmunicipio=$fila[8]"); 
                                         while ($rowM = pg_fetch_array($result_MV)) {   
                                        ?>                                                                  
                                        <option value="<?php echo $rowM['idmunicipio']; ?>"><?php echo $rowM['municipio']; ?></option>
                                         <?php
                                         }
                                         ?>     
                                    </select>
                                    </div>
                            </div> 

                                <div class="col-md-4">
                                    <b>Teléfono</b>
                                    <div class="input-group">                                        
                                        <input type="numeric" readonly="readonly" value="<?php echo $fila[9]; ?>">
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <b>Correo</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/email.svg">
                                        </span>
                                        <input type="email" readonly="readonly" value="<?php echo $fila[10]; ?>">
                                    </div>
                                </div>
                            </div>                    
                        </fieldset>

                        <fieldset>
                                    <div class="col-md-10">
                                        <b>Dirección</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <textarea type="String" readonly="readonly" cols="90" rows="5" style="resize: both;" autocomplete="off"><?php echo $fila["direccion"]; ?></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><img src="../images/iconos/impresora.svg">Imprimir</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><img src="../images/iconos/close.svg">Cerrar</button>
            </div>
            </form>
        </div>
    </div>
    <script src="../js/pages/forms/advanced-form-elements.js"></script>

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
        alertify.defaults.theme.cancel = "btn btn-secondary";
        alertify.defaults.theme.input = "form-control";
    </script>
</div>