<!--Ver Agente Modal -->
<div class="modal fade" id="ModalVerAr_<?php echo $vidar = $fila[0]; ?>" tabindex="-2" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <legend>Datos del Arma</legend>
                            <div class="row form-group col-md-10">

                                <div class="col-md-4">
                                    <b>N° de Serie</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/lectura-de-codigo-de-barras.svg" width="25" height="25">
                                        </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[2]; ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Modelo</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/documento-firmado.svg" width="25" height="25">
                                        </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[1]; ?>">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <b>Matricula</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/documento-firmado.svg" width="25" height="25">
                                        </span>
                                        <input type="String" readonly="readonly" value="<?php echo $fila[3]; ?>">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="col-md-10">
                                <b>Descripción</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/comentario-alt.svg" width="25" height="25">
                                    </span>
                                    <textarea type="String" readonly="readonly" cols="90" rows="5" style="resize: both;" autocomplete="off"><?php echo $fila[4]; ?></textarea>
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