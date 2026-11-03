<?php
$hombres = 18;
$mujeres = 22;

$totalEstudiantes = $hombres + $mujeres;

$porcentajeHombres = ($hombres * 100) / $totalEstudiantes;
$porcentajeMujeres = ($mujeres * 100) / $totalEstudiantes;

echo "Total de estudiantes: $totalEstudiantes <br>";
echo "Porcentaje de hombres: " . $porcentajeHombres . "% <br>";
echo "Porcentaje de mujeres: " . $porcentajeMujeres . "%";
?>

