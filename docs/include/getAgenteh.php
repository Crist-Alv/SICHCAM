<?php

function getListaAgente(){

    require_once ('../../Config/conexion.php');

    $result_D = mysqli_query($conexion, "SELECT * from tbl_agentes where activo=1 order by nombre_agente ASC");
    
    $html = '<option value="0">Seleccione al Agente...</option>';

    while ($rowD = mysqli_fetch_array($result_D)) {
        $agente = $rowD['nombre_agente']. ' ' .$rowD['apellido_agente'];
        $html .= "<option value='$agente'>$agente</option>";
    }
    return $html;
}

    echo getListaAgente();
?>