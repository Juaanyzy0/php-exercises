<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise14.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 14</title>
</head>
<body>
    <h1>Sistema de Ecuaciones Lineales (aX + bY = c, dX + eY = f)</h1>
    <form method="POST" action="">
        <label for="a">Valor de A</label>
        <input id="a" name="a" type="number" step="any" required>

        <label for="b">Valor de B</label>
        <input id="b" name="b" type="number" step="any" required>

        <label for="c">Valor de C</label>
        <input id="c" name="c" type="number" step="any" required>

        <label for="d">Valor de D</label>
        <input id="d" name="d" type="number" step="any" required>

        <label for="e">Valor de E</label>
        <input id="e" name="e" type="number" step="any" required>

        <label for="f">Valor de F</label>
        <input id="f" name="f" type="number" step="any" required>

        <button type="submit">Calcular X e Y</button>
    </form>

    <?php if(isset($x, $y)): ?>
        <p>El valor de X es: <?= $x; ?></p>
        <p>El valor de Y es: <?= $y; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
