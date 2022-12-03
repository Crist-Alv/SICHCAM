<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/font-awesome.css">
<!--Ver Agente Modal -->
<div class="modal fade" id="ModalVerUser_<?php echo $viduser = $fila[0]; ?>" tabindex="-2" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <legend>Datos del Usuario</legend>
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
                                    <b>Genero</b>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/genero.svg">
                                        </span>
                                        <input type="radio" name="gd" id="md" class="with-gap radio-col-blue" value="Masculino" disabled <?php
                                                                                                                                            $gend = $fila[2];
                                                                                                                                            if ($gend == "Masculino") {
                                                                                                                                                echo "checked";
                                                                                                                                            }
                                                                                                                                            ?>>
                                        <label for="md">Masculino</label>

                                        <input type="radio" name="gd" id="fd" class="with-gap radio-col-blue" value="Femenino" disabled <?php
                                                                                                                                        $gend = $fila[2];
                                                                                                                                        if ($gend == "Femenino") {
                                                                                                                                            echo "checked";
                                                                                                                                        }
                                                                                                                                        ?>>
                                        <label for="fd" class="m-l-20">Femenino</label>

                                    </div>
                                </div>
                            </div>


                            <div class="row form-group col-md-10">
                                <div class="col-md-4">
                                    <b>Correo</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/email.svg">
                                        </span>
                                        <input type="email" readonly="readonly" value="<?php echo $fila[3]; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Rol</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/face.svg">
                                        </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[4]; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Contraseña</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/lock.svg">
                                        </span>
                                        <input type="password" id="clavex<?php echo $viduser; ?>" readonly="readonly" value="<?php echo $pass = base64_decode($fila[5]); ?>">
                                        <div class="col-xs-15">
                                        <input type="checkbox" id="recr<?php echo $viduser; ?>" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('clavex<?php echo $viduser; ?>').type = this.checked ? 'text' : 'password'">
                                        <label for="recr<?php echo $viduser; ?>">Mostrar Contraseña</label>
                                    </div>
                                    </div>                                    
                                </div>
                            </div>
                        </fieldset>
                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><img src="../images/iconos/close.svg">Cerrar</button>
            </div>
            </form>
        </div>
    </div>
</div>