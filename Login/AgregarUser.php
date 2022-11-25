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

<script language="javascript">
    function alertaExito() {
        alertify.message("<h1>Exito</h1>" + "<p>Se ha registrado correctamente</p>" + "<img src='../images/bien1.png' width='80' height='80'>").set({
            transition: 'flipx'
        });
    }

    function alertaErrorRegistro() {
        alertify.error("<h1>Error</h1>" + "<p>El correo ya estan vinculados con otro usuario</p>" + "<img src='../images/error.png' width='80' height='80'>").set({
            transition: 'flipx'
        });
    }

    function r() {
        location.href = ("login.php");
    }
</script>

<?php
include("../Config/Conexion.php");
if (isset($_POST["enviar"])) {

    $nombre = $_POST["nombre"];
    $nombre = ucwords($nombre);
    $clave = $_POST["clave"];
    $email = $_POST["email"];
    $rol = $_POST["rol"];
    $sexo = $_POST["sexo"];

    $clave = base64_encode($clave);

    $query_s2 = mysqli_query($conexion, "SELECT * FROM tbl_usuario where correo_User='$email' ");
    $rows = mysqli_num_rows($query_s2);

    if ($rows == 0) {

        $result = mysqli_query($conexion, "INSERT INTO tbl_usuario(nombre_User, sexo_User, correo_User, rol_User, pass_User) values(trim('$nombre'),'$sexo','$email','$rol','$clave')");

        if (!$result) {
            echo "<script language='javascript'>";
            echo "alertaError();";
            echo "</script>";
            echo "<script language='javascript'>";
            echo "setTimeout ('r()', 1500);";
            echo "</script>";
        } else {
            echo "<script language='javascript'>";
            echo "alertaExito();";
            echo "</script>";
            echo "<script language='javascript'>";
            echo "setTimeout ('r()', 1500);";
            echo "</script>";
        }
    } else {

        echo "<script language='javascript'>";
        echo "alertaErrorRegistro();";
        echo "</script>";
        echo "<script language='javascript'>";
        echo "setTimeout ('r()', 1500);";
        echo "</script>";
    }
}
?>