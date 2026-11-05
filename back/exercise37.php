<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    // verificamos si los lados forman un triangulo
    if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
        $esTriangulo = true;

        if ($a == $b && $b == $c) {
            $tipo = "Equilatero";
        } else if ($a == $b || $a == $c || $b == $c) {
            $tipo = "Isosceles";
        } else {
            $tipo = "Escaleno";
        }

        $s = ($a + $b + $c) / 2;
        $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    } else {
        $esTriangulo = false;
    }
}
?>
