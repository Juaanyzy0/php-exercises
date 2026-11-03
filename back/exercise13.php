<?php
$n1 = 10; // billetes de 50000
$n2 = 15; // billetes de 20000
$n3 = 20; // billetes de 10000
$n4 = 30; // billetes de 5000
$n5 = 25; // billetes de 2000
$n6 = 40; // billetes de 1000
$n7 = 50; // billetes de 500
$n8 = 100; // billetes de 100

$t1 = $n1 * 50000;
$t2 = $n2 * 20000;
$t3 = $n3 * 10000;
$t4 = $n4 * 5000;
$t5 = $n5 * 2000;
$t6 = $n6 * 1000;
$t7 = $n7 * 500;
$t8 = $n8 * 100;

$totalBanco = $t1 + $t2 + $t3 + $t4 + $t5 + $t6 + $t7 + $t8;

echo "El dinero total que hay en el banco es: $" . $totalBanco;
?>

