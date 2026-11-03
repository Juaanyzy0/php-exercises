<?php
$a = 2;
$b = 3;
$c = 6;
$d = 2;

// formamos el numero N con los 4 digitos
$n = ($a * 1000) + ($b * 100) + ($c * 10) + $d;

$ultimosDos = ($c * 10) + $d;

if ($c >= 5) {
    $redondeado = $n - $ultimosDos + 100;
} else {
    $redondeado = $n - $ultimosDos;
}

echo "El numero N es: " . $n . "<br>";
echo "El resultado redondeado a la centena es: " . $redondeado;
?>

