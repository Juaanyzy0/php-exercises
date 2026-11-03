<?php
$parcial1 = 4.0;
$parcial2 = 3.5;
$parcial3 = 4.2;

$examenFinal = 3.8;
$trabajoFinal = 4.5;

$promedioParciales = ($parcial1 + $parcial2 + $parcial3) / 3;

// sacamos los porcentajes de cada nota
$notaParciales = $promedioParciales * 0.55;
$notaExamen = $examenFinal * 0.30;
$notaTrabajo = $trabajoFinal * 0.15;

$calificacionFinal = $notaParciales + $notaExamen + $notaTrabajo;

echo "Promedio parciales: " . $promedioParciales . "<br>";
echo "La calificacion final en computacion es: " . $calificacionFinal;
?>

