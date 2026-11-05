<?php
    // Si se enviÃ³ el formulario, incluimos la lÃ³gica del otro archivo
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise3.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Calcular Sueldo y Comisiones del Vendedor</h1>
    <form method="POST" action="">
        <label for="salBase">Sueldo Base</label>
        <input id="salBase" name="sueldoBase" type="number" step="any" required>

        <label for="v1">Venta 1</label>
        <input id="v1" name="venta1" type="number" step="any" required>

        <label for="v2">Venta 2</label>
        <input id="v2" name="venta2" type="number" step="any" required>

        <label for="v3">Venta 3</label>
        <input id="v3" name="venta3" type="number" step="any" required>

        <button type="submit">Calcular sueldo</button>
    </form>

    <?php if(isset($sueldoTotal, $comision)): ?>
        <p>Sueldo base: $<?= $sueldoBase; ?></p>
        <p>Total comisiones del mes: $<?= $comision; ?></p>
        <p>Total que recibe el vendedor: $<?= $sueldoTotal; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
