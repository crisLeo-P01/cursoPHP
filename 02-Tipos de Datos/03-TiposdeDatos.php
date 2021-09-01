<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
/*
 Tipos de datos:
    Números enteros => Int / Integer = 32
    Coma flotante / decimal => float / double = 4,7
    Cadenas => string = 'Esto es una cadena de texto'
    Boleano => bool = true o false
    null
    Array => Colección de datos
    objetos
 */

  $num1 = 77;
  echo gettype($num1) . '<br>';

  $decimal = 27.4;
  echo gettype($decimal) . '<br>';

  $texto = 'Esto es texto';
  echo gettype($texto) . '<br>';

  $boleano = true;
  echo gettype($boleano) . '<br>';

  $dumpMostrar = 'No imprime por pantalla pero con la función var_dump muestra el contenido';
  var_dump($dumpMostrar);
  echo '<br>';

  //COMPARAR DOS STRING
  //strcmp - Compara dos string para ver si son iguales. Es case-sensitive, es decir, tiene en cuenta las mayúsculas y minúsculas.
  $string01 = "casa";
  $string02 = "CASA";
  $resultado01 = strcmp($string01, $string02); //Devuelve 1 si no son iguales. 0 si son iguales
  echo "El resultado es $resultado01";
  echo '<br>';
  //strcasecmp - También compara dos string pero no tiene en cuenta las mayúsculas y las minúsculas
  $resultado02 = strcasecmp($string01, $string02);
  echo "El resultado es $resultado02";

  echo '<br>';

  $newTexto = 'Esto es una variable que dentro tiene una nueva variable y esta entre comillas simples muestra la variable de forma literal $num1';
  $newTexto2 = "Esto es una variable que dentro tiene una nueva variable entre comillas dobles $num1";
  echo $newTexto;
  echo '<br>';
  echo $newTexto2;

  $num34 = 79;
  echo $num34;


?>

</body>
</html>

