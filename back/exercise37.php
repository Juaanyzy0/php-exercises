<?php
$a = 6;
$b = 6;
$c = 8;

// verificamos si los lados forman un triangulo
if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Los lados $a, $b, $c SI forman un triangulo. <br>";

    if ($a == $b && $b == $c) {
        echo "Tipo de triangulo: Equilatero <br>";
    } else if ($a == $b || $a == $c || $b == $c) {
        echo "Tipo de triangulo: Isosceles <br>";
    } else {
        echo "Tipo de triangulo: Escaleno <br>";
    }

    $s = ($a + $b + $c) / 2;
    $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    echo "El area del triangulo es: " . $area;
} else {
    echo "Los datos no corresponden a un triangulo.";
}
?>

