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

/*
  Ejercicio 3
  Hacer un programa que compruebe si una variable está
  vacía. Si está vacía, rellenarla con texto en minúsculas
  y mostrarlo en mayúsculas y negrita.
*/

$modeloApple = '';

if( empty( $modeloApple ) ) {
  $modeloApple = 'La variable $modeloApple se encuentra vacía';
  $mayusApple = strtoupper( $modeloApple );
  echo "<strong>$mayusApple</strong>";
}
echo '<br>';
/*
  Ejercicio 3
  Crear un string en php que tenga cuatro variables. 
  - Tipo array
  - tipo string
  - tipo INT
  - tipo boolean
  Luego imprimir por pantalle el tipo de variable es
*/

$tipoArray = [32, 45, 105];
$tipoString = 'Es una variable de tipo string';
$tipoInt = 32;
$tipoBoolean = true;

if( is_array( $tipoArray ) ) {
  echo 'la variable $tipoArray es de tipo array';
}
echo '<br>';
if( is_string( $tipoString ) ) {
  echo 'la variable $tipoString es de tipo string';
}
echo '<br>';
if( is_int( $tipoInt) ) {
  echo 'la variable $tipoInt es de tipo numerico';
}
echo '<br>';
if( is_bool( $tipoBoolean) ) {
  echo 'la variable $tipoBoolean es de tipo booleano';
}


