<?php
$capital = 50000; // X
$intereses = 12000; // Y
$tiempo = 4;

// despejando la razon de la formula I = (C * T * R) / 100
$razon = ($intereses * 100) / ($capital * $tiempo);

echo "Prestamo (Capital): " . $capital . " Bs <br>";
echo "Intereses pagados en 4 anos: " . $intereses . " Bs <br>";
echo "El porcentaje anual cobrado fue de: " . $razon . "%";
?>

