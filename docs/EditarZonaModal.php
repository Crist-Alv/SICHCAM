<!--Modifiar Zona Modal -->
<div class="modal fade" id="ModalEdiZona_<?php echo $ridzona; ?>" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form name="datoszona" id="datoszona" action="FuncionEditZona.php?ridzona=<?php echo $ridzona; ?>" role="form" method="POST" enctype="multipart/form-data" class="form-group">
                            <!--1-->
                            <fieldset>
                                <legend>Datos de la Zona</legend>
                                <div class="row form-group col-md-10">
                                    <p>
                                    <div class="col-sm-3" style="width : 158px">
                                        <b>Nombre de la Zona</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/marcador-de-mapa.svg" width="25" height="25">
                                            </span>
                                            <input type="String" style="width : 80px" name="ednomzona" id="ednomzona" autocomplete="off" value="<?php echo $fila[1]; ?>" required autofocus>
                                        </div>
                                    </div>
                                    </p>

                                <p>
                                <div class="col-md-4">
                                    <b>Descripción</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                                <img src="../images/iconos/marcador-del-mapa.svg" width="25" height="25">
                                            </span>
                                        <textarea type="String" name="eddirzona" id="eddirzona" cols="60" rows="4" style="resize: both;" autocomplete="off" required autofocus><?php echo $fila[2]; ?></textarea>
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