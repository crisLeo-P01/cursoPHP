<?php
    $frutas = ["Manzana", "Banana", "Naranja", "Fresa", "Kiwi"];

    foreach($frutas as $fruta) {
        echo "Fruta: $fruta <br>";
    };

    $nombres = ["Juan", "María", "Pedro", "Ana"];

    foreach($nombres as $nombre) {
        if($nombre == "Pedro") {
            echo "Encontré a Pedro, saliendo del bucle.<br>";
            break; // Sale del bucle al encontrar "Pedro"
        }
        echo "Nombre: $nombre <br>";
    }

    $numeros = [1, 2, 3, 4, 5];
    foreach($numeros as $numero) {
        if($numero % 2 != 0) {
            continue; // Salta a la siguiente iteración si el número es par
        }
        echo "$numero es un número par.<br>";
    }