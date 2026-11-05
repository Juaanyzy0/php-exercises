<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise27.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 27</title>
</head>
<body>
    <h1>Identificar Figura Geometrica por su Area</h1>
    <form method="POST" action="">
        <label for="valor1">Valor 1</label>
        <input id="valor1" name="valor1" type="number" step="any" required>

        <label for="valor2">Valor 2</label>
        <input id="valor2" name="valor2" type="number" step="any" required>

        <label for="valor3">Valor 3 (Area)</label>
        <input id="valor3" name="valor3" type="number" step="any" required>

        <button type="submit">Comprobar figura</button>
    </form>

    <?php if(isset($figura)): ?>
        <p>Valores dados: <?= $valor1; ?>, <?= $valor2; ?> y area buscada: <?= $valor3; ?></p>
        <p><?= $figura; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
