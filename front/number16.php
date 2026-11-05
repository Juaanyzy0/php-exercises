<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise16.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 16</title>
</head>
<body>
    <h1>Calcular Piezas y Desperdicio de Lamina</h1>
    <form method="POST" action="">
        <label for="largo">Largo de la lamina (m)</label>
        <input id="largo" name="largo" type="number" step="any" required>

        <label for="ancho">Ancho de la lamina (m)</label>
        <input id="ancho" name="ancho" type="number" step="any" required>

        <label for="consumoPieza">Consumo por pieza (m2)</label>
        <input id="consumoPieza" name="consumoPieza" type="number" step="any" required>

        <button type="submit">Calcular piezas</button>
    </form>

    <?php if(isset($cantidadPiezas)): ?>
        <p>Area total de la lamina: <?= $areaLamina; ?> m2</p>
        <p>Piezas que se fabrican: <?= $cantidadPiezas; ?></p>
        <p>Desperdicio: <?= $desperdicio; ?> m2</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
