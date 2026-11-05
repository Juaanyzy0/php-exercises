<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $hectareas = $_POST["hectareas"];

    // 1 hectarea son 10000 metros cuadrados
    $metrosCuadrados = $hectareas * 10000;

    if ($metrosCuadrados > 1000000) {
        $areaPino = $metrosCuadrados * 0.70;
        $areaOyamel = $metrosCuadrados * 0.20;
        $areaCedro = $metrosCuadrados * 0.10;
    } else {
        $areaPino = $metrosCuadrados * 0.50;
        $areaOyamel = $metrosCuadrados * 0.30;
        $areaCedro = $metrosCuadrados * 0.20;
    }

    // calculamos la cantidad de arboles segun lo que cabe
    $numPinos = ($areaPino / 10) * 8;
    $numOyameles = ($areaOyamel / 15) * 15;
    $numCedros = ($areaCedro / 18) * 10;
}
?>
