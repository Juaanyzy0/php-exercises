<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sueldo = $_POST["sueldo"];

    if ($sueldo < 40000) {
        $aumento = $sueldo * 0.15;
    } else {
        $aumento = $sueldo * 0.12;
    }

    $nuevoSueldo = $sueldo + $aumento;
}
?>
