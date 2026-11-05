<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $chelines = $_POST["chelines"];
    $dracmas = $_POST["dracmas"];
    $pesetas = $_POST["pesetas"];

    // 100 chelines son 956.871 pesetas
    $chelinesAPesetas = ($chelines * 956.871) / 100;

    // de dracmas pasamos a pesetas y luego a francos franceses
    $dracmasAPesetas = ($dracmas * 88.607) / 100;
    $dracmasAFrancos = $dracmasAPesetas / 20.110;

    // pesetas a dolares y liras
    $pesetasADolares = $pesetas / 122.499;
    $pesetasALiras = ($pesetas * 100) / 9.289;
}
?>
