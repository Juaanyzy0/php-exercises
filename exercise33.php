<?php
$nombreCliente = "Maria Lopez";
$montoCompra = 8200;

if ($montoCompra < 500) {
    $descuento = 0;
} else if ($montoCompra >= 500 && $montoCompra <= 1000) {
    $descuento = $montoCompra * 0.05;
} else if ($montoCompra > 1000 && $montoCompra <= 7000) {
    $descuento = $montoCompra * 0.11;
} else if ($montoCompra > 7000 && $montoCompra <= 15000) {
    $descuento = $montoCompra * 0.18;
} else {
    $descuento = $montoCompra * 0.25;
}

$montoPagar = $montoCompra - $descuento;

echo "Cliente: $nombreCliente <br>";
echo "Monto de la compra: $" . $montoCompra . "<br>";
echo "Descuento recibido: $" . $descuento . "<br>";
echo "Monto a pagar: $" . $montoPagar;
?>

