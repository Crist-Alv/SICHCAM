<!-- include alertify.css -->
<link rel="stylesheet" href="../../alertas/build/css/alertify.css">

<!-- include boostrap theme  -->
<link rel="stylesheet" href="../../alertas/build/css/themes/bootstrap.css">

<!-- include alertify script -->
<script src="../../alertas/build/alertify.js"></script>

<script type="text/javascript">
    //override defaults
    alertify.defaults.transition = "slide";
    alertify.defaults.theme.ok = "btn btn-primary";
    alertify.defaults.theme.cancel = "btn btn-secondary";
    alertify.defaults.theme.input = "form-control";
</script>

<script language="javascript">
    function alertaExito() {
        alertify.message("<h1>Exito</h1>" + "<p>Se ha registrado correctamente</p>" + "<img src='../../images/bien1.png' width='80' height='80'>").set({
            transition: 'flipx'
        });
    }

    function alertaErrorRegistro() {
        alertify.error("<h1>Error</h1>" + "<p>El correo ya estan vinculados con otro usuario</p>" + "<img src='../../images/error.png' width='80' height='80'>").set({
            transition: 'flipx'
        });
    }

    function alertaError() {
        alertify.error("<h1>Error</h1>" + "<p>Error al momento de guardar los datos</p>" + "<img src='../../images/error.png' width='80' height='80'>").set({
            transition: 'flipx'
        });
    }

    function r() {
        setTimeout(location.href = ("../agente.php"), 15000);
        }
</script>

<?php
include("../../Config/Conexion.php");
if (isset($_POST["enviar"])) {

    $nombres = $_POST["nombres"];
    $nombres = ucwords($nombres);
    $apellidos = $_POST["apellidos"];
    $apellidos = ucwords($apellidos);
    $dui = $_POST["dui"];
    $sexo = $_POST["genero"];
    $codigoag = $_POST["codigo"];
    $tel = $_POST["tel"];
    $correo = $_POST["correo"];
    $direc = $_POST["direc"];
    $activo = 1;

    $rolUser = "Agente";
    $estado = 1;

    $clave = $apellidos . rand(0, 100) . rand(0, 500);
    $clave = base64_encode($clave);

    $query_s2 = mysqli_query($conexion, "SELECT * FROM tbl_agentes where correo_agente='$correo'");
    $rows = mysqli_num_rows($query_s2);

    if ($rows == 0) {

        $result = mysqli_query($conexion, "INSERT INTO tbl_agentes(nombre_agente, apellido_agente, dui_agente, sexo_agente, codigo_cam_agente, telefono_agente, correo_agente, direccion, activo) values(trim('$nombres'),'$apellidos','$dui','$sexo','$codigoag','$tel','$correo','$direc','$activo')");

        if (!$result) {
            echo "<script language='javascript'>";
            echo "alertaError();";
            echo "r();";
            echo "</script>";
        } else {
            //Se crea una cuenta de usuario al agente registrado
            $result2 = mysqli_query($conexion, "INSERT INTO tbl_usuario(nombre_User, sexo_User, correo_User, rol_User, pass_User, estado) values(trim('$nombres'),'$sexo','$correo','$rolUser','$clave','$estado')");
            
            echo "<script language='javascript'>";
            echo "alertaExito();";
            echo "r();";
            echo "</script>";
        }
    } else {
        echo "<script language='javascript'>";
        echo "alertaErrorRegistro();";
        echo "r();";
        echo "</script>";
    }
}
?>