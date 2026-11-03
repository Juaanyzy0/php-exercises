<?php
$sueldoBase = 1200000;
$venta1 = 250000;
$venta2 = 400000;
$venta3 = 180000;

$totalVentas = $venta1 + $venta2 + $venta3;
// el 10% de las 3 ventas
$comision = $totalVentas * 0.10;
$sueldoTotal = $sueldoBase + $comision;

echo "Sueldo base: $" . $sueldoBase . "<br>";
echo "Total comisiones del mes: $" . $comision . "<br>";
echo "Total que recibe el vendedor: $" . $sueldoTotal;
?>

