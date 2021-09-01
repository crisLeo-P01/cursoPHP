<?php
$num = 0;

for ($i = 0; $i <= 100; $i++) {
    $num += $i;
    echo "$num <br>";
}

echo "El resultado es $num <br>";

for ($z=0; $z<=20; $z+=2) {
  echo "Bucle for <br>";
  if ($z == 6) {
    echo "Programa interrumpido <br>";
    break;
  }
}

//Creando una tabla de multiplicar de 8
for($f=0; $f<=10; $f++) {
  echo "El resultado de 9 x $f es " . 9*$f . "<br>";
}

echo "Tabla del 9, finalizada";