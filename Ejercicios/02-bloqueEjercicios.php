<?php

/*
  Ejercicio 1
  Hacer un programa en PHP que tenga un array con 8
  números enteros y que haga lo siguiente:
  - Recorrerlo y mostrarlo
  - Ordenarlo y mostrarlo
  - Mostrar su longitud
  -Buscar algún elemento
*/

$numeros = [34, 107, 32, 43, 274, 7, 56, 3];

echo '<ul>';
function mostrarNumeros( $numeros ) {
  $resultado = '';
  foreach( $numeros as $numero ) {
    $resultado .= $numero . '<br>';
  }

  return $resultado;
}
echo '</ul>';
echo mostrarNumeros($numeros);

sort( $numeros );
var_dump($numeros);

echo 'El array numeros tiene una longitud de ' . count($numeros) . '<br>';

// Búsqueda de un indice del array
$busqueda = 8;

$search = array_search($busqueda, $numeros);
if( !empty( $search ) ) {
  echo 'El número buscado en el array existe y esta en el indice ' . $search;
} else {
  echo 'El número buscado no existe';
}

echo '<br>';

/*
  Ejercicio 2
  Hacer un programa en PHP que añada valores a un array
  mientras que su longitu sea menor a 10 y luego
  mostrarlo por pantalla
*/

$numbers = array();
for( $i = 0; $i < 10; $i++ ) {
  array_push( $numbers, 'Elemento - ' . $i );
}

var_dump($numbers);