<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise26.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 26</title>
</head>
<body>
    <h1>Evaluar Expresion segun Datos A, B, C y D</h1>
    <form method="POST" action="">
        <label for="a">Valor A</label>
        <input id="a" name="a" type="number" step="any" required>

        <label for="b">Valor B</label>
        <input id="b" name="b" type="number" step="any" required>

        <label for="c">Valor C</label>
        <input id="c" name="c" type="number" step="any" required>

        <label for="d">Valor D</label>
        <input id="d" name="d" type="number" step="any" required>

        <button type="submit">Calcular expresion</button>
    </form>

    <?php if(isset($mensaje)): ?>
        <p><?= $mensaje; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
