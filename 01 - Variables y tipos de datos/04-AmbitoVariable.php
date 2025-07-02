<?php
// Ámbito de una variable local
function miFuncion() {
    $variableLocal = "Soy una varaible local";
    echo $variableLocal . "<br>";
}

// Llamada a la función
miFuncion();

// Esto generaría un error, ya que $variableLocal no está definida fuera de la función
// echo $variableLocal;

// Ámbito de una variable global
$variableGlobal = "Soy una variable global";
function otraFuncion() {
    global $variableGlobal; // Necesario para acceder a la variable global
    echo $variableGlobal . "<br>";
}

otraFuncion();

// Variable estática
function funcionEstatica() {
    static $contador = 0; // La variable $contador se inicializa solo una vez
    $contador++;
    echo "Contador: $contador<br>";
}

// Llamadas a la función para ver el comportamiento de la variable estática
funcionEstatica(); // Contador: 1
funcionEstatica(); // Contador: 2
funcionEstatica(); // Contador: 3