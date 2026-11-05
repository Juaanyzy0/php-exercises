<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise43.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 43</title>
</head>
<body>
    <h1>Planificacion Financiera de Empresa</h1>
    <form method="POST" action="">
        <label for="capitalActual">Capital actual ($)</label>
        <input id="capitalActual" name="capitalActual" type="number" step="any" required>

        <button type="submit">Calcular presupuesto</button>
    </form>

    <?php if(isset($nuevoSaldo)): ?>
        <p>Capital inicial: $<?= $capitalActual; ?></p>
        <?php if($prestamo > 0): ?>
            <p>Cantidad que se pedira al banco: $<?= $prestamo; ?></p>
        <?php else: ?>
            <p>No hace falta pedir prestamo al banco.</p>
        <?php endif; ?>
        <p>Presupuesto total a repartir: $<?= $nuevoSaldo; ?></p>
        <p>Cantidad para compra de insumos: $<?= $insumos; ?></p>
        <p>Cantidad para incentivos al personal: $<?= $incentivos; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
