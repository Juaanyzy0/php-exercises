<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise23.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 23</title>
</head>
<body>
    <h1>Calcular Ingreso por Tonelada de Maiz</h1>
    <form method="POST" action="">
        <label for="m">Kg de harina obtenidos (M)</label>
        <input id="m" name="m" type="number" step="any" required>

        <label for="n">Litros de aceite obtenidos (N)</label>
        <input id="n" name="n" type="number" step="any" required>

        <label for="b1">Precio por bulto de 24 kg de harina (B1)</label>
        <input id="b1" name="b1" type="number" step="any" required>

        <label for="b2">Precio por caja de 15 envases de aceite (B2)</label>
        <input id="b2" name="b2" type="number" step="any" required>

        <label for="b3">Precio por kg de harina suelta (B3)</label>
        <input id="b3" name="b3" type="number" step="any" required>

        <label for="b4">Precio por litro de aceite suelto (B4)</label>
        <input id="b4" name="b4" type="number" step="any" required>

        <button type="submit">Calcular ingresos</button>
    </form>

    <?php if(isset($ingresoTotal)): ?>
        <p>Ingreso por harina: <?= $ingresoHarina; ?> Bs</p>
        <p>Ingreso por aceite: <?= $ingresoAceite; ?> Bs</p>
        <p>Ingreso total por la tonelada de maiz: <?= $ingresoTotal; ?> Bs</p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
