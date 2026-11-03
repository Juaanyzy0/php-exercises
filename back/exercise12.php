<?php
// notas de matematica
$examenMat = 4.2;
$tareaMat1 = 4.0;
$tareaMat2 = 3.8;
$tareaMat3 = 4.5;

$promTareasMat = ($tareaMat1 + $tareaMat2 + $tareaMat3) / 3;
$promedioMat = ($examenMat * 0.90) + ($promTareasMat * 0.10);

// notas de fisica
$examenFis = 3.5;
$tareaFis1 = 4.0;
$tareaFis2 = 4.2;

$promTareasFis = ($tareaFis1 + $tareaFis2) / 2;
$promedioFis = ($examenFis * 0.80) + ($promTareasFis * 0.20);

// notas de quimica
$examenQui = 3.9;
$tareaQui1 = 3.5;
$tareaQui2 = 4.0;
$tareaQui3 = 4.2;

$promTareasQui = ($tareaQui1 + $tareaQui2 + $tareaQui3) / 3;
$promedioQui = ($examenQui * 0.85) + ($promTareasQui * 0.15);

$promedioGeneral = ($promedioMat + $promedioFis + $promedioQui) / 3;

echo "Promedio en Matematica: " . $promedioMat . "<br>";
echo "Promedio en Fisica: " . $promedioFis . "<br>";
echo "Promedio en Quimica: " . $promedioQui . "<br>";
echo "El promedio general es: " . $promedioGeneral;
?>

