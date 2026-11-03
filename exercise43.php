<?php
$capitalActual = 5000;
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

echo "Capital inicial: $" . $capitalActual . "<br>";
if ($prestamo > 0) {
    echo "Cantidad que se pedira al banco: $" . $prestamo . "<br>";
} else {
    echo "No hace falta pedir prestamo al banco. <br>";
}
echo "Presupuesto total a repartir: $" . $nuevoSaldo . "<br>";
echo "Cantidad para compra de insumos: $" . $insumos . "<br>";
echo "Cantidad para incentivos al personal: $" . $incentivos;
?>

