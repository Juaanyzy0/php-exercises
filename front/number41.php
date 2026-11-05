<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise41.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 41</title>
</head>
<body>
    <h1>Reforestacion de Bosque (Pinos, Oyameles y Cedros)</h1>
    <form method="POST" action="">
        <label for="hectareas">Superficie del bosque en hectareas</label>
        <input id="hectareas" name="hectareas" type="number" step="any" required>

        <button type="submit">Calcular arboles</button>
    </form>

    <?php if(isset($numPinos)): ?>
        <p>Superficie total: <?= $metrosCuadrados; ?> m2</p>
        <p>Numero de pinos a sembrar: <?= $numPinos; ?></p>
        <p>Numero de oyameles a sembrar: <?= $numOyameles; ?></p>
        <p>Numero de cedros a sembrar: <?= $numCedros; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
