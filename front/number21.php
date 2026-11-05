<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise21.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 21</title>
</head>
<body>
    <h1>Calcular Porcentaje de Ganancia de Naranjas</h1>
    <form method="POST" action="">
        <label for="x">Cantidad de naranjas (X)</label>
        <input id="x" name="x" type="number" step="any" required>

        <label for="y">Precio por docena en Bs (Y)</label>
        <input id="y" name="y" type="number" step="any" required>

        <label for="k">Total obtenido en ventas en Bs (K)</label>
        <input id="k" name="k" type="number" step="any" required>

        <button type="submit">Calcular ganancia</button>
    </form>

    <?php if(isset($porcentajeGanancia)): ?>
        <p>Inversion total: <?= $inversion; ?> Bs</p>
        <p>Total obtenido en ventas: <?= $k; ?> Bs</p>
        <p>Porcentaje de ganancia: <?= $porcentajeGanancia; ?>%</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
