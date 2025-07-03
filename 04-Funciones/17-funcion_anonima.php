<?php
    // Funciones anónimas (closures)
    echo "<h3>Funciones Anónimas</h3>";
    $operacion = function($m, $n) {
        return $m + $n; // Retorna la suma de los dos parámetros
    };

    echo "La suma de 10 y 20 es: " . $operacion(10, 20) . "<br>"; // Llama a la función anónima

    // función anónima con uso de variables externas
    $factor = 2;

    $multiplicador = function($numero) use ($factor) {
        return $numero * $factor; // Usa la variable externa $factor
    };

    echo "5 x 2 es: " . $multiplicador(5) . "<br>"; // Llama a la función anónima con uso de variable externa