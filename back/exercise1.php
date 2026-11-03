<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){    
    $edad1 = $_POST["edad1"];
    $edad2 = $_POST["edad2"];
    $edad3 = $_POST["edad3"];

    $average = ($edad1 + $edad2 + $edad3) / 3;
}
?>