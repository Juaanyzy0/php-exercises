<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $p = $_POST["p"];
    $q = $_POST["q"];

    // P^3 + Q^4 - 2*P^2
    $expresion = ($p * $p * $p) + ($q * $q * $q * $q) - (2 * ($p * $p));
    $cumple = ($expresion > 680);
}
?>
