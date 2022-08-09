<?php
/* Session
Una sesión es un periodo de tiempo durante el cual,
el usuario ve un número de páginas determinado de su dominio
sin necesidad de identificarse cada vez que recarga la página,
es decir que la sesión se mantiene. Hay cierta información del
usuario están persistiendo durante la navegación.
La sesión debe soportar dos cosas: 
  - Detectar que durante la navegación por varias páginas la sesión
  permanece invariable hasta que el usuario cierre sesión o
  cierre el navegador. 
  - Debe almacenar información que formará parte de una sesión en concreto.

Por otro lado, las sesiones se guardan en el servidor web y esto hace que
las sesiones sean super seguras, porque no se esta guardando
nada en el lado del cliente ni en local. Quiere decir que es prácticamente
invisible o no puede ser modificado por el cliente. */

/*INICIAR SESIÓN*/
session_start();

/* Variable local */
$variable_normal = 'Soy una variable de texto';
  
/* Variable de sesión */
/* Este tipo de variable se va a poder utilizar en cualquier
página de mi dominio */
$_SESSION['variable_persistente'] = 'SOY UNA VARIABLE ACTIVA';

echo $variable_normal . '<br>';
echo $_SESSION['variable_persistente'];

