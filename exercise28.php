<?php
$montoCompra = 600000;

if ($montoCompra > 500000) {
    $fondosEmpresa = $montoCompra * 0.55;
    $prestamoBanco = $montoCompra * 0.30;
    $creditoFabricante = $montoCompra * 0.15;
} else {
    $fondosEmpresa = $montoCompra * 0.70;
    $prestamoBanco = 0;
    $creditoFabricante = $montoCompra * 0.30;
}

// el fabricante cobra 20% de interes sobre el credito
$intereses = $creditoFabricante * 0.20;

echo "Monto total de la compra: $" . $montoCompra . "<br>";
echo "Cantidad a invertir de la empresa: $" . $fondosEmpresa . "<br>";
echo "Cantidad a pagar a credito: $" . $creditoFabricante . "<br>";
echo "Monto a pagar por intereses: $" . $intereses . "<br>";

if ($prestamoBanco > 0) {
    echo "Cantidad prestada al banco: $" . $prestamoBanco;
}
?>

