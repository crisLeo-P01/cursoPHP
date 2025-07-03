<?php
    // Funciones predefinidas
    echo "<h3>Funciones Predefinidas</h3>";

    echo "La fecha y hora actual es: " . date("Y-m-d H:i:s") . "<br>"; // Muestra la fecha y hora actual
    echo "El número pi es: " . pi() . "<br>"; // Muestra el valor de pi
    echo "El número aleatorio entre 1 y 100 es: " . rand(1, 100) . "<br>"; // Muestra un número aleatorio entre 1 y 100

    $texto = "Hola, PHP es genial!";
    echo "El texto en mayúsculas es: " . strtoupper($texto) . "<br>"; // Convierte el texto a mayúsculas
    echo "El texto en minúsculas es: " . strtolower($texto) . "<br>"; // Convierte el texto a minúsculas
    echo "La longitud del texto es: " . strlen($texto) . "<br>"; // Muestra la longitud del texto

    $frase = "  PHP es un lenguaje de programación.  ";
    echo "La frase sin espacios al inicio y al final es: '" . trim($frase) . "'<br>"; // Elimina espacios al inicio y al final

    echo "Fecha y hora formateada: " . date("d/m/Y H:i:s") . "<br>"; // Muestra la fecha y hora en formato personalizado
    echo "Timestamp actual: " . time() . "<br>"; // Muestra el timestamp actual