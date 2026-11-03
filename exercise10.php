<?php
$chelines = 250;
$dracmas = 500;
$pesetas = 10000;

// 100 chelines son 956.871 pesetas
$chelinesAPesetas = ($chelines * 956.871) / 100;

// de dracmas pasamos a pesetas y luego a francos franceses
$dracmasAPesetas = ($dracmas * 88.607) / 100;
$dracmasAFrancos = $dracmasAPesetas / 20.110;

// pesetas a dolares y liras
$pesetasADolares = $pesetas / 122.499;
$pesetasALiras = ($pesetas * 100) / 9.289;

echo "$chelines chelines austriacos en pesetas son: " . $chelinesAPesetas . "<br>";
echo "$dracmas dracmas griegos en francos franceses son: " . $dracmasAFrancos . "<br>";
echo "$pesetas pesetas en dolares son: " . $pesetasADolares . "<br>";
echo "$pesetas pesetas en liras italianas son: " . $pesetasALiras;
?>

