<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $p = $_POST["p"]; // precio de contado
    $t = $_POST["t"]; // valor de cada cuota

    $totalCuotas = $t * 12;
    $recargo = $totalCuotas - $p;

    $porcentajeRecargo = ($recargo * 100) / $p;
}
?>
