<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise6.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Calcular Porcentaje de Hombres y Mujeres</h1>
    <form method="POST" action="">
        <label for="hombres">Cantidad de Hombres</label>
        <input id="hombres" name="hombres" type="number" required>

        <label for="mujeres">Cantidad de Mujeres</label>
        <input id="mujeres" name="mujeres" type="number" required>

        <button type="submit">Calcular porcentajes</button>
    </form>

    <?php if(isset($totalEstudiantes)): ?>
        <p>Total de estudiantes: <?= $totalEstudiantes; ?></p>
        <p>Porcentaje de hombres: <?= $porcentajeHombres; ?>%</p>
        <p>Porcentaje de mujeres: <?= $porcentajeMujeres; ?>%</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
