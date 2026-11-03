<?php
$temperatura = 75;

if ($temperatura > 85) {
    $deporte = "Natacion";
} else if ($temperatura > 70 && $temperatura <= 85) {
    $deporte = "Tenis";
} else if ($temperatura > 32 && $temperatura <= 70) {
    $deporte = "Golf";
} else if ($temperatura > 10 && $temperatura <= 32) {
    $deporte = "Esqui";
} else {
    $deporte = "Marcha";
}

echo "Temperatura: $temperatura F <br>";
echo "Deporte apropiado para practicar: " . $deporte;
?>

