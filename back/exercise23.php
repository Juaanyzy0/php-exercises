<?php
// valores de prueba del taller
$m = 452; // kg de harina
$n = 197; // litros de aceite
$b1 = 132;
$b2 = 180;
$b3 = 7.50;
$b4 = 14.50;

// calculos para la harina
$bultosHarina = intval($m / 24);
$sobranteHarina = $m % 24;
$ingresoHarina = ($bultosHarina * $b1) + ($sobranteHarina * $b3);

// calculos para el aceite
$cajasAceite = intval($n / 15);
$sobranteAceite = $n % 15;
$ingresoAceite = ($cajasAceite * $b2) + ($sobranteAceite * $b4);

$ingresoTotal = $ingresoHarina + $ingresoAceite;

echo "Ingreso por harina: " . $ingresoHarina . " Bs <br>";
echo "Ingreso por aceite: " . $ingresoAceite . " Bs <br>";
echo "Ingreso total por la tonelada de maiz: " . $ingresoTotal . " Bs";
?>

