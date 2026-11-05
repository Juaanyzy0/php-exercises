<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $lecturaAnterior = $_POST["lecturaAnterior"];
    $lecturaActual = $_POST["lecturaActual"];
    $costoKwh = $_POST["costoKwh"];

    $consumo = $lecturaActual - $lecturaAnterior;
    $montoTotal = $consumo * $costoKwh;
}
?>
