<?php

    // Función paso por referencia
    echo "<h3>Funciones con paso por referencia</h3>";
    
    // Paso por valor
    function incrementarValor($numero) {
        $numero++; // Solo modifica la copia local
    }

    // Paso por referencia
    function functionIncrementarReferencia(&$numero) {
        $numero++; // Modifica el valor original
    }

    $valor = 10;
    incrementarValor($valor); // Llama a la función con paso por valor
    echo "Después de incrementar por valor, el valor es: $valor<br>"; // Imprime 10

    functionIncrementarReferencia($valor); // Llama a la función con paso por referencia
    echo "Después de incrementar por referencia, el valor es: $valor<br>"; // Imprime 11