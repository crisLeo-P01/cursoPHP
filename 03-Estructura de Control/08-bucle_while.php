<?php
    // Bucle while
    $contador = 1;
    while($contador <= 5) {
        echo "Contador: $contador <br>";
        $contador++; // Incrementa el contador en 1
    }

    // Bucle do-while
    $contador2 = 6;
    do {
        echo "Contador 2 es: " . $contador2 . "<br>";
        $contador2++; // Incrementa el contador en 1
    } while($contador2 <= 10);
