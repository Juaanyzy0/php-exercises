<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise33.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 33</title>
</head>
<body>
    <h1>Calcular Descuento en Tienda segun Monto</h1>
    <form method="POST" action="">
        <label for="nombreCliente">Nombre del cliente</label>
        <input id="nombreCliente" name="nombreCliente" type="text" required>

        <label for="montoCompra">Monto de la compra</label>
        <input id="montoCompra" name="montoCompra" type="number" step="any" required>

        <button type="submit">Calcular descuento</button>
    </form>

    <?php if(isset($montoPagar)): ?>
        <p>Cliente: <?= $nombreCliente; ?></p>
        <p>Monto de la compra: $<?= $montoCompra; ?></p>
        <p>Descuento recibido: $<?= $descuento; ?></p>
        <p>Monto a pagar: $<?= $montoPagar; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
