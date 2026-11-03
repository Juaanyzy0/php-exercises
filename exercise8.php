<?php
$a = 5;
$b = 6;
$c = 7;

$p = ($a + $b + $c) / 2;

// formula para el area
$adentro = $p * ($p - $a) * ($p - $b) * ($p - $c);
$area = sqrt($adentro);

echo "Lados del triangulo: $a, $b, $c <br>";
echo "Valor de p: $p <br>";
echo "El area del triangulo es: " . $area;
?>

