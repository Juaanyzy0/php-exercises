<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise29.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 29</title>
</head>
<body>
    <h1>Pago a Vendedores por Departamento</h1>
    <form method="POST" action="">
        <label for="ventasDepto1">Ventas Departamento 1</label>
        <input id="ventasDepto1" name="ventasDepto1" type="number" step="any" required>

        <label for="ventasDepto2">Ventas Departamento 2</label>
        <input id="ventasDepto2" name="ventasDepto2" type="number" step="any" required>

        <label for="ventasDepto3">Ventas Departamento 3</label>
        <input id="ventasDepto3" name="ventasDepto3" type="number" step="any" required>

        <label for="salarioBase">Salario mensual base</label>
        <input id="salarioBase" name="salarioBase" type="number" step="any" required>

        <button type="submit">Calcular pagos</button>
    </form>

    <?php if(isset($ventasTotales)): ?>
        <p>Ventas totales: $<?= $ventasTotales; ?> (33% = $<?= $limite; ?>)</p>
        <p>Pago vendedores Depto 1: $<?= $pagoDepto1; ?></p>
        <p>Pago vendedores Depto 2: $<?= $pagoDepto2; ?></p>
        <p>Pago vendedores Depto 3: $<?= $pagoDepto3; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
