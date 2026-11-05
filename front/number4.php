<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise4.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Calcular Descuento del 15% en Tienda</h1>
    <form method="POST" action="">
        <label for="totalCompra">Total de la compra</label>
        <input id="totalCompra" name="totalCompra" type="number" step="any" required>

        <button type="submit">Calcular pago final</button>
    </form>

    <?php if(isset($pagoFinal)): ?>
        <p>Total de la compra: $<?= $totalCompra; ?></p>
        <p>Descuento (15%): $<?= $descuento; ?></p>
        <p>Total a pagar finalmente: $<?= $pagoFinal; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
