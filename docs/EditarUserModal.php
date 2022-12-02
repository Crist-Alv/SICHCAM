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

    ////cambiar contraseña
    function verificar2() {
        if (document.getElementById('NPass').value == "" ||
            document.getElementById('Email').value == "" ||
            document.getElementById('nomb').value == "" ||
            document.getElementById('sex').value == "" ||
            document.getElementById('Email').value == "") {

            alertaError2();

        } else {

            if (document.getElementById('PassAnt').value != "<?php echo $rclave ?>") {
                alertaError3();
            } else {

                if (document.getElementById('NPass').value != document.getElementById('NPassConf').value) {
                    alertaError4();
                } else {

                    $(document).ready(function() {

                        $('#evcontra').click(function() {
                            var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

                            if ($("#Email").val().indexOf('@', 0) == -1 || $("#Email").val().indexOf('.', 0) == -1 || caract.test($('#Email').val()) == false) {
                                alertaErrorC();


                            } else {

                                document.datos.submit();

                            }
                        });
                    });

                }

            }

        }

    }

    function r() {
        location.href = ("ListadoUser.php");
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
                                <p>
                                <div class="col-sm-3 selectContainer">
                                    <b>Rol del Usuario</b>
                                    <div class="form-group">
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
                                    <div class="form-group">
                                        <b>Contraseña</b>
                                        <div class="col-md-10">
                                            <input type="password" id="NPass<?php echo $rid; ?>" name="NPass" autocomplete="off" placeholder="Escriba la nueva contraseña..." value="<?php echo $pass = base64_decode($fila[5]); ?>" required>
                                            <div class="">
                                                <input type="checkbox" id="urecr1<?php echo $rid; ?>" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('NPass<?php echo $rid; ?>').type = this.checked ? 'text' : 'password'">
                                                <label for="urecr1<?php echo $rid; ?>">Mostrar Contraseña</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </p>
                            </fieldset>
                    </div>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="modal-footer">
                    <button type="submit" name="editar" class="btn btn-primary waves-effect" onclick="verificar2()"><img src="../images/iconos/save.svg">Guardar</button>
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