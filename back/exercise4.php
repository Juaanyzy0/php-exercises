<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $totalCompra = $_POST["totalCompra"];
    $descuento = $totalCompra * 0.15;
    $pagoFinal = $totalCompra - $descuento;
}
?>
