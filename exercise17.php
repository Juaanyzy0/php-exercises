<?php
$pvp = 120000;
$precioPagado = 96000;

$descuento = $pvp - $precioPagado;
$porcentaje = ($descuento * 100) / $pvp;

echo "Precio de venta al publico: $" . $pvp . "<br>";
echo "Precio final pagado: $" . $precioPagado . "<br>";
echo "Porcentaje de descuento aplicado: " . $porcentaje . "%";
?>

