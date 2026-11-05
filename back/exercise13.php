<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1 = $_POST["n1"]; // billetes de 50000
    $n2 = $_POST["n2"]; // billetes de 20000
    $n3 = $_POST["n3"]; // billetes de 10000
    $n4 = $_POST["n4"]; // billetes de 5000
    $n5 = $_POST["n5"]; // billetes de 2000
    $n6 = $_POST["n6"]; // billetes de 1000
    $n7 = $_POST["n7"]; // billetes de 500
    $n8 = $_POST["n8"]; // billetes de 100

    $t1 = $n1 * 50000;
    $t2 = $n2 * 20000;
    $t3 = $n3 * 10000;
    $t4 = $n4 * 5000;
    $t5 = $n5 * 2000;
    $t6 = $n6 * 1000;
    $t7 = $n7 * 500;
    $t8 = $n8 * 100;

    $totalBanco = $t1 + $t2 + $t3 + $t4 + $t5 + $t6 + $t7 + $t8;
}
?>
