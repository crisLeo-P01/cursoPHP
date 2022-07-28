<?php

$nombre = 'Cristian';
$edad = 36;
echo 'Mi nombre es ' . $nombre . ' y tengo ' . $edad . ' años <br>';

define('OBJETO', 'celular');
echo OBJETO . '<br>';

$numero = 17;
if ( $numero >= 18 && $numero <= 60) {
    echo "Esta apto para trabajar";
} else {
    echo "NO esta apto para trabajar";
}

echo '<br>';

$numero2 = 32;
($numero2 === 32) ? print 'Es igual a 32' : print 'NO es igual a 32';
echo $numero2 != 32 ? 'NO es igual a 32' : 'Es igual a 32';

echo '<br>';

$dia = 4;
switch ( $dia ) {
    case 1: echo 'Es Lunes';break;
    case 2: echo 'Es martes';break;
    case 3: echo 'Es miercoles';break;
    case 4: echo 'Es jueves';break;
    case 5: echo 'Es viernes';break;
    default: echo 'Es fin de semana';break;
}

echo '<br>';

goto marca;
echo 'hola';
echo 'hola';
echo 'hola';
echo 'hola';
echo 'hola';

marca:
echo 'Evito los demas echos';

echo '<br>';

$marca = 'apple';
while($marca === 'apple') {
    echo 'La marca es apple';break;
}

echo '<br>';

$contador = 10;

do {
    echo 'Número: ' . $contador . '<br>';
    $contador--;
} while( $contador >= 0 );

echo '<br>';

for ( $num = 0; $num <= 10; $num++ ) {
    echo 'Dato ' . $num . '<br  >';
    if ($num == 6) {
        echo 'Programa de datos interrumpido';break;
    }
}

echo '<br>';

function tabla9( $num9 = 9 ) {
    echo 'Tabla del 9 <br>';
    for($i = 1; $i <= 10; $i++) {
        echo $num9 . ' x ' . $i . '= ' . ($num9 * $i) . '<br>';
    }
}
tabla9();

echo '<br>';

function devuelve( $valor ) {
    $valor++;
    return 'El valor de la función + 1 es: ' . $valor;
}

echo devuelve( 85 );
