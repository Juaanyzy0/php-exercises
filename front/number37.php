<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise37.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 37</title>
</head>
<body>
    <h1>Validar Triangulo, Tipo y Area</h1>
    <form method="POST" action="">
        <label for="a">Lado A</label>
        <input id="a" name="a" type="number" step="any" required>

        <label for="b">Lado B</label>
        <input id="b" name="b" type="number" step="any" required>

        <label for="c">Lado C</label>
        <input id="c" name="c" type="number" step="any" required>

        <button type="submit">Verificar triangulo</button>
    </form>

    <?php if(isset($esTriangulo)): ?>
        <?php if($esTriangulo): ?>
            <p>Los lados <?= $a; ?>, <?= $b; ?>, <?= $c; ?> SI forman un triangulo.</p>
            <p>Tipo de triangulo: <?= $tipo; ?></p>
            <p>El area del triangulo es: <?= $area; ?></p>
        <?php else: ?>
            <p>Los datos no corresponden a un triangulo.</p>
        <?php endif; ?>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
