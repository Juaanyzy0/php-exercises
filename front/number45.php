<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise45.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 45</title>
</head>
<body>
    <h1>Ecuacion de Segundo Grado (A*X^2 + B*X + C = 0)</h1>
    <form method="POST" action="">
        <label for="a">Coeficiente A</label>
        <input id="a" name="a" type="number" step="any" required>

        <label for="b">Coeficiente B</label>
        <input id="b" name="b" type="number" step="any" required>

        <label for="c">Coeficiente C</label>
        <input id="c" name="c" type="number" step="any" required>

        <button type="submit">Resolver ecuacion</button>
    </form>

    <?php if(isset($d)): ?>
        <p>Ecuacion con A=<?= $a; ?>, B=<?= $b; ?>, C=<?= $c; ?></p>
        <p>Discriminante D: <?= $d; ?></p>
        <?php if($d == 0): ?>
            <p>Como D = 0, X1 y X2 valen lo mismo: <?= $x1; ?></p>
        <?php elseif($d > 0): ?>
            <p>Valor de X1: <?= $x1; ?></p>
            <p>Valor de X2: <?= $x2; ?></p>
        <?php else: ?>
            <p>El discriminante es menor que 0, no tiene solucion en los reales.</p>
        <?php endif; ?>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
