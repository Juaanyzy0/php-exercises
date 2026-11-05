<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $hombres = $_POST["hombres"];
    $mujeres = $_POST["mujeres"];

    $totalEstudiantes = $hombres + $mujeres;

    $porcentajeHombres = ($hombres * 100) / $totalEstudiantes;
    $porcentajeMujeres = ($mujeres * 100) / $totalEstudiantes;
}
?>
