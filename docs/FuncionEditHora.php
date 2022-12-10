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
        location.href = ("RegistroHorario.php");
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
include_once('../Config/Conexion.php');
if (isset($_POST['editar'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $ridhora = $_GET['ridhora'];
        $zonah = $_POST['edzonah'];
        $agenteh = $_POST['edagenteh'];
        $armah = $_POST['edarmah'];
        $hentrada = $_POST["edhentrada"];
        $hsalida = $_POST['edhsalida'];


        $result = mysqli_query($conexion, "UPDATE horario SET agenteh=trim('$agenteh'), armah=trim('$armah'), zonah=trim('$zonah'), hora_entrada=trim('$hentrada'), hora_salida=trim('$hsalida') WHERE cod_horario='$ridhora'");

        if (!$result) {
            echo "<script language='javascript'>";
            echo "alertaErrorM();";
            echo "</script'>";
            echo "<script language='javascript'>";
            echo "setTimeout ('r()', 1500);";
            echo "</script>";
        } else {
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