<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $sueldoBase = $_POST["sueldoBase"];
    $venta1 = $_POST["venta1"];
    $venta2 = $_POST["venta2"];
    $venta3 = $_POST["venta3"];

    $totalVentas = $venta1 + $venta2 + $venta3;
    // el 10% de las 3 ventas
    $comision = $totalVentas * 0.10;
    $sueldoTotal = $sueldoBase + $comision;
}
?>
