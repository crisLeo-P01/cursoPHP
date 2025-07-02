<?php

define("NOMBRE", "Cristian"); // forma clásica de definir una constante
define("EDAD", 34);

const APELLIDO = 'Beckham'; // forma moderna de definir una constante
const PAIS = 'Argentina';

echo "El nombre es: " . NOMBRE . "<br>"; // Al imprimir la variable se hace sin el signo dólar ($)
echo "Tiene una edad de " . EDAD . '<br>';
echo "El apellido es: " . APELLIDO . "<br>";
echo "El país es: " . PAIS . "<br>";

// CONSTANTES PREDEFINIDAS
echo PHP_OS . "<br>"; // Muestra el sistema operativo nuestro
echo PHP_VERSION . "<br>"; // Muestra la versión que tenemos instalada de PHP en un nuestra pc
echo __LINE__ . "<br>"; // Nos muestra en la línea en el que está este echo
echo __FILE__ . "<br>"; // Nos muestra la ruta del archivo en la que se encuentra


