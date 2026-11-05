<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $precioInicial = $_POST["precioInicial"];
    $devaluacionAuto = $_POST["devaluacionAuto"]; // lo que pierde de valor en 3 anos
    $incrementoTerreno = $_POST["incrementoTerreno"]; // lo que sube el terreno en 3 anos

    $mitadIncremento = $incrementoTerreno / 2;

    if ($devaluacionAuto <= $mitadIncremento) {
        $decision = "Decision: SI debe comprar el automovil.";
    } else {
        $decision = "Decision: NO debe comprar el automovil, mejor comprar el terreno.";
    }
}
?>
