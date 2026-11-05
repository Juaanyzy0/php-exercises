<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // notas de matematica
    $examenMat = $_POST["examenMat"];
    $tareaMat1 = $_POST["tareaMat1"];
    $tareaMat2 = $_POST["tareaMat2"];
    $tareaMat3 = $_POST["tareaMat3"];

    $promTareasMat = ($tareaMat1 + $tareaMat2 + $tareaMat3) / 3;
    $promedioMat = ($examenMat * 0.90) + ($promTareasMat * 0.10);

    // notas de fisica
    $examenFis = $_POST["examenFis"];
    $tareaFis1 = $_POST["tareaFis1"];
    $tareaFis2 = $_POST["tareaFis2"];

    $promTareasFis = ($tareaFis1 + $tareaFis2) / 2;
    $promedioFis = ($examenFis * 0.80) + ($promTareasFis * 0.20);

    // notas de quimica
    $examenQui = $_POST["examenQui"];
    $tareaQui1 = $_POST["tareaQui1"];
    $tareaQui2 = $_POST["tareaQui2"];
    $tareaQui3 = $_POST["tareaQui3"];

    $promTareasQui = ($tareaQui1 + $tareaQui2 + $tareaQui3) / 3;
    $promedioQui = ($examenQui * 0.85) + ($promTareasQui * 0.15);

    $promedioGeneral = ($promedioMat + $promedioFis + $promedioQui) / 3;
}
?>
