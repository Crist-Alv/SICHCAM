<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/ui/animations.js"></script>
</body>

<!-- Modal -->
<div class="modal fade" id="ModalCuenta" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
            </div>

            <div class="modal-body">
                <div class="demo-masked-input">
                    <div class="row clearfix">
                        <form id="sign_up" method="POST" id="frmsicacecsj" name="frmsicacecsj">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nombres" placeholder="Nombre de Usuario" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" placeholder="Dirección de correo electrónico" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="clave" minlength="6" placeholder="Contraseña" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="material-icons">save</i>Guardar</button>
                <button type="button" class="btn btn-secondary"><i class="material-icons">cancel</i>Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="material-icons">close</i>Cerrar</button>
            </div>
        </div>
    </div>
    <script src="../js/pages/examples/sign-up.js"></script>
</div>

<!-- Modal Cerrar Sesion -->
<div class="modal fade" id="ModalCerrar" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button></h5>

            </div>
            <div class="modal-body">
                <div class="envolcentro">
                    <img src="images/warning.png" />
                    <hr class="sidebar-divider d-none d-md-block">
                    Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <li onClick="Salir()" data-placement="bottom" class="btn btn-primary">Cerrar sesión</li>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<!-- datetimepicker -->
<script src="../js/moment-with-locales.js"></script>
<script src="../js/bootstrap-datetimepicker.js"></script>
<!-- validate -->
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/additional-methods.min.js"></script>
<script src="../js/script2.js"></script>
<!-- script -->

</html>