<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise20.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 20</title>
</head>
<body>
    <h1>Calcular Porcentaje Anual de Interes (4 anos)</h1>
    <form method="POST" action="">
        <label for="capital">Prestamo / Capital (Bs)</label>
        <input id="capital" name="capital" type="number" step="any" required>

        <label for="intereses">Intereses pagados en 4 anos (Bs)</label>
        <input id="intereses" name="intereses" type="number" step="any" required>

        <button type="submit">Calcular porcentaje</button>
    </form>

    <?php if(isset($razon)): ?>
        <p>Prestamo (Capital): <?= $capital; ?> Bs</p>
        <p>Intereses pagados en 4 anos: <?= $intereses; ?> Bs</p>
        <p>El porcentaje anual cobrado fue de: <?= $razon; ?>%</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
