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
		$arquivo = 'Listado_de_Armas.xls';

		// Crear la tabla HTML
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="4">Tabla Listado de Armas</tr>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<td><b>Modelo</b></td>';
		$html .= '<td><b>N° de Serie</b></td>';
		$html .= '<td><b>Matricula</b></td>';
		$html .= '<td><b>Descripción</b></td>';
		$html .= '</tr>';

		//Seleccionar todos los elementos de la tabla
		$result_msg_contatos = "SELECT * FROM tbl_armas";
		$resultado_msg_contatos = mysqli_query($conexion, $result_msg_contatos);

		while ($row_msg_contatos = mysqli_fetch_array($resultado_msg_contatos)) {
			$html .= '<tr>';
			$html .= '<td>' . $row_msg_contatos[1] . '</td>';
			$html .= '<td>' . $row_msg_contatos[2] . '</td>';
			$html .= '<td>' . $row_msg_contatos[3] . '</td>';
			$html .= '<td>' . $row_msg_contatos[4] . '</td>';
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