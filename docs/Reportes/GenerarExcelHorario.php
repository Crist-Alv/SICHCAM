<?php session_start();
$iddatos = $_SESSION['id_User'];
if ($_SESSION['autenticado'] != 'yeah') {
    header('Location: ../../index.php');
    exit();
}
include_once '../../Config/Conexion.php';
?>

<!DOCTYPE html>
<html lang="es-es">

<head>
    <meta charset="utf-8">
    <title>Tabla Registro de Horarios</title>

    <head>

    <body>
        <?php
        // Definimos el archivo exportado
        $arquivo = 'Tabla_Registro_de_Horarios.xls';

        // Crear la tabla HTML
        $html = '';
        $html .= '<table border="1">';
        $html .= '<tr>';
        $html .= '<td colspan="6">Tabla Registro de Horarios</tr>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td><b>Fecha Asignada</b></td>';
        $html .= '<td><b>Zona Asignada</b></td>';
        $html .= '<td><b>Agente Asignado/a</b></td>';
        $html .= '<td><b>Arma Asignada</b></td>';
        $html .= '<td><b>Hora de Entrada</b></td>';
        $html .= '<td><b>Hora de Salida</b></td>';
        $html .= '</tr>';

        //Seleccionar todos los elementos de la tabla
        $fechacon2 = date('Y-m-d');
        $result_msg_contatos = "SELECT * FROM horario ORDER BY fecha_horario DESC";
        $resultado_msg_contatos = mysqli_query($conexion, $result_msg_contatos);

        while ($row_msg_contatos = mysqli_fetch_array($resultado_msg_contatos)) {
            $html .= '<tr>';
            $html .= '<td>' . $row_msg_contatos[1] . ' - ' . date("d/m/Y", strtotime($row_msg_contatos[7])) . '</td>';
            $html .= '<td>' . $row_msg_contatos[4] . '</td>';
            $html .= '<td>' . $row_msg_contatos[2] . '</td>';
            $html .= '<td>' . $row_msg_contatos[3] . '</td>';
            $html .= '<td>' . $row_msg_contatos[5] . '</td>';
            $html .= '<td>' . $row_msg_contatos[6] . '</td>';
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