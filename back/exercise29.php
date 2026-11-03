<?php
$ventasDepto1 = 4500000;
$ventasDepto2 = 3200000;
$ventasDepto3 = 2000000;
$salarioBase = 1100000;

$ventasTotales = $ventasDepto1 + $ventasDepto2 + $ventasDepto3;
$limite = $ventasTotales * 0.33;

// revisamos departamento 1
if ($ventasDepto1 > $limite) {
    $pagoDepto1 = $salarioBase + ($salarioBase * 0.20);
} else {
    $pagoDepto1 = $salarioBase;
}

// revisamos departamento 2
if ($ventasDepto2 > $limite) {
    $pagoDepto2 = $salarioBase + ($salarioBase * 0.20);
} else {
    $pagoDepto2 = $salarioBase;
}

// revisamos departamento 3
if ($ventasDepto3 > $limite) {
    $pagoDepto3 = $salarioBase + ($salarioBase * 0.20);
} else {
    $pagoDepto3 = $salarioBase;
}

echo "Ventas totales: $" . $ventasTotales . " (33% = $" . $limite . ") <br>";
echo "Pago vendedores Depto 1: $" . $pagoDepto1 . "<br>";
echo "Pago vendedores Depto 2: $" . $pagoDepto2 . "<br>";
echo "Pago vendedores Depto 3: $" . $pagoDepto3;
?>

