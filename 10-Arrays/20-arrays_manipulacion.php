<?php

    $peliculas = array('Batman', 'Deadpool', 'Ironman');

    // otra forma de representar los array
    $bandas = ['Aerosmith', 'Bon Jovi', 'Korn', 'Limp Bizkit'];

    $numeros = [1, 2, 3, 4, 5];

    // Acceder a un elemento del array
    echo "<h2>Acceso a elementos de un array</h2>";

    echo "Primera película: " . $peliculas[0] . "<br>"; // Batman
    echo "Segunda banda: " . $bandas[1] . "<br>"; // Bon Jovi
    echo "Tercer número: " . $numeros[2] . "<br>"; // 3

    // Modificar un elemento del array
    echo "<h2>Modificación de elementos de un array</h2>";
    $peliculas[1] = 'Spider';
    echo "Películas después de la modificación: " . implode(', ', $peliculas) . "<br>"; // Batman, Spider, Ironman

    // Agregar un elemento al array
    echo "<h2>Agregar elementos a un array</h2>";
    $peliculas[] = 'Superman'; // Agrega al final
    echo "Películas después de agregar Superman: " . implode(', ', $peliculas) . "<br>"; // Batman, Spider, Ironman, Superman

    $bandas[10] = 'Metallica'; // Agrega en la posición 10
    echo "Bandas después de agregar Metallica: " . implode(', ', $bandas) . "<br>"; // Aerosmith, Bon Jovi, Korn, Limp Bizkit, , , , , , , Metallica
