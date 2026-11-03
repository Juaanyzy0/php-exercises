<?php
$a = 2;
$b = 3;
$c = 8;
$d = 1;
$e = -1;
$f = -1;

// calculamos la parte de abajo de la division
$denominador = ($a * $e) - ($b * $d);

$x = (($c * $e) - ($b * $f)) / $denominador;
$y = (($a * $f) - ($c * $d)) / $denominador;

echo "El valor de X es: " . $x . "<br>";
echo "El valor de Y es: " . $y;
?>

