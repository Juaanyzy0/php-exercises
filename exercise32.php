<?php
$p = 5;
$q = 6;

// P^3 + Q^4 - 2*P^2
$expresion = ($p * $p * $p) + ($q * $q * $q * $q) - (2 * ($p * $p));

if ($expresion > 680) {
    echo "Se cumple la condicion (resultado = $expresion) <br>";
    echo "Valor de P: " . $p . "<br>";
    echo "Valor de Q: " . $q;
} else {
    echo "Los valores P y Q no satisfacen la expresion porque dio: " . $expresion;
}
?>

