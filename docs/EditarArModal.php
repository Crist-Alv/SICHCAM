<!--Modifiar Agente Modal -->
<div class="modal fade" id="ModalEdiAr_<?php echo $rid; ?>" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form name="datos" id="datos" action="FuncionEditArma.php?rid=<?php echo $rid; ?>" role="form" method="POST" enctype="multipart/form-data" class="form-group">
                            <!--1-->
                            <fieldset>
                                <legend>Datos del Arma</legend>
                                <div class="row form-group col-md-10">
                                    <p>
                                    <div class="col-sm-3" style="width : 158px">
                                        <b>N° de Serie *</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/lectura-de-codigo-de-barras.svg" width="25" height="25">
                                            </span>
                                            <input type="String" style="width : 80px" name="ednserie" id="ednserie" autocomplete="off" value="<?php echo $fila[2]; ?>" required autofocus>
                                        </div>
                                    </div>
                                    </p>

                                    <p>
                                    <div class="col-md-3" style="width : 165px">
                                        <b>Matricula *</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/documento-firmado.svg" width="25" height="25">
                                            </span>
                                            <input type="String" style="width : 110px" name="edmatri" id="edmatri" autocomplete="off" value="<?php echo $fila[3]; ?>" required>
                                        </div>
                                    </div>
                                    </p>

                                    <p>
                                    <div class="col-md-3">
                                        <b>Modelo</b>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                                <img src="../images/iconos/documento-firmado.svg" width="25" height="25">
                                            </span>
                                            <input type="String" style="width : 150px" id="edmodelo" name="edmodelo" autocomplete="off" value="<?php echo $fila[1]; ?>" required autofocus>
                                        </div>
                                    </div>
                                    </p>                                   
                            </fieldset>                           

                            <fieldset>
                                <p>
                                <div class="col-md-4">
                                    <b>Descripción</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                                <img src="../images/iconos/comentario-alt.svg" width="25" height="25">
                                            </span>
                                        <textarea type="String" name="eddesc" id="eddesc" cols="90" rows="5" style="resize: both;" autocomplete="off" required autofocus><?php echo $fila[4]; ?></textarea>
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
                </form>
            </div>
        </div>
    </div>
</div>