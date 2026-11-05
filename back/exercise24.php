<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $inversion = $_POST["inversion"];
    $tasaInteres = $_POST["tasaInteres"];

    $intereses = $inversion * $tasaInteres;

    if ($intereses > 7000) {
        $totalCuenta = $inversion + $intereses;
        $mensaje = "Los intereses pasan de 7000, se reinvierten.";
    } else {
        $totalCuenta = $inversion;
        $mensaje = "Los intereses no superan los 7000, no se reinvierten.";
    }
}
?>
