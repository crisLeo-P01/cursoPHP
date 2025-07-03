<?php
    // Funciones variables
    echo "<h3>Funciones Variables</h3>";

    function decirHola() {
        return "¡Hola desde una función variable!<br>";
    }

    function decirAdios() {
        return "¡Adiós desde una función variable!<br>";
    }

    $funcion = 'decirHola'; // Asigna el nombre de la función a una variable
    echo $funcion(); // Llama a la función usando la variable

    $funcion = 'decirAdios'; // Cambia la variable a otra función
    echo $funcion(); // Llama a la nueva función usando la variable