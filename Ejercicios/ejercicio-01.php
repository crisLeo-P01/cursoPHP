<?php

/* EJERCICIO 01
 * Crear dos variables con el nombre de "país" y "continente" y mostrar su valor por pantalla.
 * Poner en un comentario que tipo de de dato tienen
 */

$pais = 'Argentina';
$continente = 'Sur América';

echo "Vivo en el país $pais y es en el continente $continente";
//Son de tipo string
echo "<hr>";

/* EJERCICIO 02
 * Escribir un script en PHP que nos muestre por pantalla todos los
 * números pares del 1 al 100.
 */
$num1 = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i%2 == 0) {
        echo "$i <br>";
    }
}

echo "<hr>";

/* EJERCICIO 03
    Escribir un programa que imprima por pantalla los cuadrados
    (un número multiplicado por si mismo) de los 40 primeros números
    naturales.
    PD: utilizar bucle WHILE y luego con FOR
 */

$contador = 0;
while($contador <= 40) {
    $cuadrado = $contador * $contador;
    echo "El cuadrado de $contador es de $cuadrado <br>";
    $contador++;
}

echo "<hr>";

for ($contador2 = 0; $contador2 <= 40; $contador2++) {
    echo "El forCuadrado de $contador2 es de $i <br>";
}

/* EJERCICIO 04
    Recoger dos números de la URL(Parámetros GET) y hacer todas las
    operaciones básicas de una calculadora(suma, resta, multiplicación y división)
    de esos dos números.
 */

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "Suma: " . ($numero1 + $numero2) . "<br>";
    echo "Resta: " . ($numero1 - $numero2) . "<br>";
    echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";
    echo "División: " . ($numero1 / $numero2) . "<br>";
} else {
    echo "Introduce correctamente los valores en la URL";
}