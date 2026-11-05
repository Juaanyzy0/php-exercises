<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];
    $e = $_POST["e"];
    $f = $_POST["f"];

    // calculamos la parte de abajo de la division
    $denominador = ($a * $e) - ($b * $d);

    $x = (($c * $e) - ($b * $f)) / $denominador;
    $y = (($a * $f) - ($c * $d)) / $denominador;
}
?>
