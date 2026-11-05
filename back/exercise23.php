<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $m = $_POST["m"]; // kg de harina
    $n = $_POST["n"]; // litros de aceite
    $b1 = $_POST["b1"];
    $b2 = $_POST["b2"];
    $b3 = $_POST["b3"];
    $b4 = $_POST["b4"];

    // calculos para la harina
    $bultosHarina = intval($m / 24);
    $sobranteHarina = $m % 24;
    $ingresoHarina = ($bultosHarina * $b1) + ($sobranteHarina * $b3);

    // calculos para el aceite
    $cajasAceite = intval($n / 15);
    $sobranteAceite = $n % 15;
    $ingresoAceite = ($cajasAceite * $b2) + ($sobranteAceite * $b4);

    $ingresoTotal = $ingresoHarina + $ingresoAceite;
}
?>
