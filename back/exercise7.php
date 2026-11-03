<?php
$metros = 5;

// pasamos primero a pulgadas
$pulgadasTotales = $metros * 39.27;
$pies = $pulgadasTotales / 12;

echo "Cantidad en metros: $metros m <br>";
echo "Equivalente en pulgadas: " . $pulgadasTotales . "<br>";
echo "Equivalente en pies: " . $pies;
?>

