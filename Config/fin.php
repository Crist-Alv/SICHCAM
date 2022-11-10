<?php session_start();
include 'conexion.php';
if (isset($_SESSION)) {
        //bitacora 
        $usuario = $_SESSION['idUsuario'];
        ini_set('date.timezone', 'America/El_Salvador');
        $fecha = date("Y/m/d");
        $hora = date("h:i:s");
        $actividad = "Cierre de Sesion";
        pg_query("BEGIN");
        $result2 = pg_query($conexion, "INSERT INTO bitacora(actividad,hora,fecha,idusuario) VALUES(trim('$actividad'),'$hora','$fecha','$usuario')");
        
        if (!$result2) {
            pg_query("rollback");
        } else {
            pg_query("commit");
        } 
    }
    //fin bitacora
    

unset($_SESSION["nombreE"]);
unset($_SESSION["autenticado"]);
unset($_SESSION["nivelE"]);

session_destroy();

echo "<script languaje='javascript'>";
        echo "location.href='../login.php';";
           echo "</script>";

?>