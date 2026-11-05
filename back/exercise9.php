<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $horasTrabajadas = $_POST["horasTrabajadas"];
    $precioHora = $_POST["precioHora"];

    $sueldoBase = $horasTrabajadas * $precioHora;
    $impuestos = $sueldoBase * 0.20;
    $salarioNeto = $sueldoBase - $impuestos;
}
?>
