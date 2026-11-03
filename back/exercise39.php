<?php
$precioInicial = 20000000;
$devaluacionAuto = 3500000; // lo que pierde de valor en 3 anos
$incrementoTerreno = 9000000; // lo que sube el terreno en 3 anos

$mitadIncremento = $incrementoTerreno / 2;

echo "Devaluacion del automovil en 3 anos: $" . $devaluacionAuto . "<br>";
echo "Mitad del incremento del terreno: $" . $mitadIncremento . "<br>";

if ($devaluacionAuto <= $mitadIncremento) {
    echo "Decision: SI debe comprar el automovil.";
} else {
    echo "Decision: NO debe comprar el automovil, mejor comprar el terreno.";
}
?>

