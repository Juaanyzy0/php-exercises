<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise5.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Calcular Calificacion Final en Computacion</h1>
    <form method="POST" action="">
        <label for="p1">Parcial 1</label>
        <input id="p1" name="parcial1" type="number" step="any" required>

        <label for="p2">Parcial 2</label>
        <input id="p2" name="parcial2" type="number" step="any" required>

        <label for="p3">Parcial 3</label>
        <input id="p3" name="parcial3" type="number" step="any" required>

        <label for="ef">Examen Final</label>
        <input id="ef" name="examenFinal" type="number" step="any" required>

        <label for="tf">Trabajo Final</label>
        <input id="tf" name="trabajoFinal" type="number" step="any" required>

        <button type="submit">Calcular calificacion</button>
    </form>

    <?php if(isset($calificacionFinal)): ?>
        <p>Promedio parciales: <?= $promedioParciales; ?></p>
        <p>La calificacion final en computacion es: <?= $calificacionFinal; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
