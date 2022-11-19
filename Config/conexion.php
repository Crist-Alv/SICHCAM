<?php
$conexion=mysqli_connect('localhost', 'root', '', 'cam_cedros');
if(mysqli_connect_errno($conexion)){
	echo "Error de conexion a la Base de Datos";
	exit;
	}
?>