<?php

$edad = 20;
$tieneIdentificacion = true;

if($edad >= 18 && $tieneIdentificacion) {
    echo "Puede entrar al club.";
} elseif($edad >= 18 && !$tieneIdentificacion) {
    echo "No puede entrar al club, necesita identificación.";
} else {
    echo "No puede entrar al club, debe ser mayor de edad.";
}