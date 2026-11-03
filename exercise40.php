<?php
$lecturaAnterior = 2100;
$lecturaActual = 2350;
$aseoUrbano = 500;

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

echo "Consumo en Kwh: " . $consumo . "<br>";
echo "Costo por luz electrica: " . $montoLuz . " Bs <br>";
echo "Servicio de aseo urbano: " . $aseoUrbano . " Bs <br>";
echo "Monto total a pagar: " . $totalPagar . " Bs";
?>

