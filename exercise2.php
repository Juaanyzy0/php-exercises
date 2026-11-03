<?php
$capital = 500000;
$porcentaje = 0.02;

// ganancia del mes al 2%
$ganancia = $capital * $porcentaje;
$total = $capital + $ganancia;

echo "Capital invertido: $" . $capital . "<br>";
echo "La ganancia en un mes es: $" . $ganancia . "<br>";
echo "Total con ganancia: $" . $total;
?>

