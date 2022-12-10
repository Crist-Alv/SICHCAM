<?php

function getListaZona(){

    require_once ('../../Config/conexion.php');

    $result_D = mysqli_query($conexion, "SELECT * from tbl_zonas order by nombre_zona ASC");
    
    $html = '<option value="0">Seleccione la Zona...</option>';

    while ($rowD = mysqli_fetch_array($result_D)) {
        $html .= "<option value='$rowD[nombre_zona]'>$rowD[nombre_zona]</option>";
    }
    return $html;
}

    echo getListaZona();
?>