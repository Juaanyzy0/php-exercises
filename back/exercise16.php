<?php
$largo = 4;
$ancho = 1.5;
$consumoPieza = 0.5;

$areaLamina = $largo * $ancho;

// usamos intval para sacar las piezas completas
$cantidadPiezas = intval($areaLamina / $consumoPieza);
$desperdicio = $areaLamina - ($cantidadPiezas * $consumoPieza);

echo "Area total de la lamina: $areaLamina m2 <br>";
echo "Piezas que se fabrican: " . $cantidadPiezas . "<br>";
echo "Desperdicio: " . $desperdicio . " m2";
?>

