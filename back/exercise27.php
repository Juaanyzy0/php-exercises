<?php
$valor1 = 10;
$valor2 = 5;
$valor3 = 25;

$areaTriangulo = ($valor1 * $valor2) / 2;
// para el circulo valor1 es radio y valor2 es pi
$areaCirculo = $valor2 * ($valor1 * $valor1);
$areaRectangulo = $valor1 * $valor2;

echo "Valores dados: $valor1, $valor2 y area buscada: $valor3 <br>";

if ($areaTriangulo == $valor3) {
    echo "La figura corresponde a un Triangulo.";
} else if ($areaCirculo == $valor3) {
    echo "La figura corresponde a un Circulo.";
} else if ($areaRectangulo == $valor3) {
    echo "La figura corresponde a un Rectangulo.";
} else {
    echo "Ninguna figura coincide con el tercer valor.";
}
?>

