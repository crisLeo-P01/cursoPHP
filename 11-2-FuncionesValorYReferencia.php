<?php
//FUNCIÓN POR VALOR
function num($valor) {
  $valor++;
  return $valor;
}

$numero = 5;

echo num($numero) . "<br>";

//FUNCIÓN POR REFERENCIA
function num2(&$valor02) {
  $valor02++;
  return $valor02;
}

$numero02 = 14;
echo num2($numero02) . "<br>";

echo $numero02 . "<br>";