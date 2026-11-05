<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise44.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 44</title>
</head>
<body>
    <h1>Inversion para Negocio con Hipoteca y Socio</h1>
    <form method="POST" action="">
        <label for="inversionTotal">Inversion total necesaria ($)</label>
        <input id="inversionTotal" name="inversionTotal" type="number" step="any" required>

        <label for="montoHipoteca">Monto de la hipoteca ($)</label>
        <input id="montoHipoteca" name="montoHipoteca" type="number" step="any" required>

        <button type="submit">Calcular inversion</button>
    </form>

    <?php if(isset($inversionPersona)): ?>
        <p>Inversion total necesaria: $<?= $inversionTotal; ?></p>
        <p>Monto de la hipoteca: $<?= $montoHipoteca; ?></p>
        <p>Dinero que invertira la persona: $<?= $inversionPersona; ?></p>
        <p>Dinero que invertira el socio: $<?= $inversionSocio; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
