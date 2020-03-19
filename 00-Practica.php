<?php

function dameNombre() {
    static $contador = 0;
    $contador++;
    echo $contador;
}

dameNombre();
dameNombre();
dameNombre();
dameNombre();