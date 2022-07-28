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

if (isset($_GET['numero02'])) { // isset comprueba si hay una variable o no
    $numero02 = (int)$_GET['numero02']; // por defecto ha a decir que es un string por eso hay que castear poniendo entre paréntesis el valor de int. De esta forma damos por sentado que es un número entero.
} else {
    $numero02 = 1;
}

$contador03 = 1;
while ($contador03 <= 10) {
    echo "$numero02 x $contador03 = " . ($numero02*$contador03) . "<br>";
    $contador03++;
}

echo "<hr>";

echo "<h1>Bucle do...While</h1>";

$edad = 22;
$contador2 = 1;

do {
    echo "Tienes acceso al local privado número $contador2 <br>";
    $contador2++;
}while($edad >= 21 && $contador2 <= 10);


$contador3 = 30;
do {
    echo "Contador hacia atrás arrancando de " . $contador3 . "<br>";
    $contador3--;
} while ($contador3 >= 0);