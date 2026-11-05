<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $edadMeses = $_POST["edadMeses"]; // edad en meses
    $sexo = strtoupper($_POST["sexo"]); // M o F
    $hemoglobina = $_POST["hemoglobina"];

    $minimo = 0;

    if ($edadMeses >= 0 && $edadMeses <= 1) {
        $minimo = 13;
    } else if ($edadMeses > 1 && $edadMeses <= 6) {
        $minimo = 10;
    } else if ($edadMeses > 6 && $edadMeses <= 12) {
        $minimo = 11;
    } else if ($edadMeses > 12 && $edadMeses <= 60) {
        $minimo = 11.5;
    } else if ($edadMeses > 60 && $edadMeses <= 120) {
        $minimo = 12.6;
    } else if ($edadMeses > 120 && $edadMeses <= 180) {
        $minimo = 13;
    } else if ($edadMeses > 180) {
        if ($sexo == "F") {
            $minimo = 12;
        } else {
            $minimo = 14;
        }
    }

    if ($hemoglobina < $minimo) {
        $resultado = "Resultado: POSITIVO (La persona tiene anemia)";
    } else {
        $resultado = "Resultado: NEGATIVO (No tiene anemia)";
    }
}
?>
