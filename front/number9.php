<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise9.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Calcular Salario Neto de un Trabajador</h1>
    <form method="POST" action="">
        <label for="horas">Horas trabajadas</label>
        <input id="horas" name="horasTrabajadas" type="number" step="any" required>

        <label for="precio">Precio por hora</label>
        <input id="precio" name="precioHora" type="number" step="any" required>

        <button type="submit">Calcular salario</button>
    </form>

    <?php if(isset($salarioNeto)): ?>
        <p>Sueldo base: $<?= $sueldoBase; ?></p>
        <p>Descuento por impuestos (20%): $<?= $impuestos; ?></p>
        <p>El salario neto es: $<?= $salarioNeto; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
