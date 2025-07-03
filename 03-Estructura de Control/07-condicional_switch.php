<?php
$diaSemana = "Martes";

switch($diaSemana) {
    case "Lunes":
        echo "Hoy es lunes, inicio de semana.";
        break;
    case "Martes":
        echo "Hoy es martes, segundo día de la semana.";
        break;
    case "Miércoles":
        echo "Hoy es miércoles, mitad de semana.";
        break;
    case "Jueves":
        echo "Hoy es jueves, casi fin de semana.";
        break;
    case "Viernes":
        echo "Hoy es viernes, ¡el fin de semana está cerca!";   
        break;
    case "Sábado":
        echo "Hoy es sábado, día de descanso.";
        break;
    case "Domingo":
        echo "Hoy es domingo, último día de la semana.";
        break;
    default:
        echo "Día no válido, por favor ingrese un día de la semana.";
}