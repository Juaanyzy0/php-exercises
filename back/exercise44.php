<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $inversionTotal = $_POST["inversionTotal"];
    $montoHipoteca = $_POST["montoHipoteca"];

    if ($montoHipoteca < 1000000) {
        $inversionPersona = $inversionTotal * 0.50;
        $inversionSocio = $inversionTotal * 0.50;
    } else {
        $faltante = $inversionTotal - $montoHipoteca;
        $inversionPersona = $montoHipoteca + ($faltante / 2);
        $inversionSocio = $faltante / 2;
    }
}
?>
