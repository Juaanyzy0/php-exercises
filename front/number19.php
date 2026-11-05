<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise19.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 19</title>
</head>
<body>
    <h1>Reparto de Presupuesto Anual en Hospital</h1>
    <form method="POST" action="">
        <label for="presupuesto">Presupuesto anual</label>
        <input id="presupuesto" name="presupuesto" type="number" step="any" required>

        <button type="submit">Calcular reparto</button>
    </form>

    <?php if(isset($ginecologia)): ?>
        <p>Presupuesto anual: $<?= $presupuesto; ?></p>
        <p>Dinero para Ginecologia (40%): $<?= $ginecologia; ?></p>
        <p>Dinero para Traumatologia (30%): $<?= $traumatologia; ?></p>
        <p>Dinero para Pediatria (30%): $<?= $pediatria; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
