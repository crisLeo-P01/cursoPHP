<?php

echo "<h1>Bucle While</h1>";

$numero = 0;

while ($numero <= 100) {
    echo "$numero";
    if($numero != 100) {
        echo ", ";
    }
    $numero++;
}

echo "<hr>";

$num = 2;
$contador = 0;

echo "Multiplicación de $num <br>";

while ($contador <= 10) {
    echo "$num x $contador => " . ($num * $contador) . "<br>";
    $contador++;
}

echo "<hr>";

echo "<h1>Bucle do...While</h1>";

$edad = 22;
$contador2 = 1;

do {
    echo "Tienes acceso al local privado número $contador2 <br>";
    $contador2++;
}while($edad >= 21 && $contador2 <= 10);