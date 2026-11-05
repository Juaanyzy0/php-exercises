<?php
$litrosPorGalon = 3.785;
$precioLitro = 100;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $galones = $_POST["galones"];

    $litrosTotales = $galones * $litrosPorGalon;
    $totalCobrar = $litrosTotales * $precioLitro;
}
?>
