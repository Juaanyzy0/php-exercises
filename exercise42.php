<?php
$edadMeses = 240; // 20 anos en meses
$sexo = "F"; // M o F
$hemoglobina = 11.5;

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

echo "Nivel de hemoglobina: $hemoglobina g% <br>";
echo "Minimo requerido para su edad: $minimo g% <br>";

if ($hemoglobina < $minimo) {
    echo "Resultado: POSITIVO (La persona tiene anemia)";
} else {
    echo "Resultado: NEGATIVO (No tiene anemia)";
}
?>

