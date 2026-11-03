<?php
$totalCompra = 85000;
$descuento = $totalCompra * 0.15;
$pagoFinal = $totalCompra - $descuento;

echo "Total de la compra: $" . $totalCompra . "<br>";
echo "Descuento (15%): $" . $descuento . "<br>";
echo "Total a pagar finalmente: $" . $pagoFinal;
?>

