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
<div class="modal fade" id="ModalEdiUser_<?php echo $rid; ?>" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form name="datos" id="datos" action="FuncionEditUser.php?rid=<?php echo $rid; ?>" role="form" method="POST" enctype="multipart/form-data" class="form-group">
                            <!--1-->
                            <fieldset>
                                <legend>Datos del Agente</legend>
                                <div class="row form-group col-md-12">
                                    <p>
                                    <div class="col-md-4">
                                        <b>Nombre de Usuario</b>
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
                                        <b>Genero</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/genero.svg">
                                            </span>
                                            <input type="radio" name="dgenero" id="dr1<?php echo $rid ?>" class="with-gap radio-col-blue" value="Masculino" <?php
                                                                                                                                                            if ($fila[2] == "Masculino") {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>
                                            <label for="dr1<?php echo $rid ?>">Masculino</label>

                                            <input type="radio" name="dgenero" id="dr2<?php echo $rid ?>" class="with-gap radio-col-blue genero_data" value="Femenino" <?php
                                                                                                                                                                        if ($fila[2] == "Femenino") {
                                                                                                                                                                            echo "checked";
                                                                                                                                                                        }
                                                                                                                                                                        ?>>
                                            <label for="dr2<?php echo $rid ?>">Femenino</label>
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
                                            <input type="String" class="email" id="edcorreo" name="edcorreo" autocomplete="off" value="<?php echo $fila[3]; ?>" required autofocus placeholder="Ex: example@example.com">
                                        </div>
                                    </div>
                                    </p>
                            </fieldset>

                            <fieldset>
                                <div class="form-group">
                                    <label for="NPass" class="col-sm-3 control-label">Nueva contraseña</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="NPass" name="NPass" autocomplete="off" placeholder="Escriba la nueva contraseña..." required>
                                    </div>
                                    <div class="col-xs-7 p-t-6">
                                        <input type="checkbox" id="urecr1<?php echo $rid; ?>" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('NPass').type = this.checked ? 'text' : 'password'">
                                        <label for="urecr1<?php echo $rid; ?>">Mostrar Contraseña</label>
                                    </div>
                                </div>
                                
                                    <label for="NPassConf" class="col-sm-3 control-label">Nueva Contraseña (Confirmar)</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="NPassConf" name="NPassConf" autocomplete="off" placeholder="Confirmar la nueva contraseña..." required>

                                    </div>
                                    <div class="col-xs-7 p-t-6">
                                        <input type="checkbox" id="urecr2<?php echo $rid; ?>" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('NPassConf').type = this.checked ? 'text' : 'password'">
                                        <label for="urecr2<?php echo $rid; ?>">Mostrar Contraseña</label>
                                    </div>
                            
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