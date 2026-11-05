<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $presupuesto = $_POST["presupuesto"];

    $ginecologia = $presupuesto * 0.40;
    $traumatologia = $presupuesto * 0.30;
    $pediatria = $presupuesto * 0.30;
}
?>
