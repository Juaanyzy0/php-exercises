<?php
    // Si se envió el formulario, incluimos la lógica del otro archivo
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise2.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Calcular intereses banco</h1>
    <form method="POST" action="">
        <label for="cap">Capital a invertir</label>
        <input id="cap1" name="capital" type="number">

        <button type="submit">Calcular promedio</button>
    </form>

    <?php if(isset($total, $ganancia)): ?>
        <p>El total de los intereses generados es de: <?= $ganancia; ?> </p>
        <p>El total del capital mas sus intereses generados es de: <?= $total; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
