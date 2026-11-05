<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    // calculamos el discriminante D = B^2 - 4*A*C
    $d = ($b * $b) - (4 * $a * $c);

    if ($d == 0) {
        $x1 = -$b / (2 * $a);
        $x2 = $x1;
    } else if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
    }
}
?>
