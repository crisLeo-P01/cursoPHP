<?php

echo "<h2>Funciones útiles para Arrays</h2>";

$numeros = [45, 32, 208, 107, 23, 457];

echo "Array original: " . implode(", ", $numeros) . "<br>";

// count() - contar elementos
echo "número de elementos: " . count($numeros) . "<br>";

// sort() - ordenar ascendente (modifica el elemento original)
$numeros_copia = $numeros;
sort($numeros_copia);

echo "números ordenados de forma ascendente: " . implode(", ", $numeros_copia) . "<br>";

// rsort() - ordenar descendente
$numeros_copia_2 = $numeros;
rsort($numeros_copia_2);

echo "números ordenados de forma descendente: " . implode(", ", $numeros_copia_2) . "<br>";

// array_reverse() - invertir orden(no modifica el original);
$numeros_invertidos = array_reverse($numeros);
echo "Array invertido: " . implode(", ", $numeros_invertidos) . "<br>";

$bandas = ['Limp Bizkit', 'Korn', 'Bon Jovi', 'Aerosmith', 'Metallica', 'Kiss'];

// in_array() - verifica si un valor existe
if(in_array("Bon Jovi", $bandas)) {
    echo "La banda Bon Jovi esta dentro del array <br>";
}

// array_search() - buscar la posición de un valor
$posicion = array_search('Limp Bizkit', $bandas);
echo "La banda Limp Bizkit se encuentra en la posición: $posicion <br>";

// array_slice() - extraer una porción del array
$porcion = array_slice($bandas, 1, 3);
echo "Elementos del 1 al 3 son: " . implode(", ", $porcion) . "<br>";

// array_merge() - combinar arrays
$mas_numeros = [105, 687, 332];
$combinado = array_merge($numeros, $mas_numeros);

echo "array combinado: " . implode(", ", $combinado) . "<br>";

// min() y max() - minimos y maximos
echo "valor minimo: " . min($numeros) . "<br>";
echo "valor maximo: " . max($numeros) . "<br>";

// array_sum() - suma todos los elementos
echo "suma total del array: " . array_sum($numeros) . "<br>";

// array_keys() y array_values() - obtener claves y valores
$persona = [
    "nombre" => "Juan",
    "apellido" => "Pérez",
    "edad" => 30,
    "ciudad" => "Madrid",
    "profesion" => "Programador"
];

echo "claves del array persona: " . implode(", ", array_keys($persona)) . "<br>";
echo "valores del array persona: " . implode(", ", array_values($persona)) . "<br>";

