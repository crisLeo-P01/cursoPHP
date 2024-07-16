<?php

define("NOMBRE", "Cristian"); // definición de una constante
define("EDAD", 34);

// Las constantes como cualquier otro tipo de programación, no cambian

echo "El nombre es: " . NOMBRE . "<br>"; // Al imprimir la variable si hace sin el signo dólar ($)
echo "Tiene una edad de " . EDAD . '<br>';

$nombre = 'Emiliano';
echo "Es una variable que se llama igual que la constante pero es declarada después del echo de la constante 
       (nombre). Variable con el mismo nombre que la constante => $nombre <br>";

// CONSTANTES PREDEFINIDAS
echo PHP_OS . "<br>"; // Muestra el sistema operativo nuestro
echo PHP_VERSION . "<br>"; // Muestra la versión que tenemos instalada de PHP en un nuestra pc
echo __LINE__ . "<br>"; // Nos muestra en la línea en el que está este echo
echo __FILE__ . "<br>"; // Nos muestra la ruta del archivo en la que se encuentra


