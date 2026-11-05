<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise25.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 25</title>
</head>
<body>
    <h1>Calcular Aumento de Sueldo</h1>
    <form method="POST" action="">
        <label for="sueldo">Sueldo actual (Bs)</label>
        <input id="sueldo" name="sueldo" type="number" step="any" required>

        <button type="submit">Calcular nuevo sueldo</button>
    </form>

    <?php if(isset($nuevoSueldo)): ?>
        <p>Sueldo anterior: <?= $sueldo; ?> Bs</p>
        <p>Aumento aplicado: <?= $aumento; ?> Bs</p>
        <p>El nuevo sueldo del trabajador es: <?= $nuevoSueldo; ?> Bs</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
