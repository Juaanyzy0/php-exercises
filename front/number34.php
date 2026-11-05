<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise34.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 34</title>
</head>
<body>
    <h1>Aumento de Sueldo segun Categoria del Trabajador</h1>
    <form method="POST" action="">
        <label for="categoria">Categoria (1 a 4)</label>
        <input id="categoria" name="categoria" type="number" min="1" max="4" required>

        <label for="sueldo">Sueldo actual</label>
        <input id="sueldo" name="sueldo" type="number" step="any" required>

        <button type="submit">Calcular nuevo sueldo</button>
    </form>

    <?php if(isset($nuevoSueldo)): ?>
        <p>Categoria del trabajador: <?= $categoria; ?></p>
        <p>Nuevo sueldo: $<?= $nuevoSueldo; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
