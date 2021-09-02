<?php
$num = 0;

for ($i = 0; $i <= 100; $i ++) {
    $num += $i; // Esto es igual a => $num = $num + $i;
}
    echo "El resultado es: $num <br>";

echo "El resultado es $num <br>";

for ($z = 0; $z <= 20; $z += 2) {
  echo "Bucle for $z<br>";
  if ($z == 6) {
    echo "Programa interrumpido <br>";
    break;
  }
}

if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

//Creando una tabla de multiplicar de 8
for($f = 0; $f <= 10; $f ++) {
  echo "El resultado es " . $numero * $f . "<br>";
}

echo "Tabla del 9, finalizada";