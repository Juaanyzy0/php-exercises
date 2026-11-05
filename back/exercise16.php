<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $largo = $_POST["largo"];
    $ancho = $_POST["ancho"];
    $consumoPieza = $_POST["consumoPieza"];

    $areaLamina = $largo * $ancho;

    // usamos intval para sacar las piezas completas
    $cantidadPiezas = intval($areaLamina / $consumoPieza);
    $desperdicio = $areaLamina - ($cantidadPiezas * $consumoPieza);
}
?>
