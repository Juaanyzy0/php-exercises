<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $x = $_POST["x"];
    $y = $_POST["y"];
    $k = $_POST["k"];

    $docenas = $x / 12;
    $inversion = $docenas * $y;

    $ganancia = $k - $inversion;
    $porcentajeGanancia = ($ganancia * 100) / $inversion;
}
?>
