<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise36.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 36</title>
</head>
<body>
    <h1>Desglose de Cantidad en Billetes</h1>
    <form method="POST" action="">
        <label for="cantidad">Cantidad en Bolivares (Bs)</label>
        <input id="cantidad" name="cantidad" type="number" required>

        <button type="submit">Desglosar cantidad</button>
    </form>

    <?php if(isset($b50000)): ?>
        <p>Desglose para <?= $cantidad; ?> Bs:</p>
        <p>Billetes de 50000: <?= $b50000; ?></p>
        <p>Billetes de 20000: <?= $b20000; ?></p>
        <p>Billetes de 10000: <?= $b10000; ?></p>
        <p>Billetes de 5000: <?= $b5000; ?></p>
        <p>Billetes de 2000: <?= $b2000; ?></p>
        <p>Billetes de 1000: <?= $b1000; ?></p>
        <p>Billetes de 500: <?= $b500; ?></p>
        <p>Billetes de 100: <?= $b100; ?></p>
        <p>Billetes de 50: <?= $b50; ?></p>
        <p>Billetes de 20: <?= $b20; ?></p>
        <p>Billetes de 10: <?= $b10; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
