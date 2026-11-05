<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $montoCompra = $_POST["montoCompra"];

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
}
?>
