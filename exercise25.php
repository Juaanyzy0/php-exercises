<?php
$sueldo = 35000;

if ($sueldo < 40000) {
    $aumento = $sueldo * 0.15;
} else {
    $aumento = $sueldo * 0.12;
}

$nuevoSueldo = $sueldo + $aumento;

echo "Sueldo anterior: " . $sueldo . " Bs <br>";
echo "Aumento aplicado: " . $aumento . " Bs <br>";
echo "El nuevo sueldo del trabajador es: " . $nuevoSueldo . " Bs";
?>

