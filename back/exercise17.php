<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pvp = $_POST["pvp"];
    $precioPagado = $_POST["precioPagado"];

    $descuento = $pvp - $precioPagado;
    $porcentaje = ($descuento * 100) / $pvp;
}
?>
