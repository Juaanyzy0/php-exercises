<?php
$km = 1150;

if ($km <= 300) {
    $pago = 5000;
} else if ($km > 300 && $km <= 1000) {
    $kmExtra = $km - 300;
    $pago = 5000 + ($kmExtra * 200);
} else {
    // mas de 1000 km
    $tramoMedio = 700 * 200; // entre 300 y 1000 hay 700 km
    $kmMayores = $km - 1000;
    $pago = 5000 + $tramoMedio + ($kmMayores * 150);
}

echo "Distancia recorrida: $km km <br>";
echo "Total a pagar por el alquiler: " . $pago . " Bs";
?>

