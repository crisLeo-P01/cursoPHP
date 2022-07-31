<?php

/*Variables de funciones consiste en llamar una función a través de
una variable. */

function buenosAutos() {
  return 'Que buenos autos en el autódromo';
}

function buenosCamiones() {
  return 'Los camiones de hoy se manejan solos';
}

function buenosMates() {
  return 'Los mates en los viajes son primordial';
}

$elementos = 'buenosMates';

echo $elementos() . '<br>';

// Otra forma de representarlo

$elementos = 'Autos';
$miFuncion = 'buenos'.$elementos;

echo $miFuncion();