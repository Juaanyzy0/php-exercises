<?php
// datos de prueba del ejercicio
$x = 48000;
$y = 6;
$k = 42000;

$docenas = $x / 12;
$inversion = $docenas * $y;

$ganancia = $k - $inversion;
$porcentajeGanancia = ($ganancia * 100) / $inversion;

echo "Inversion total: " . $inversion . " Bs <br>";
echo "Total obtenido en ventas: " . $k . " Bs <br>";
echo "Porcentaje de ganancia: " . $porcentajeGanancia . "%";
?>

