<?php
$horasTrabajadas = 40;
$precioHora = 15000;

$sueldoBase = $horasTrabajadas * $precioHora;
$impuestos = $sueldoBase * 0.20;
$salarioNeto = $sueldoBase - $impuestos;

echo "Sueldo base: $" . $sueldoBase . "<br>";
echo "Descuento por impuestos (20%): $" . $impuestos . "<br>";
echo "El salario neto es: $" . $salarioNeto;
?>

