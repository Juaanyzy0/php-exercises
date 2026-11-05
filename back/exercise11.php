<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $horasNormales = $_POST["horasNormales"];
    $pagoHora = $_POST["pagoHora"];
    $horasExtras = $_POST["horasExtras"];
    $hijos = $_POST["hijos"];

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
}
?>
