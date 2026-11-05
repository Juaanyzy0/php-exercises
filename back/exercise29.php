<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ventasDepto1 = $_POST["ventasDepto1"];
    $ventasDepto2 = $_POST["ventasDepto2"];
    $ventasDepto3 = $_POST["ventasDepto3"];
    $salarioBase = $_POST["salarioBase"];

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
}
?>
