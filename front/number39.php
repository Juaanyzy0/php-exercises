<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise39.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 39</title>
</head>
<body>
    <h1>Decision de Compra: Automovil o Terreno</h1>
    <form method="POST" action="">
        <label for="precioInicial">Precio inicial del automovil y terreno</label>
        <input id="precioInicial" name="precioInicial" type="number" step="any" required>

        <label for="devaluacionAuto">Devaluacion del automovil en 3 anos</label>
        <input id="devaluacionAuto" name="devaluacionAuto" type="number" step="any" required>

        <label for="incrementoTerreno">Incremento de valor del terreno en 3 anos</label>
        <input id="incrementoTerreno" name="incrementoTerreno" type="number" step="any" required>

        <button type="submit">Evaluar decision</button>
    </form>

    <?php if(isset($decision)): ?>
        <p>Devaluacion del automovil en 3 anos: $<?= $devaluacionAuto; ?></p>
        <p>Mitad del incremento del terreno: $<?= $mitadIncremento; ?></p>
        <p><?= $decision; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
