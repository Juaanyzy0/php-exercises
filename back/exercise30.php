<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];

    // formamos el numero N con los 4 digitos
    $n = ($a * 1000) + ($b * 100) + ($c * 10) + $d;

    $ultimosDos = ($c * 10) + $d;

    if ($c >= 5) {
        $redondeado = $n - $ultimosDos + 100;
    } else {
        $redondeado = $n - $ultimosDos;
    }
}
?>
