<?php
$dia = 15;
$mes = 8;
$anioNacimiento = 2004;
$anioActual = 2026;

$edad = $anioActual - $anioNacimiento;
$signo = "";

if (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
    $signo = "Sagitario";
} else if (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 20)) {
    $signo = "Capricornio";
} else if (($mes == 1 && $dia >= 21) || ($mes == 2 && $dia <= 19)) {
    $signo = "Acuario";
} else if (($mes == 2 && $dia >= 20) || ($mes == 3 && $dia <= 19)) {
    $signo = "Piscis";
} else if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 20)) {
    $signo = "Aries";
} else if (($mes == 4 && $dia >= 21) || ($mes == 5 && $dia <= 21)) {
    $signo = "Tauro";
} else if (($mes == 5 && $dia >= 22) || ($mes == 6 && $dia <= 21)) {
    $signo = "Geminis";
} else if (($mes == 6 && $dia >= 22) || ($mes == 7 && $dia <= 22)) {
    $signo = "Cancer";
} else if (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 23)) {
    $signo = "Leo";
} else if (($mes == 8 && $dia >= 24) || ($mes == 9 && $dia <= 22)) {
    $signo = "Virgo";
} else if (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
    $signo = "Libra";
} else if (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
    $signo = "Escorpion";
}

echo "Fecha de nacimiento: $dia/$mes/$anioNacimiento <br>";
echo "Signo del zodiaco: " . $signo . "<br>";
echo "Edad: " . $edad . " anos";
?>

