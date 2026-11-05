<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $metros = $_POST["metros"];

    // pasamos primero a pulgadas
    $pulgadasTotales = $metros * 39.27;
    $pies = $pulgadasTotales / 12;
}
?>
