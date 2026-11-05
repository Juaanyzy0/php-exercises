<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise31.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 31</title>
</head>
<body>
    <h1>Calcular Pago por Alquiler de Automovil</h1>
    <form method="POST" action="">
        <label for="km">Distancia recorrida (km)</label>
        <input id="km" name="km" type="number" step="any" required>

        <button type="submit">Calcular pago</button>
    </form>

    <?php if(isset($pago)): ?>
        <p>Distancia recorrida: <?= $km; ?> km</p>
        <p>Total a pagar por el alquiler: <?= $pago; ?> Bs</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
