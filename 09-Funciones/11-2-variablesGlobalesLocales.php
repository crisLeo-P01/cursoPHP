<?php

/* Variables locales: Son las que se definen dentro de una función y no pueden ser usadas
fueras de la misma, solo dentro de la propia función. A no ser que lo hagamos con un return

Variable global: Son las que se declaran fuera de la función y estan disponible tanto
fuera como dentro de la función. */

$frase = 'La vida es una caja de sorpresas';

echo $frase;


function mostrarFrase () {
  //Variable global pero se especifica colocando global dentro de una función
  global $frase;
  echo "<h1>$frase</h1>";

  /* Variable local que esta dentro de una función. Si se desea sacarla fuera
  colocamos un return e imprimimos la función a través de un echo */
  $year = 2022;
  return $year;
}

echo mostrarFrase();