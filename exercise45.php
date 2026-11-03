<?php
$a = 1;
$b = -5;
$c = 6;

// calculamos el discriminante D = B^2 - 4*A*C
$d = ($b * $b) - (4 * $a * $c);

echo "Ecuacion con A=$a, B=$b, C=$c <br>";
echo "Discriminante D: $d <br>";

if ($d == 0) {
    $x1 = -$b / (2 * $a);
    $x2 = $x1;
    echo "Como D = 0, X1 y X2 valen lo mismo: " . $x1;
} else if ($d > 0) {
    $x1 = (-$b + sqrt($d)) / (2 * $a);
    $x2 = (-$b - sqrt($d)) / (2 * $a);
    echo "Valor de X1: " . $x1 . "<br>";
    echo "Valor de X2: " . $x2;
} else {
    echo "El discriminante es menor que 0, no tiene solucion en los reales.";
}
?>

