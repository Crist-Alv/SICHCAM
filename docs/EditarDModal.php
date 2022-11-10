<?php include('../config/conexion.php');

$idd= $fila['iddocente'];

$result = pg_query($conexion, "SELECT * from docente where iddocente=$idd");
$row = pg_fetch_array($result);
$dep = $row['depdocente'];
$muni = $row['municipiodocente'];

$result_ED = pg_query($conexion, "SELECT * from departamento order by departamento");

$result_EM = pg_query($conexion, "SELECT idmunicipio, municipio from municipio where iddep=$dep order by municipio");
?>
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

<script type="text/javascript" src="../js/deptoD.js"></script>

<?php
$fecha_min = date("Y-m-d");
$fecha_min = date("Y-m-d", strtotime($fecha_min . "- 80 year"));
$fecha_max = date("Y-m-d");
$fecha_max = date("Y-m-d", strtotime($fecha_max . "- 18 year"));

?>
<!--Modifiar docente Modal -->
<div class="modal fade" id="ModalEdiD_<?php echo $fila["iddocente"]; ?>" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="edit_form" action="../docs/EditarDocente.php?iddoc=<?php echo $fila["iddocente"]; ?>" method="POST" class="form-group datos-doc">
                        <!--1-->
                        <fieldset>
                            <legend>Datos del Docente</legend>
                            <div class="row form-group col-md-12">
                                <p>
                                    <div class="col-md-4">
                                        <b>Nombres</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" onkeypress="return soloLetras(event)" onblur="limpia()" id="ednombres" name="ednombres" autocomplete="off" value="<?php echo $fila[1]; ?>" required autofocus>
                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <div class="col-md-4">
                                        <b>Apellidos</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" onkeypress="return soloLetras(event)" onblur="limpia()" id="edapellidos" name="edapellidos" autocomplete="off" value="<?php echo $fila[2]; ?>" required autofocus>
                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <div class="col-md-3">
                                        <b>Fecha de nacimiento</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/date_range.svg">
                                            </span>
                                            <input type="date" id="edfechanac" name="edfechanac" autocomplete="off" value="<?php echo $fila[3]; ?>">
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
                                            <input type="radio" name="dgenero" id="dmas" class="with-gap radio-col-blue genero_data" value="Masculino" <?php
                                                if ($fila[4] == "Masculino") {
                                                echo "checked";
                                                }
                                                ?>>
                                            <label for="dmas">Masculino</label>

                                            <input type="radio" name="dgenero" id="dfem" class="with-gap radio-col-blue genero_data" value="Femenino" <?php
                                             if ($fila[4] == "Femenino") {
                                                  echo "checked";
                                              }
                                             ?>>
                                            <label for="dfem">Femenino</label>
                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <div class="row form-group col-md-10">
                                        <div class="col-md-4">
                                            <b>Especialidad</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/group-24px.svg">
                                                </span>
                                                <input type="String" onkeypress="return soloLetras(event)" onblur="limpia()" id="edesp" name="edesp" autocomplete="off" value="<?php echo $fila[5]; ?>" required autofocus>
                                            </div>
                                        </div>
                                </p>
                                <p>
                                    <div class="col-md-4">
                                        <b>Nacionalidad</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <input type="String" onkeypress="return soloLetras(event)" onblur="limpia()" id="ednacion" name="ednacion" autocomplete="off" value="<?php echo $fila[6]; ?>" required autofocus>
                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Dep. de Nacimiento</b>
                                        <div class="input-group">
                                            <select id="eddepto" name="eddepto" class="form-control input-md show-tick depto_data" style="width: 100%;">
                                                <?php
                                                while ($rowED = pg_fetch_array($result_ED)) {
                                                    ?>
                                                    <option value="<?php echo $rowED['iddep']; ?>" <?php if($rowED['iddep']== $dep) { echo 'selected'; }?>><?php echo $rowED['departamento']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </fieldset>

                        <fieldset>
                            <p>
                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Municipio de Nacimiento</b>
                                        <div class="input-group">
                                            <select id="edmun" name="edmun" class="form-control input-md show-tick muni_data" style="width: 100%;">
                                                <?php                                                
                                                while ($rowEM = pg_fetch_array($result_EM)) {
                                                    ?>
                                                    <option value="<?php echo $rowEM['idmunicipio']; ?>" <?php if($rowEM['idmunicipio']==$muni) { echo 'selected'; }?>><?php echo $rowEM['municipio']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
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
                                        <input type="numeric" id="edtel" name="edtel" autocomplete="off" value="<?php echo $fila[9]; ?>" placeholder="Ex: 9999-9999" title="Un numero de telefono valido consta de cuatro digitos seguidos de un guion y cuatro digitos mas." required autofocus>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="col-md-4">
                                    <b>Correo</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/email.svg">
                                        </span>
                                        <input type="email" id="edcorreo" name="edcorreo" autocomplete="off" value="<?php echo $fila[10]; ?>" required autofocus placeholder="Ex: example@example.com">
                                    </div>
                                </div>
                            </p>

                        </fieldset>

                        <fieldset>
                            <p>
                                <div class="col-md-4">
                                    <b>Dirección</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/03.svg">
                                        </span>
                                        <textarea type="String" name="eddir" id="eddir" cols="90" rows="5" style="resize: both;" autocomplete="off" required autofocus><?php echo $fila[11]; ?></textarea>
                                    </div>
                                </div>
                            </p>
                        </fieldset>
                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
                <button type="submit" name="editar" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
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