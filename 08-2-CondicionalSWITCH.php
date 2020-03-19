<?php

$dia = 7;

switch ($dia) {
    case 1: echo 'Es lunes'; break;
    case 2: echo  'Es martes'; break;
    case 3: echo  'Es miércoles'; break;
    case 4: echo 'Es jueves'; break;
    case 5: echo  'Es viernes'; break;
    default: echo 'Es fin de semana';
}

echo '<hr>';

goto marca;
echo '<h1>Esto es el titulo 1</h1>';
echo '<h1>Esto es el titulo 2</h1>';
echo '<h1>Esto es el titulo 3</h1>';
echo '<h1>Esto es el titulo 4</h1>';

marca:
echo '<h1>Este titulo salto a los 4 anteriores</h1>';

//A la hora de evaluar dos condiciones
$nombre = "Cristian";
$edad = 34;

switch (true) {
  case $nombre = "Cristian" && $edad = 34:
    echo "Usuario correcto. Puedes entrar";
    break;
  default:
    echo "Usuario incorrecto";
}