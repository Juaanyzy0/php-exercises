<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise18.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 18</title>
</head>
<body>
    <h1>Cobro en Gasolinera (Galones a Litros)</h1>
    <form method="POST" action="">
        <label for="galones">Galones surtidos</label>
        <input id="galones" name="galones" type="number" step="any" required>

        <button type="submit">Calcular cobro</button>
    </form>

    <?php if(isset($totalCobrar)): ?>
        <p>Galones surtidos: <?= $galones; ?></p>
        <p>Equivalente en litros: <?= $litrosTotales; ?></p>
        <p>Total a cobrar al cliente: <?= $totalCobrar; ?> Bs</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
