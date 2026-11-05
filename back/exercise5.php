<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $parcial1 = $_POST["parcial1"];
    $parcial2 = $_POST["parcial2"];
    $parcial3 = $_POST["parcial3"];
    $examenFinal = $_POST["examenFinal"];
    $trabajoFinal = $_POST["trabajoFinal"];

    $promedioParciales = ($parcial1 + $parcial2 + $parcial3) / 3;

    // sacamos los porcentajes de cada nota
    $notaParciales = $promedioParciales * 0.55;
    $notaExamen = $examenFinal * 0.30;
    $notaTrabajo = $trabajoFinal * 0.15;

    $calificacionFinal = $notaParciales + $notaExamen + $notaTrabajo;
}
?>
