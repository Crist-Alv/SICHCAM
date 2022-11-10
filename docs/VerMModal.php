<!-- Modal Editar -->
<div class="modal fade" id="VerMat_<?php echo $idmateria=$fila[0]; ?>" tabindex="-2" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
             <form role="form" action="" method="post" class="form-group">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Editar Materia</h5>
            </div>

            <div class="modal-body">
                <div class="demo-masked-input">
                    <div class="row clearfix">

                        <div class="col-md-3">
                            <b>Código</b>
                            <div class="input-group">
                                
                                    <h4 class="font-bold col-cyan"><?php echo $fila[3]; ?></h4>
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <b>Nombre de la Materia</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                
                                    <h4 class="font-bold col-cyan"><?php echo $fila[1]; ?></h4>
                                
                            </div>
                        </div>

                        <div class="col-md-8">
                            <b>Descripción</b>
                            <div class="input-group">
                                
                                    <h4 class="font-bold col-cyan"><?php echo $fila[4]; ?></h4>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
            <button type="button" class="btn btn-primary"><img src="../images/iconos/impresora.svg">Imprimir</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"><img src="../images/iconos/close.svg">Cerrar</button>
            </form>
            </div>
        </div>
    </div>
    <script src="../js/pages/forms/advanced-form-elements.js"></script>
</div>
