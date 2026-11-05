<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $p = ($a + $b + $c) / 2;

    // formula para el area
    $adentro = $p * ($p - $a) * ($p - $b) * ($p - $c);
    $area = sqrt($adentro);
}
?>
