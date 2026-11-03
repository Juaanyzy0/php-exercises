<?php
$nombre = "Carlos";
$horasNormales = 40;
$pagoHora = 2000;
$horasExtras = 5;
$hijos = 2;

$sueldoNormal = $horasNormales * $pagoHora;
$valorHoraExtra = $pagoHora + ($pagoHora * 0.25);
$pagoExtras = $horasExtras * $valorHoraExtra;

$sueldoBase = $sueldoNormal + $pagoExtras;

// deducciones sobre el sueldo base
$paroForzoso = $sueldoBase * 0.05;
$politicaHab = $sueldoBase * 0.02;
$cajaAhorro = $sueldoBase * 0.07;
$totalDeducciones = $paroForzoso + $politicaHab + $cajaAhorro;

// asignaciones
$actAcademica = 25000;
$bonoHijos = $hijos * 17300;
$primaHogar = 18000;
$totalAsignaciones = $actAcademica + $bonoHijos + $primaHogar;

$sueldoNeto = $sueldoBase + $totalAsignaciones - $totalDeducciones;

echo "Trabajador: $nombre <br>";
echo "Total asignaciones: " . $totalAsignaciones . " Bs <br>";
echo "Total deducciones: " . $totalDeducciones . " Bs <br>";
echo "Sueldo neto: " . $sueldoNeto . " Bs";
?>

