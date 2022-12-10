<?php

function getListaArma(){

    require_once ('../../Config/conexion.php');

    $result_D = mysqli_query($conexion, "SELECT * from tbl_armas");
    
    $html = '<option value="0">Seleccione el Arma...</option>';

    while ($rowD = mysqli_fetch_array($result_D)) {

        $html .= "<option value='$rowD[serie_arma] - $rowD[modelo_arma]'>$rowD[serie_arma] - $rowD[modelo_arma]</option>";
    }
    return $html;
}

    echo getListaArma();
?>