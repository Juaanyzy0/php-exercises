<?php
$a = 6;
$b = 4;
$c = 2;
$d = 0;

if ($d == 0) {
    $resultado = ($a - $c) * ($a - $c);
    echo "Como D es 0, el resultado de (A-C)^2 es: " . $resultado;
} else if ($d > 0) {
    $resultado = (($a - $b) * ($a - $b) * ($a - $b)) / $d;
    echo "Como D es mayor a 0, el resultado de ((A-B)^3)/D es: " . $resultado;
} else {
    echo "D es negativo, no hay formula para este caso.";
}
?>

