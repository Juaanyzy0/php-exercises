<?php
$p = 1500000; // precio de contado
$t = 145000; // valor de cada cuota

$totalCuotas = $t * 12;
$recargo = $totalCuotas - $p;

$porcentajeRecargo = ($recargo * 100) / $p;

echo "Precio al contado: " . $p . " Bs <br>";
echo "Total pagando 12 cuotas: " . $totalCuotas . " Bs <br>";
echo "Porcentaje de recargo por cuotas: " . $porcentajeRecargo . "%";
?>

