<?php
//IF
$num3 = 7;

if($num3 < 10) {
  echo "El número $num3 es menor a 10";
} else {
  echo "El numero $num3 es mayor";
}

echo '<hr>';

$provincia = "mendoza";

if($provincia == "mendoza") {
  echo 'la provincia es mendoza';
} else {
  echo 'la provincia no es mendoza';
}

echo '<hr>';

$nombre = 'Cristian';
$edad = 34;
$ciudad = 'Los Angeles';
$continente = 'Norte América';

if($edad >= 18) {
  echo "$nombre es mayor de edad <br>";
  if($continente == 'Norte América') {
    echo "$nombre vive en $continente <br>";
  } else {
    echo 'Vive fuera de Norte América <br>';
  }
} else {
  echo "$nombre es menor de edad <br>";
}

//ELSEIF
$dia = 4;

if ($dia == 1) {
  echo 'Es Lunes';
} else if ($dia == 2) {
  echo 'Es Martes';
} else if ($dia == 3) {
  echo 'Es Miércoles';
} else if ($dia == 4) {
  echo 'Es Jueves';
} else if ($dia == 5) {
  echo 'Es Viernes';
} else {
  echo 'Es fin de semana';
}

echo '<hr>';

$edad1 = 18;
$edad2 = 64;
$edadOficial = 34;

if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {
  echo "Puede trabajar";
} elseif ($edadOficial < $edad1) {
  echo 'Es menor de edad';
} else {
  echo 'Es mayor';
}

echo '<hr>';

$pais1 = 'Alemania';

if ($pais1 =='Argentina' || $pais1 == 'Uruguay' || $pais1 == 'España') {
  echo "En este país llamado $pais1 se habla español";
}else {
  echo "En este país llamado $pais1, no se habla español";
}

echo '<hr>';