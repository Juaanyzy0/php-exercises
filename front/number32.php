<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise32.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 32</title>
</head>
<body>
    <h1>Evaluar Expresion P^3 + Q^4 - 2*P^2 > 680</h1>
    <form method="POST" action="">
        <label for="p">Valor de P</label>
        <input id="p" name="p" type="number" step="any" required>

        <label for="q">Valor de Q</label>
        <input id="q" name="q" type="number" step="any" required>

        <button type="submit">Evaluar</button>
    </form>

    <?php if(isset($expresion)): ?>
        <?php if($cumple): ?>
            <p>Se cumple la condicion (resultado = <?= $expresion; ?>)</p>
            <p>Valor de P: <?= $p; ?></p>
            <p>Valor de Q: <?= $q; ?></p>
        <?php else: ?>
            <p>Los valores P y Q no satisfacen la expresion porque dio: <?= $expresion; ?></p>
        <?php endif; ?>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
