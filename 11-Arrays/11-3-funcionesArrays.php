<?php

$bandas = ['Limp Bizkit', 'Korn', 'Bon Jovi', 'Aerosmith' ];
$numeros = [45, 32, 208, 107, 23, 457];
echo '<h3>Lista no ordenada</h3>';
var_dump($bandas);
var_dump($numeros);


///////////////////

echo '<h3>Lista ordenada descendiente</h3>';
sort($bandas);
var_dump($bandas);

echo '<h3>Lista ordenada descendiente</h3>';
sort($numeros);
var_dump($numeros);

///////////////////

echo '<h3>Lista ordenada ascendiente</h3>';
arsort($bandas);
var_dump($bandas);

echo '<h3>Lista ordenada ascendiente</h3>';
arsort($numeros);
var_dump($numeros);

///////////////////
echo '<h3>Agregando o eliminado indices de arrays </h3>';
$marcasAutos = ['Peugeot', 'Renault', 'Ferrari', 'Audi', 'BMW'];
var_dump($marcasAutos);

// Agrega un elemento al final del array
array_push($marcasAutos, 'Lamborghini');
var_dump($marcasAutos);

// Elimina un elemento al final del array
array_pop($marcasAutos);
var_dump($marcasAutos);

// Elimina un elemento en concreto del array
unset($marcasAutos[1]);
var_dump($marcasAutos);

// Escoje un elemento de forma aleatoria del array
$indiceAleatorio = array_rand($marcasAutos);
echo 'Marca de auto aleatorio: ' . $marcasAutos[$indiceAleatorio];

// Busca un elemento dentro del array y te muestra en que indice esta
$posicionElem = array_search('Ferrari', $marcasAutos);
var_dump($posicionElem);

// Cuanta cuentos elementos hay dentro den un array
// Se puede tanto con el método 'count' como 'sizeof'
echo 'Dentro del array marcaAutos hay ' . sizeof($marcasAutos) . ' elementos';
