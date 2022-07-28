<?php

$nombre = "crisTian";

echo( strtolower( $nombre ) . "<br>" ); // Pone al string todo en minúsculas
echo( strtoupper( $nombre ) . "<br>" ); // Pone al string todo en mayúsculas

//////////////////////////////////////////////////

function suma( $num1, $num2 ) {
  echo "La suma entre $num1 y $num2 es de " . ( $num1 + $num2 ) . "<br>";
}

suma( 5, 7 );

/*
Las mejores prácticas es que dentro de la función en vez de llevar un echo
es mejor poner un constructor que en este caso es 'return'. 
A la hora de llamar la función lo hacemos a través de un echo.
*/

function multiplicar( $num3, $num4 ) {
  $resultado = $num3 * $num4;
  return $resultado;
}

echo (multiplicar( 5, 9 ) . "<br>");

//////////////////////////////////////////////////

function tablaMultiplicar($numMulti) {
    echo "<h4>La tabla de multiplicar del $numMulti</h4>";
    for( $i = 1; $i <= 10; $i++ ) {
        $operacion_multi = $numMulti * $i;
        echo "$numMulti x $i = $operacion_multi <br>";
    }
}
tablaMultiplicar(9);

//Otra forma es ingresando un número a través de la URL
if(isset($_GET['numeroget'])) {
    tablaMultiplicar($_GET['numeroget']);
} else {
    echo 'No hay tabla por multiplicar';
}

// Otra forma de generar varias tablas a través de un bucle FOR
for($i = 0; $i <= 10; $i++) {
    tablaMultiplicar($i);
}

//////////////////////////////////////////////////

function fraseMayus( $frase, $conversion = true ) {
  $frase = strtolower( $frase );
  if( $conversion == true) {
    $resultado02 = ucwords( $frase ); // Convierte en mayúscula la primera letra del string
  } else {
    $resultado02 = strtoupper( $frase );
  }

  return $resultado02;
}

echo ( fraseMayus( "esto es una prueba" ) );

