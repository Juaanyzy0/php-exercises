<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise15.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1>Calcular Monto a Pagar de Luz Electrica</h1>
    <form method="POST" action="">
        <label for="lecturaAnterior">Lectura anterior</label>
        <input id="lecturaAnterior" name="lecturaAnterior" type="number" step="any" required>

        <label for="lecturaActual">Lectura actual</label>
        <input id="lecturaActual" name="lecturaActual" type="number" step="any" required>

        <label for="costoKwh">Costo por Kwh</label>
        <input id="costoKwh" name="costoKwh" type="number" step="any" required>

        <button type="submit">Calcular monto</button>
    </form>

    <?php if(isset($montoTotal)): ?>
        <p>Consumo del mes: <?= $consumo; ?> Kwh</p>
        <p>Monto total a pagar de luz: $<?= $montoTotal; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
