<?php
$tiempo = 4;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $capital = $_POST["capital"]; // X
    $intereses = $_POST["intereses"]; // Y

    // despejando la razon de la formula I = (C * T * R) / 100
    $razon = ($intereses * 100) / ($capital * $tiempo);
}
?>
