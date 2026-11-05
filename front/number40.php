<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise40.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 40</title>
</head>
<body>
    <h1>Factura de Luz Electrica y Aseo Urbano</h1>
    <form method="POST" action="">
        <label for="lecturaAnterior">Lectura anterior (Kwh)</label>
        <input id="lecturaAnterior" name="lecturaAnterior" type="number" step="any" required>

        <label for="lecturaActual">Lectura actual (Kwh)</label>
        <input id="lecturaActual" name="lecturaActual" type="number" step="any" required>

        <label for="aseoUrbano">Monto de aseo urbano (Bs)</label>
        <input id="aseoUrbano" name="aseoUrbano" type="number" step="any" required>

        <button type="submit">Calcular factura</button>
    </form>

    <?php if(isset($totalPagar)): ?>
        <p>Consumo en Kwh: <?= $consumo; ?></p>
        <p>Costo por luz electrica: <?= $montoLuz; ?> Bs</p>
        <p>Servicio de aseo urbano: <?= $aseoUrbano; ?> Bs</p>
        <p>Monto total a pagar: <?= $totalPagar; ?> Bs</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
