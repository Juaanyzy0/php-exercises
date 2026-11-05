<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise7.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Convertir Metros a Pulgadas y Pies</h1>
    <form method="POST" action="">
        <label for="metros">Cantidad en metros</label>
        <input id="metros" name="metros" type="number" step="any" required>

        <button type="submit">Convertir</button>
    </form>

    <?php if(isset($pulgadasTotales, $pies)): ?>
        <p>Cantidad en metros: <?= $metros; ?> m</p>
        <p>Equivalente en pulgadas: <?= $pulgadasTotales; ?></p>
        <p>Equivalente en pies: <?= $pies; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
