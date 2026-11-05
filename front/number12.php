<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise12.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>Promedio de Matematica, Fisica y Quimica</h1>
    <form method="POST" action="">
        <label for="examenMat">Examen Matematica</label>
        <input id="examenMat" name="examenMat" type="number" step="any" required>
        <label for="tareaMat1">Tarea 1 Matematica</label>
        <input id="tareaMat1" name="tareaMat1" type="number" step="any" required>
        <label for="tareaMat2">Tarea 2 Matematica</label>
        <input id="tareaMat2" name="tareaMat2" type="number" step="any" required>
        <label for="tareaMat3">Tarea 3 Matematica</label>
        <input id="tareaMat3" name="tareaMat3" type="number" step="any" required>

        <label for="examenFis">Examen Fisica</label>
        <input id="examenFis" name="examenFis" type="number" step="any" required>
        <label for="tareaFis1">Tarea 1 Fisica</label>
        <input id="tareaFis1" name="tareaFis1" type="number" step="any" required>
        <label for="tareaFis2">Tarea 2 Fisica</label>
        <input id="tareaFis2" name="tareaFis2" type="number" step="any" required>

        <label for="examenQui">Examen Quimica</label>
        <input id="examenQui" name="examenQui" type="number" step="any" required>
        <label for="tareaQui1">Tarea 1 Quimica</label>
        <input id="tareaQui1" name="tareaQui1" type="number" step="any" required>
        <label for="tareaQui2">Tarea 2 Quimica</label>
        <input id="tareaQui2" name="tareaQui2" type="number" step="any" required>
        <label for="tareaQui3">Tarea 3 Quimica</label>
        <input id="tareaQui3" name="tareaQui3" type="number" step="any" required>

        <button type="submit">Calcular promedios</button>
    </form>

    <?php if(isset($promedioGeneral)): ?>
        <p>Promedio en Matematica: <?= $promedioMat; ?></p>
        <p>Promedio en Fisica: <?= $promedioFis; ?></p>
        <p>Promedio en Quimica: <?= $promedioQui; ?></p>
        <p>El promedio general es: <?= $promedioGeneral; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
