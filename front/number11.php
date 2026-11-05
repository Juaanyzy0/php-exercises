<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise11.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Calcular Sueldo Neto, Asignaciones y Deducciones</h1>
    <form method="POST" action="">
        <label for="nombre">Nombre del trabajador</label>
        <input id="nombre" name="nombre" type="text" required>

        <label for="horasNormales">Horas normales trabajadas</label>
        <input id="horasNormales" name="horasNormales" type="number" step="any" required>

        <label for="pagoHora">Pago por hora normal</label>
        <input id="pagoHora" name="pagoHora" type="number" step="any" required>

        <label for="horasExtras">Horas extras trabajadas</label>
        <input id="horasExtras" name="horasExtras" type="number" step="any" required>

        <label for="hijos">Numero de hijos</label>
        <input id="hijos" name="hijos" type="number" required>

        <button type="submit">Calcular sueldo neto</button>
    </form>

    <?php if(isset($sueldoNeto)): ?>
        <p>Trabajador: <?= $nombre; ?></p>
        <p>Total asignaciones: <?= $totalAsignaciones; ?> Bs</p>
        <p>Total deducciones: <?= $totalDeducciones; ?> Bs</p>
        <p>Sueldo neto: <?= $sueldoNeto; ?> Bs</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
