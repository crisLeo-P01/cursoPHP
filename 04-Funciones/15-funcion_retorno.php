<?php
    // Función con retorno de valor
    echo "<h3>Funciones con retorno de valor</h3>";

    function multiplicar($a, $b) {
        return $a * $b; // Retorna el resultado de la multiplicación
    }

    $resultado = multiplicar(5, 6); // Llamada a la función y captura del retorno
    echo "El resultado de multiplicar 5 y 6 es: $resultado<br>";

    function areaDelCirculo($radio) {
        $pi = 3.14159; // Valor aproximado de pi
        return $pi * ($radio ** 2); // Retorna el área del círculo
    }

    $area = areaDelCirculo(3); // Llamada a la función con un argumento
    echo "El área de un círculo con radio 3 es: $area<br>";