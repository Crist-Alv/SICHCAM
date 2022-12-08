<script language="javascript">
    function alertaErrorM() {
        alertify.error("<p>No se puedieron modificar con exito</p>" + "<img src='../images/error.png' width='80' height='80'>").dismissOthers();
    }

    function alertaExitoM() {
        alertify.message("<p>Los datos se modificaron exitosamente</p>" + "<img src='../images/bien1.png' width='80' height='80'>").set({
            transition: 'flipx'
        });
    }

    function r() {
        location.href = ("listadoArma.php");
    }
</script>
<!-- include alertify.css -->
<link rel="stylesheet" href="../alertas/build/css/alertify.css">

<!-- include boostrap theme  -->
<link rel="stylesheet" href="../alertas/build/css/themes/bootstrap.css">

<!-- include alertify script -->
<script src="../alertas/build/alertify.js"></script>

<script type="text/javascript">
    //override defaults
    alertify.defaults.transition = "slide";
    alertify.defaults.theme.ok = "btn btn-primary";
    alertify.defaults.theme.cancel = "btn btn-secondary";
    alertify.defaults.theme.input = "form-control";
</script>

<?php
session_start();
include_once('../Config/conexion.php');
if (isset($_POST['editar'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $rid = $_GET['rid'];
        $nserie = $_POST['ednserie'];
        $matricula = $_POST['edmatri'];
        $modelo = $_POST['edmodelo'];
        $desc = $_POST['eddesc'];

        $result = mysqli_query($conexion, "UPDATE tbl_armas SET modelo_arma = trim('$modelo'), serie_arma = trim('$nserie'), matricula_arma = trim('$matricula'), descripcion_arma = trim('$desc') WHERE id_arma='$rid'");

        if (!$result) {
            echo "<script language='javascript'>";
            echo "alertaErrorM();";
            echo "</script'>";
            echo "<script language='javascript'>";
            echo "setTimeout ('r()', 1500);";
            echo "</script>";
        } else {

            /*/bitacora 
         if (isset($_SESSION)) {
            $usuario = $_SESSION['idUsuario'];
            ini_set('date.timezone', 'America/El_Salvador');
            $fecha = date("Y/m/d");
            $hora = date("h:i:s");
            $actividad = "Modifico al Docente" . $nombresD . "";
            pg_query("BEGIN");
            $result2 = pg_query($conexion, "INSERT INTO bitacora(actividad,hora,fecha,idusuario) VALUES(trim('$actividad'),'$hora','$fecha','$usuario')");

            if (!$result2) {
                pg_query("rollback");
            } else {
                pg_query("commit");
            }
        }
        //fin bitacora*/

            echo "<script language='javascript'>";
            echo "alertaExitoM();";
            echo "</script>";
            echo "<script language='javascript'>";
            echo "setTimeout ('r()', 1000);";
            echo "</script>";
        }
    }
}
?>