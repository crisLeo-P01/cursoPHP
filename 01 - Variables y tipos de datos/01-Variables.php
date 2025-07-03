<?php
    // Declaración básica de variables
    $nombre = "Juan"; 
    $edad = 25;
    $altura = 1.75;
    $esEstudiante = true;

    // Imprimir variables
    echo "Nombre: $nombre<br>";
    echo "Edad: $edad años<br>";
    echo "Altura: $altura metros<br>";
    echo "¿Es estudiante? " . ($esEstudiante ? 'Sí' : 'No') . "<br>";

    //Funciones utiles para las variables
    $variable = "Hola, soy una variable";
    echo "Tipo: " . gettype($variable) . "<br>"; // Muestra el tipo de dato de la variable

    // Verifica si existe una variable
    echo "Existela variable? " . (isset($variable) ? 'Si' : 'No') . "<br>";
?>

