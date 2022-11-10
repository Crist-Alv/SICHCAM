<?php

function getListaDepto(){

    require_once ('../../config/conexion.php');

    $result_D = pg_query($conexion, "SELECT * from departamento order by departamento ASC");
    
    $html = '<option value="0">Seleccione...</option>';

    while ($rowD = pg_fetch_array($result_D)) {
        $html .= "<option value='$rowD[iddep]'>$rowD[departamento]</option>";
    }
    return $html;
}

    echo getListaDepto();
?>