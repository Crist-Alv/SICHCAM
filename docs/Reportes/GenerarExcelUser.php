<?php session_start();
$t = $_SESSION['rol_User'];
$iddatos = $_SESSION['id_User'];
if ($_SESSION['autenticado'] != 'yeah' || $t != "Administrador") {
    header('Location: ../../index.php');
    exit();
}
include_once '../../Config/Conexion.php';
?>

<!DOCTYPE html>
<html lang="es-es">

<head>
	<meta charset="utf-8">
	<title>Listado de Agentes Activos</title>

	<head>

	<body>
		<?php
		// Definimos el archivo exportado
		$arquivo = 'Listado_de_Usuarios.xls';

		// Crear la tabla HTML
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Tabla Listado de Usuarios</tr>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<td><b>Nombres</b></td>';
		$html .= '<td><b>Correo Electrónico</b></td>';
		$html .= '<td><b>Genero</b></td>';
		$html .= '<td><b>Rol</b></td>';
		$html .= '<td><b>Estado</b></td>';
		$html .= '</tr>';

		//Seleccionar todos los elementos de la tabla
		$result_msg_contatos = "SELECT * FROM tbl_usuario ORDER BY estado=1 DESC";
		$resultado_msg_contatos = mysqli_query($conexion, $result_msg_contatos);

		while ($row_msg_contatos = mysqli_fetch_array($resultado_msg_contatos)) {
			if($row_msg_contatos[6] == 1){
				$estado = "Activo";
			}else{
				$estado = "Inactivo";
			}
			$html .= '<tr>';
			$html .= '<td>' . $row_msg_contatos[1] . '</td>';
			$html .= '<td>' . $row_msg_contatos[3] . '</td>';
			$html .= '<td>' . $row_msg_contatos[2] . '</td>';
			$html .= '<td>' . $row_msg_contatos[4] . '</td>';
			$html .= '<td>' . $estado . '</td>';
			$html .= '</tr>';;
		}
		// Configuración en la cabecera
		header("Expires: 0");
		header("Cache-Control: no-cache, must-revalidate");
		header("Pragma: no-cache");
		header("Content-type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
		header("Content-Description: PHP Generado Data");
		// Envia contenido al archivo
		echo $html;
		exit; ?>
	</body>

</html>