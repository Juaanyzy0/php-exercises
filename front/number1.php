<?php
    // Si se envió el formulario, incluimos la lógica del otro archivo
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise1.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Calcular Promedio de Edades</h1>
    <form method="POST" action="">
        <label for="age1">Edad 1</label>
        <input id="age1" name="edad1" type="number">

        <label for="age2">Edad 2</label>
        <input id="age2" name="edad2" type="number">
        
        <label for="age3">Edad 3</label>
        <input id="age3" name="edad3" type="number">

        <button type="submit">Calcular promedio</button>
    </form>

    <?php if(isset($average)): ?>
        <p>El promedio de las edades es igual a: <?= $average; ?></p>
    <?php endif; ?>
</body>
</html>
