<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $capitalActual = $_POST["capitalActual"];
    $prestamo = 0;

    if ($capitalActual < 0) {
        $prestamo = 10000 - $capitalActual;
        $nuevoSaldo = 10000;
    } else if ($capitalActual > 0 && $capitalActual <= 20000) {
        $prestamo = 20000 - $capitalActual;
        $nuevoSaldo = 20000;
    } else {
        $prestamo = 0;
        $nuevoSaldo = $capitalActual;
    }

    $equipoComputo = 5000;
    $mobiliario = 2000;
    $resto = $nuevoSaldo - $equipoComputo - $mobiliario;

    $insumos = $resto / 2;
    $incentivos = $resto / 2;
}
?>
