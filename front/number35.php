<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise35.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 35</title>
</head>
<body>
    <h1>Deporte Apropiado segun Temperatura</h1>
    <form method="POST" action="">
        <label for="temperatura">Temperatura en grados Fahrenheit</label>
        <input id="temperatura" name="temperatura" type="number" step="any" required>

        <button type="submit">Consultar deporte</button>
    </form>

    <?php if(isset($deporte)): ?>
        <p>Temperatura: <?= $temperatura; ?> F</p>
        <p>Deporte apropiado para practicar: <?= $deporte; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
