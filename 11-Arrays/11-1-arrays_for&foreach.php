<?php

$pelicula = 'Batman';
$peliculas = array('Batman', 'Deepool', 'Ironman');

// otra forma de representar los array
$bandas = ['Aerosmith', 'Bon Jovi', 'Korn', 'Limp Bizkit'];

var_dump($peliculas);
echo '<br>';
var_dump($bandas);

echo $peliculas[2];
echo '<br>';
echo $bandas[3];

// Recorriendo los array con FOR
echo '<h3>Recorriendo array con FOR</h3>';
echo '<ul>';
for ($i = 0; $i < count($peliculas); $i++) {
    echo '<li>' . $peliculas[$i] . '</li>';
}
echo '</ul>';

echo '<br>';

// Recorriendo los array con FOREACH
echo '<h3>Recorriendo array con FOREACH</h3>';
echo '<ul>';
foreach ($bandas as $banda) {
    echo '<li>' . $banda . '</li>';
}
echo '</ul>';
