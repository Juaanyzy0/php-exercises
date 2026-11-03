<?php
$lecturaAnterior = 1250;
$lecturaActual = 1420;
$costoKwh = 350;

$consumo = $lecturaActual - $lecturaAnterior;
$montoTotal = $consumo * $costoKwh;

echo "Consumo del mes: $consumo Kwh <br>";
echo "Monto total a pagar de luz: $" . $montoTotal;
?>

