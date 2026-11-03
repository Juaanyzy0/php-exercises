<?php
$porcentaje = 0.02;

if($_SERVER["REQUEST_METHOD"] == "POST"){    
    $capital = $_POST["capital"];
    
    $ganancia = $capital * $porcentaje;
    $total = $capital + $ganancia;
}
?>
