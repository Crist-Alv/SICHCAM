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
                        <form name="datos2" id="datos2" action="FuncionEditUser.php?rid=<?php echo $rid; ?>" role="form" method="POST" enctype="multipart/form-data" class="form-group">
                            <!--1-->
                            <fieldset>
                                <legend>Datos del Usuario</legend>
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
                                <p>
                                <div class="col-sm-3 selectContainer">
                                    <b>Rol del Usuario</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/face.svg">
                                        </span>
                                        <select type="text" name="rol" id="rol" class="form-control" placeholder="rol" autocomplete="off" required>
                                            <option value="<?php echo $fila[4]; ?>"><?php echo $fila[4]; ?></option>
                                            <option value="Administrador">Administrador</option>
                                            <option value="Agente">Agente</option>
                                        </select>
                                    </div>
                                </div>
                                </p>
                                <p>
                                <div class="col-md-4">
                                    <b>Contraseña</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/lock.svg">
                                        </span>
                                        <input type="password" id="NPass<?php echo $rid; ?>" name="NPass" autocomplete="off" placeholder="Escriba la nueva contraseña..." value="<?php echo $pass = base64_decode($fila[5]); ?>" required>
                                        <div class="col-xs-15">
                                            <input type="checkbox" id="urecr1<?php echo $rid; ?>" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('NPass<?php echo $rid; ?>').type = this.checked ? 'text' : 'password'">
                                            <label for="urecr1<?php echo $rid; ?>">Mostrar Contraseña</label>
                                        </div>

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