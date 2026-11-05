<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise42.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 42</title>
</head>
<body>
    <h1>Diagnostico de Anemia por Nivel de Hemoglobina</h1>
    <form method="POST" action="">
        <label for="edadMeses">Edad en meses (ej. 20 anos = 240 meses)</label>
        <input id="edadMeses" name="edadMeses" type="number" step="any" required>

        <label for="sexo">Sexo (M o F)</label>
        <input id="sexo" name="sexo" type="text" maxlength="1" required>

        <label for="hemoglobina">Nivel de hemoglobina (g%)</label>
        <input id="hemoglobina" name="hemoglobina" type="number" step="any" required>

        <button type="submit">Analizar resultado</button>
    </form>

    <?php if(isset($resultado)): ?>
        <p>Nivel de hemoglobina: <?= $hemoglobina; ?> g%</p>
        <p>Minimo requerido para su edad: <?= $minimo; ?> g%</p>
        <p><?= $resultado; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
