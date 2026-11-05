<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise24.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 24</title>
</head>
<body>
    <h1>Intereses y Reinversion Bancaria</h1>
    <form method="POST" action="">
        <label for="inversion">Capital invertido</label>
        <input id="inversion" name="inversion" type="number" step="any" required>

        <label for="tasaInteres">Tasa de interes (ej. 0.08)</label>
        <input id="tasaInteres" name="tasaInteres" type="number" step="any" required>

        <button type="submit">Calcular intereses</button>
    </form>

    <?php if(isset($intereses)): ?>
        <p>Capital invertido: $<?= $inversion; ?></p>
        <p>Intereses generados: $<?= $intereses; ?></p>
        <p><?= $mensaje; ?></p>
        <p>Dinero final en la cuenta: $<?= $totalCuenta; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
