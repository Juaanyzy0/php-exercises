<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../back/exercise10.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Conversion de Divisas</h1>
    <form method="POST" action="">
        <label for="chelines">Chelines austriacos</label>
        <input id="chelines" name="chelines" type="number" step="any" required>

        <label for="dracmas">Dracmas griegos</label>
        <input id="dracmas" name="dracmas" type="number" step="any" required>

        <label for="pesetas">Pesetas</label>
        <input id="pesetas" name="pesetas" type="number" step="any" required>

        <button type="submit">Convertir divisas</button>
    </form>

    <?php if(isset($chelinesAPesetas)): ?>
        <p><?= $chelines; ?> chelines austriacos en pesetas son: <?= $chelinesAPesetas; ?></p>
        <p><?= $dracmas; ?> dracmas griegos en francos franceses son: <?= $dracmasAFrancos; ?></p>
        <p><?= $pesetas; ?> pesetas en dolares son: <?= $pesetasADolares; ?></p>
        <p><?= $pesetas; ?> pesetas en liras italianas son: <?= $pesetasALiras; ?></p>
    <?php endif; ?>
    <script src="../front/js/script.js"></script>
</body>
</html>
