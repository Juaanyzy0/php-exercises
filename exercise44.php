<?php
$inversionTotal = 2500000;
$montoHipoteca = 1200000;

if ($montoHipoteca < 1000000) {
    $inversionPersona = $inversionTotal * 0.50;
    $inversionSocio = $inversionTotal * 0.50;
} else {
    $faltante = $inversionTotal - $montoHipoteca;
    $inversionPersona = $montoHipoteca + ($faltante / 2);
    $inversionSocio = $faltante / 2;
}

echo "Inversion total necesaria: $" . $inversionTotal . "<br>";
echo "Monto de la hipoteca: $" . $montoHipoteca . "<br>";
echo "Dinero que invertira la persona: $" . $inversionPersona . "<br>";
echo "Dinero que invertira el socio: $" . $inversionSocio;
?>

