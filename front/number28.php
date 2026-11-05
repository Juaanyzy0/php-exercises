<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise28.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 28</title>
</head>
<body>
    <h1>Financiamiento de Compra de Piezas</h1>
    <form method="POST" action="">
        <label for="montoCompra">Monto total de la compra</label>
        <input id="montoCompra" name="montoCompra" type="number" step="any" required>

        <button type="submit">Calcular financiamiento</button>
    </form>

    <?php if(isset($fondosEmpresa)): ?>
        <p>Monto total de la compra: $<?= $montoCompra; ?></p>
        <p>Cantidad a invertir de la empresa: $<?= $fondosEmpresa; ?></p>
        <p>Cantidad a pagar a credito: $<?= $creditoFabricante; ?></p>
        <p>Monto a pagar por intereses: $<?= $intereses; ?></p>
        <?php if($prestamoBanco > 0): ?>
            <p>Cantidad prestada al banco: $<?= $prestamoBanco; ?></p>
        <?php endif; ?>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
