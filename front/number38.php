<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise38.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 38</title>
</head>
<body>
    <h1>Signo del Zodiaco y Edad</h1>
    <form method="POST" action="">
        <label for="dia">Dia de nacimiento</label>
        <input id="dia" name="dia" type="number" min="1" max="31" required>

        <label for="mes">Mes de nacimiento (1-12)</label>
        <input id="mes" name="mes" type="number" min="1" max="12" required>

        <label for="anioNacimiento">Ano de nacimiento</label>
        <input id="anioNacimiento" name="anioNacimiento" type="number" required>

        <button type="submit">Consultar signo y edad</button>
    </form>

    <?php if(isset($signo)): ?>
        <p>Fecha de nacimiento: <?= $dia; ?>/<?= $mes; ?>/<?= $anioNacimiento; ?></p>
        <p>Signo del zodiaco: <?= $signo; ?></p>
        <p>Edad: <?= $edad; ?> anos</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
