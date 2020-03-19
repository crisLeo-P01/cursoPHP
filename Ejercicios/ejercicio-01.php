<?php

/* EJERCICIO 01
 * Crear dos variables con el nombre de "país" y "continente" y mostrar su valor por pantalla.
 * Poner en un comentario que tipo de de dato tienen
 */

$pais = 'Argentina';
$continente = 'Sur América';

echo "Vivo en el país $pais y es en el continente $continente";

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


