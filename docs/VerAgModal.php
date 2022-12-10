<!--Ver Agente Modal -->
<div class="modal fade" id="ModalVerAg_<?php echo $viddoc = $fila[0]; ?>" tabindex="-2" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <legend>Datos del Agente</legend>
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
                                    <b>DUI</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/dn.svg">
                                        </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[3]; ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>N° de Placa</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/dn.svg">
                                        </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[5]; ?>">
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
                            </div>


                            <div class="row form-group col-md-10">

                                <div class="col-md-4">
                                    <b>Teléfono</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/phone.svg">
                                        </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[6]; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Correo</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/email.svg">
                                        </span>
                                        <input type="email" readonly="readonly" value="<?php echo $fila[7]; ?>">
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
                                    <textarea type="String" readonly="readonly" cols="90" rows="5" style="resize: both;" autocomplete="off"><?php echo $fila[8]; ?></textarea>
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