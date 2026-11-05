<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $lecturaAnterior = $_POST["lecturaAnterior"];
    $lecturaActual = $_POST["lecturaActual"];
    $aseoUrbano = $_POST["aseoUrbano"];

    $consumo = $lecturaActual - $lecturaAnterior;

    if ($consumo >= 0 && $consumo <= 100) {
        $montoLuz = 2622.00;
    } else if ($consumo >= 101 && $consumo <= 300) {
        $montoLuz = $consumo * 79.78;
    } else if ($consumo >= 301 && $consumo <= 500) {
        $montoLuz = $consumo * 89.52;
    } else {
        $montoLuz = $consumo * 97.95;
    }

    $totalPagar = $montoLuz + $aseoUrbano;
}
?>
