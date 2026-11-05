<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise17.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 17</title>
</head>
<body>
    <h1>Calcular Porcentaje de Descuento Aplicado</h1>
    <form method="POST" action="">
        <label for="pvp">Precio de venta al publico (PVP)</label>
        <input id="pvp" name="pvp" type="number" step="any" required>

        <label for="precioPagado">Precio final pagado</label>
        <input id="precioPagado" name="precioPagado" type="number" step="any" required>

        <button type="submit">Calcular descuento</button>
    </form>

    <?php if(isset($porcentaje)): ?>
        <p>Precio de venta al publico: $<?= $pvp; ?></p>
        <p>Precio final pagado: $<?= $precioPagado; ?></p>
        <p>Porcentaje de descuento aplicado: <?= $porcentaje; ?>%</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
