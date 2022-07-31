<?php

$nombre = 'Cristian';
var_dump($nombre);

echo '<br>';
echo date('d-m-y');

echo '<br>';
echo 'Raíz cuadrada de 23: ' . sqrt(23);

echo '<br>';
echo 'Número aleatorio infinito: ' . rand();

echo '<br>';
echo 'Número aleatorio del 18 al 65: ' . rand(18, 65);

echo '<br>';
echo 'Número redondeado de 6: ' . round(6.4354543534, 3);

echo '<br>';
if( is_string( $nombre ) ) {
  echo 'La variable nombre es un string';
}

echo '<br>';
if( !is_float( $nombre ) ) {
  echo 'La variable nombre no es un float';
}

// Comprueba si existe o no una variable
echo '<br>';
if( isset( $edad ) ) {
  echo 'La variable existe';
} else {
  echo 'La variable no existe';
}

// Elimina los espacio tanto delante como por detrás de un texto
echo '<br>';
$frase = "      Todo éxito conlleva horas de trabajo y sacrificio       ";
echo trim($frase);

// Elimina la variable que hayamos colocado
echo '<br>';
$frase2 = "Que comes que adivinas";
unset($frase2);

if( isset($frase2) ) {
  echo 'Existe la variable frase2';
} else {
  echo 'No existe la variable';
}

// Comprueba si una variables se está vacía o no
echo '<br>';
$frase3 = "El mundo nos ofrece un mundo de posibilidades";

if( empty($frase3) ) {
  echo 'La variables está vacía';
} else {
  echo 'La variable NO está vacía: ' . $frase3;
}

// Comprueba cuantos carácteres tiene un string
echo '<br>';
$cadena = "Los juegos son el mejor pasatriempo";
echo 'La variable $cadena tiene ' . strlen($cadena) . ' carácteres';

// Encontrar caracter
echo '<br>';
$cadena2 = "Los juegos son el mejor pasatriempo";
echo 'La letra g de la frase ' . $cadena2 . ' se encuentra en la posición ' . strpos($cadena2, "g");

// Reemplazar caracter o una palabra
echo '<br>';
$cadena3 = "Siempre mirar para atrás";
echo $cadena3;
echo '<br>';
$cadena3 = str_replace("atrás", "adelante", $cadena3);

echo $cadena3;
echo '<br><br>';

// Convertir un string todo en mayúsculas o minúsculas
$moto = 'El año que viene me COMPRO una moto';
echo $moto;
echo '<br>';
echo strtolower($moto);
echo '<br>';
echo strtoupper($moto);