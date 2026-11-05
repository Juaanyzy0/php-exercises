<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cantidad = $_POST["cantidad"];
    $resto = $cantidad;

    $b50000 = intval($resto / 50000);
    $resto = $resto % 50000;

    $b20000 = intval($resto / 20000);
    $resto = $resto % 20000;

    $b10000 = intval($resto / 10000);
    $resto = $resto % 10000;

    $b5000 = intval($resto / 5000);
    $resto = $resto % 5000;

    $b2000 = intval($resto / 2000);
    $resto = $resto % 2000;

    $b1000 = intval($resto / 1000);
    $resto = $resto % 1000;

    $b500 = intval($resto / 500);
    $resto = $resto % 500;

    $b100 = intval($resto / 100);
    $resto = $resto % 100;

    $b50 = intval($resto / 50);
    $resto = $resto % 50;

    $b20 = intval($resto / 20);
    $resto = $resto % 20;

    $b10 = intval($resto / 10);
    $resto = $resto % 10;
}
?>
