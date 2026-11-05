<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];

    if ($d == 0) {
        $resultado = ($a - $c) * ($a - $c);
        $mensaje = "Como D es 0, el resultado de (A-C)^2 es: " . $resultado;
    } else if ($d > 0) {
        $resultado = (($a - $b) * ($a - $b) * ($a - $b)) / $d;
        $mensaje = "Como D es mayor a 0, el resultado de ((A-B)^3)/D es: " . $resultado;
    } else {
        $mensaje = "D es negativo, no hay formula para este caso.";
    }
}
?>
