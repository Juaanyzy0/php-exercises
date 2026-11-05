<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise8.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Calcular Area de un Triangulo</h1>
    <form method="POST" action="">
        <label for="a">Lado A</label>
        <input id="a" name="a" type="number" step="any" required>

        <label for="b">Lado B</label>
        <input id="b" name="b" type="number" step="any" required>

        <label for="c">Lado C</label>
        <input id="c" name="c" type="number" step="any" required>

        <button type="submit">Calcular area</button>
    </form>

    <?php if(isset($area)): ?>
        <p>Lados del triangulo: <?= $a; ?>, <?= $b; ?>, <?= $c; ?></p>
        <p>Valor de p: <?= $p; ?></p>
        <p>El area del triangulo es: <?= $area; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
