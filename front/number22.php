<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise22.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 22</title>
</head>
<body>
    <h1>Calcular Porcentaje de Recargo por Cuotas</h1>
    <form method="POST" action="">
        <label for="p">Precio de contado (P)</label>
        <input id="p" name="p" type="number" step="any" required>

        <label for="t">Valor de cada una de las 12 cuotas (T)</label>
        <input id="t" name="t" type="number" step="any" required>

        <button type="submit">Calcular recargo</button>
    </form>

    <?php if(isset($porcentajeRecargo)): ?>
        <p>Precio al contado: <?= $p; ?> Bs</p>
        <p>Total pagando 12 cuotas: <?= $totalCuotas; ?> Bs</p>
        <p>Porcentaje de recargo por cuotas: <?= $porcentajeRecargo; ?>%</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
