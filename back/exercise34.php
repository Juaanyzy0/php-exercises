<?php
$categoria = 2;
$sueldo = 850000;

if ($categoria == 1) {
    $aumento = $sueldo * 0.15;
} else if ($categoria == 2) {
    $aumento = $sueldo * 0.10;
} else if ($categoria == 3) {
    $aumento = $sueldo * 0.08;
} else if ($categoria == 4) {
    $aumento = $sueldo * 0.07;
} else {
    $aumento = 0;
}

$nuevoSueldo = $sueldo + $aumento;

echo "Categoria del trabajador: " . $categoria . "<br>";
echo "Nuevo sueldo: $" . $nuevoSueldo;
?>

