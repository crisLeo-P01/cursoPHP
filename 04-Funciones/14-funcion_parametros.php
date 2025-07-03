<?php
    // Definición de una función con parámetros
    echo "<h3>Función con un parámetro</h3>";

    function saludarUsuario($nombre) {
        echo "Hola, $nombre. ¡Bienvenido!<br>";
    };

    // Llamada a la función con un argumento
    saludarUsuario("Juan");
    saludarUsuario("María");

    // Función con dos parámetros
    echo "<h3>Funciones con dos parámetros</h3>";
    function sumar($a, $b) {
        $resultado = $a + $b;
        echo "La suma de $a y $b es: $resultado<br>";
    }

    sumar(8, 4); // Llamada a la función con dos argumentos
    sumar(78, 12);

    // Función con parametros con valores por defecto
    echo "<h3>Funciones con parámetros por defecto</h3>";

    function presentar($nombre = "Invitado", $edad = 18) {
        echo "Hola, $nombre. Tienes $edad años.<br>";
    }

    presentar(); // Llamada sin argumentos, usa valores por defecto
    presentar("Ana"); // Llamada con un argumento, usa valor por defecto para edad
    presentar("Luis", 25); // Llamada con ambos argumentos