<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise30.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 30</title>
</head>
<body>
    <h1>Redondear Numero de 4 Digitos a la Centena</h1>
    <form method="POST" action="">
        <label for="a">Digito A (Miles)</label>
        <input id="a" name="a" type="number" min="0" max="9" required>

        <label for="b">Digito B (Centenas)</label>
        <input id="b" name="b" type="number" min="0" max="9" required>

        <label for="c">Digito C (Decenas)</label>
        <input id="c" name="c" type="number" min="0" max="9" required>

        <label for="d">Digito D (Unidades)</label>
        <input id="d" name="d" type="number" min="0" max="9" required>

        <button type="submit">Redondear</button>
    </form>

    <?php if(isset($redondeado)): ?>
        <p>El numero N es: <?= $n; ?></p>
        <p>El resultado redondeado a la centena es: <?= $redondeado; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
