<?php

$nombre = "crisTian";

echo(strtolower($nombre) . "<br>"); //Pone al string todo en minúsculas
echo(strtoupper($nombre) . "<br>"); //Pone al string todo en mayúsculas

//////////////////////////////////////////////////

function suma($num1, $num2) {
  echo "La suma entre $num1 y $num2 es de " . ($num1 + $num2) . "<br>";
}

suma(5, 7);

function multiplicar($num3, $num4) {
  $resultado = $num3 * $num4;
  return $resultado;
}

echo (multiplicar(5, 9) . "<br>");

//////////////////////////////////////////////////

function fraseMayus($frase, $conversion=true) {
  $frase = strtolower($frase);
  if($conversion == true) {
    $resultado02 = ucwords($frase);
  } else {
    $resultado02 = strtoupper($frase);
  }

  return $resultado02;
}

echo (fraseMayus("esto es una prueba"));

