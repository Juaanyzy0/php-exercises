<?php
$inversion = 1200;
$tasaInteres = 0.08;

$intereses = $inversion * $tasaInteres;

echo "Capital invertido: $" . $inversion . "<br>";
echo "Intereses generados: $" . $intereses . "<br>";

if ($intereses > 7000) {
    $totalCuenta = $inversion + $intereses;
    echo "Los intereses pasan de 7000, se reinvierten. <br>";
    echo "Dinero final en la cuenta: $" . $totalCuenta;
} else {
    echo "Los intereses no superan los 7000, no se reinvierten. <br>";
    echo "Dinero en la cuenta: $" . $inversion;
}
?>

