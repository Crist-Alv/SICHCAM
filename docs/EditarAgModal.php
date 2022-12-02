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
</script>

<!--Modifiar docente Modal -->
<div class="modal fade" id="ModalEdiAg_<?php echo $rid; ?>" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form name="datos" id="datos" action="FuncionEditAgente.php?rid=<?php echo $rid; ?>" role="form" method="POST" enctype="multipart/form-data" class="form-group">
                            <!--1-->
                            <fieldset>
                                <legend>Datos del Agente</legend>
                                <div class="row form-group col-md-10">
                                    <p>
                                    <div class="col-sm-3" style="width : 158px">
                                        <b>Codigo de agente *</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/dn.svg">
                                            </span>
                                            <input type="String" class="codigo-agente-number" style="width : 80px" name="edcod" id="edcod" autocomplete="off" value="<?php echo $fila[5]; ?>" required autofocus>
                                        </div>
                                    </div>
                                    </p>

                                    <p>
                                    <div class="col-md-3" style="width : 165px">
                                        <b>N° de DUI *</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/dn.svg">
                                            </span>
                                            <input type="String" class="dui-number" style="width : 110px" name="eddui" id="eddui" autocomplete="off" value="<?php echo $fila[3]; ?>" required>
                                        </div>
                                    </div>
                                    </p>

                                    <p>
                                    <div class="col-md-3">
                                        <b>Nombres</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" onkeypress="return soloLetras(event)" onblur="limpia()" style="width : 150px" id="ednombres" name="ednombres" autocomplete="off" value="<?php echo $fila[1]; ?>" required autofocus>
                                        </div>
                                    </div>
                                    </p>

                                    <p>
                                    <div class="col-md-3">
                                        <b>Apellidos</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" onkeypress="return soloLetras(event)" onblur="limpia()" style="width : 150px" id="edapellidos" name="edapellidos" autocomplete="off" value="<?php echo $fila[2]; ?>" required autofocus>
                                        </div>
                                    </div>
                                    </p>
                            </fieldset>
                            <fieldset>
                                <p>
                                <div class="col-md-3">
                                    <b>Genero</b>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/genero.svg">
                                        </span>
                                        <input type="radio" name="dgenero" id="dr1<?php echo $rid ?>" class="with-gap radio-col-blue" value="Masculino" <?php
                                                                                                                                                        if ($fila[4] == "Masculino") {
                                                                                                                                                            echo "checked";
                                                                                                                                                        }
                                                                                                                                                        ?>>
                                        <label for="dr1<?php echo $rid ?>">Masculino</label>

                                        <input type="radio" name="dgenero" id="dr2<?php echo $rid ?>" class="with-gap radio-col-blue genero_data" value="Femenino" <?php
                                                                                                                                                                    if ($fila[4] == "Femenino") {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    }
                                                                                                                                                                    ?>>
                                        <label for="dr2<?php echo $rid ?>">Femenino</label>
                                    </div>
                                </div>
                                </p>

                                <p>
                                <div class="col-md-3">
                                    <b>Teléfono</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/phone.svg">
                                        </span>
                                        <input type="String" class="phone-number" style="width : 120px" id="edtel" name="edtel" autocomplete="off" value="<?php echo $fila[6]; ?>" placeholder="Ex: 9999-9999" title="Un numero de telefono valido consta de cuatro digitos seguidos de un guion y cuatro digitos mas." required autofocus>
                                    </div>
                                </div>
                                </p>
                                <p>
                                <div class="col-md-3">
                                    <b>Correo</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/email.svg">
                                        </span>
                                        <input type="String" class="email" id="edcorreo" name="edcorreo" autocomplete="off" value="<?php echo $fila[7]; ?>" required autofocus placeholder="Ex: example@example.com">
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
                                        <textarea type="String" name="eddir" id="eddir" cols="90" rows="5" style="resize: both;" autocomplete="off" required autofocus><?php echo $fila[8]; ?></textarea>
                                    </div>
                                </div>
                                </p>
                            </fieldset>
                    </div>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="modal-footer">
                    <button type="submit" name="editar" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
                    <button type="reset" name="cancelar" class="btn btn-secondary waves-effect"><img src="../images/iconos/cancel.svg">Cancelar</button>
                </div>

                <script src="../js/pages/forms/advanced-form-elements.js"></script>

                <!-- include boostrap theme  -->
                <link rel="stylesheet" href="../alertas/build/css/themes/bootstrap.css">

                <script type="text/javascript">
                    //override defaults
                    alertify.defaults.transition = "slide";
                    alertify.defaults.theme.ok = "btn btn-primary";
                    alertify.defaults.theme.cancel = "btn btn-secondary";
                    alertify.defaults.theme.input = "form-control";
                </script>
                </form>
            </div>
        </div>
    </div>
</div>