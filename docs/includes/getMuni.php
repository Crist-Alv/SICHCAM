<?php

function getListaMuni(){

    require_once ('../../config/conexion.php');

    $idm = $_POST['idm'];

    $result_M = pg_query($conexion, "SELECT * from municipio where iddep=$idm order by municipio ASC");
    
    $html = '<option value="0">Seleccione...</option>';

    while ($rowM = pg_fetch_array($result_M)) {
        $html .= "<option value='$rowM[idmunicipio]'>$rowM[municipio]</option>";
    }
    return $html;
}

    echo getListaMuni();
?>