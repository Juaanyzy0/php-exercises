<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise13.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>Calcular Total de Dinero en el Banco</h1>
    <form method="POST" action="">
        <label for="n1">Billetes de 50000</label>
        <input id="n1" name="n1" type="number" required>

        <label for="n2">Billetes de 20000</label>
        <input id="n2" name="n2" type="number" required>

        <label for="n3">Billetes de 10000</label>
        <input id="n3" name="n3" type="number" required>

        <label for="n4">Billetes de 5000</label>
        <input id="n4" name="n4" type="number" required>

        <label for="n5">Billetes de 2000</label>
        <input id="n5" name="n5" type="number" required>

        <label for="n6">Billetes de 1000</label>
        <input id="n6" name="n6" type="number" required>

        <label for="n7">Billetes de 500</label>
        <input id="n7" name="n7" type="number" required>

        <label for="n8">Billetes de 100</label>
        <input id="n8" name="n8" type="number" required>

        <button type="submit">Calcular total</button>
    </form>

    <?php if(isset($totalBanco)): ?>
        <p>El dinero total que hay en el banco es: $<?= $totalBanco; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
