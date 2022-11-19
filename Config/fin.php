<?php 
session_start();
//require_once("./Models/BitacoraModel.php");

//$bitacora = new BitacoraModel;
//$bitacora->insertarSalida();
session_regenerate_id();
session_unset();
session_destroy();

echo "<script languaje='javascript'>";
echo "location.href='../login.php';";
echo "</script>";
?>