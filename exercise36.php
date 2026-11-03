<?php
$cantidad = 188880;
$resto = $cantidad;

$b50000 = intval($resto / 50000);
$resto = $resto % 50000;

$b20000 = intval($resto / 20000);
$resto = $resto % 20000;

$b10000 = intval($resto / 10000);
$resto = $resto % 10000;

$b5000 = intval($resto / 5000);
$resto = $resto % 5000;

$b2000 = intval($resto / 2000);
$resto = $resto % 2000;

$b1000 = intval($resto / 1000);
$resto = $resto % 1000;

$b500 = intval($resto / 500);
$resto = $resto % 500;

$b100 = intval($resto / 100);
$resto = $resto % 100;

$b50 = intval($resto / 50);
$resto = $resto % 50;

$b20 = intval($resto / 20);
$resto = $resto % 20;

$b10 = intval($resto / 10);
$resto = $resto % 10;

echo "Desglose para " . $cantidad . " Bs: <br>";
echo "Billetes de 50000: $b50000 <br>";
echo "Billetes de 20000: $b20000 <br>";
echo "Billetes de 10000: $b10000 <br>";
echo "Billetes de 5000: $b5000 <br>";
echo "Billetes de 2000: $b2000 <br>";
echo "Billetes de 1000: $b1000 <br>";
echo "Billetes de 500: $b500 <br>";
echo "Billetes de 100: $b100 <br>";
echo "Billetes de 50: $b50 <br>";
echo "Billetes de 20: $b20 <br>";
echo "Billetes de 10: $b10";
?>

