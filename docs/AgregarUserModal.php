<script language="javascript">
    function validar() {
        if (document.getElementById('nombre').value == "" ||
            document.getElementById('clave').value == "" ||
            document.getElementById('claveconf').value == "" ||
            document.getElementById('email').value == "" ||
            document.getElementById('rol').value == "" ||
            document.getElementById('sexo').value == "" ||
            document.getElementById('cargo').value == "") {
            alertaError();
        } else {
            if (document.getElementById('clave').value != document.getElementById('claveconf').value) {
                alertaError2();
            }
        }

        function alertaError() {
            alertify.error("<h1>Error</h1>" + "<p>Campos sin llenar</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();
        }

        function alertaError2() {
            alertify.error("<h1>Error</h1>" + "<p>Las contraseña no coinciden</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();
        }
    }
</script>
<!--Agregar nuevo Usuario Modal -->
<div class="modal fade" id="AgregarUserModal" tabindex="-2" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="demo-masked-input">
                    <div class="row clearfix">
                        <form name="datos" id="datos" role="form" action="../docs/FuncionAgregarUser.php" enctype="multipart/form-data" method="POST" class="form-group">
                            <legend>Datos del Usuario</legend>
                            <fieldset>
                                <div class="row form-group col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/person.svg" />
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del Usuario" autocomplete="off" required autofocus>
                                        </div>
                                    </div>

                                    <p>
                                    <div class="col-sm-12 selectContainer">
                                        <div class="form-group">
                                            <select type="text" name="sexo" id="sexo" class="form-control" placeholder="Sexo" autocomplete="off" required>
                                                <option value="" disabled selected>Seleccione el sexo...</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>

                                            </select>
                                        </div>
                                    </div>
                                    </p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/email.svg" />
                                        </span>
                                        <div class="form-line">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Dirección de correo electrónico" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <p>
                                    <div class="col-sm-12 selectContainer">
                                        <div class="form-group">
                                            <select type="text" name="rol" id="rol" class="form-control" placeholder="rol" autocomplete="off" required>
                                                <option value="" disabled selected>Seleccione un rol...</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Agente">Agente</option>

                                            </select>
                                        </div>
                                    </div>
                                    </p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/lock.svg" />
                                        </span>
                                        <div class="form-line">
                                            <input type="password" name="clave" id="clave" class="form-control" minlength="6" placeholder="Contraseña" autocomplete="off" required>
                                        </div>
                                        <div class="col-xs-15">
                                            <input type="checkbox" id="urecr1" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('clave').type = this.checked ? 'text' : 'password'">
                                            <label for="urecr1">Mostrar Contraseña</label>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/lock.svg" />
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control" class="form-control" name="claveconf" id="claveconf" minlength="6" placeholder="Confirmar Contraseña" autocomplete="off" required>
                                        </div>
                                        <div class="col-xs-15">
                                            <input type="checkbox" id="urecr2" class="fa fa-fw fa-eye password-icon show-password" onchange="document.getElementById('claveconf').type = this.checked ? 'text' : 'password'">
                                            <label for="urecr2">Mostrar Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                    </div>
                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
                <button type="submit" name="agregar" onclick="validar()" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
                <button type="reset" name="cancelar" class="btn btn-secondary"><img src="../images/iconos/cancel.svg">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><img src="../images/iconos/close.svg">Cerrar</button>
            </div>
            </form>
        </div>
    </div>
</div>