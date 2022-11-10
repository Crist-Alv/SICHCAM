<script language="javascript">
    function alertaExito() {
        alertify.message("<h1>Exito</h1>" + "<p>Se guardo exitosamente</p>" + "<img src='../images/bien1.png'>").set({
            transition: 'flipx'
        });
    }

    function alertaError() {
        alertify.error("<h1>Error</h1>" + "<p>No se puedo guardar con exito</p>" + "<img src='../images/error.png'>").dismissOthers();


    }
</script>
<?php
include_once('../config/conexion.php');
if (isset($_POST['editar'])) {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $iddoc = $_GET['iddoc'];
    $nombresD = $_POST['ednombres'];
    $apellidosD = $_POST['edapellidos'];
    $fechanac = $_POST['edfechanac'];
    $genero = $_POST['dgenero'];
    $esp  = $_POST['edesp'];
    $nacionalidad = $_POST['ednacion'];
    $depto = $_POST['eddepto'];
    $mun = $_POST['edmun'];
    $direccion = $_POST['eddir'];
    $correo = $_POST['edcorreo'];
    $telefono = $_POST['edtel'];

    pg_query("BEGIN");


    $result = pg_query($conexion, "UPDATE docente SET nombresd=trim('$nombresD'), apellidosd=trim('$apellidosD'),fechanac='$fechanac', generod=trim('$genero'), especialidad=trim('$esp'), nacionalidad=trim('$nacionalidad'), 
              depdocente=trim('$depto'), municipiodocente=trim('$mun'),telefono=trim('$telefono'),correo=trim('$correo'), direccion=trim('$direccion') WHERE iddocente='$iddoc'");

    if (!$result) {
        pg_query("rollback");
        echo "alertaError();";
        echo "<script language='javascript'>";
        echo "setTimeout ('r()', 1500);";
        echo "</script>";
    } else {

         //bitacora 
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
        //fin bitacora

        pg_query("commit");
        echo "<script language='javascript'>";
        echo "alertaExito();";
        echo "</script>";
    }
    }
}
header('location: ../docs/docente.php');
?>