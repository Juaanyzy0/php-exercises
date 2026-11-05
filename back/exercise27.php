<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];

    $areaTriangulo = ($valor1 * $valor2) / 2;
    // para el circulo valor1 es radio y valor2 es pi
    $areaCirculo = $valor2 * ($valor1 * $valor1);
    $areaRectangulo = $valor1 * $valor2;

    if ($areaTriangulo == $valor3) {
        $figura = "La figura corresponde a un Triangulo.";
    } else if ($areaCirculo == $valor3) {
        $figura = "La figura corresponde a un Circulo.";
    } else if ($areaRectangulo == $valor3) {
        $figura = "La figura corresponde a un Rectangulo.";
    } else {
        $figura = "Ninguna figura coincide con el tercer valor.";
    }
}
?>
