<?php
$galones = 12;
$litrosPorGalon = 3.785;
$precioLitro = 100;

$litrosTotales = $galones * $litrosPorGalon;
$totalCobrar = $litrosTotales * $precioLitro;

echo "Galones surtidos: $galones <br>";
echo "Equivalente en litros: $litrosTotales <br>";
echo "Total a cobrar al cliente: " . $totalCobrar . " Bs";
?>

