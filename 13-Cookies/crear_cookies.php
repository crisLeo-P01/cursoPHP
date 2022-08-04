<?php

/* Es un fichero que se almacena en el ordenador del usurio que visita la web con el 
fin de recordar datos o rastrear cierto comportamiento en la web */

/* Ruta y dominio prácticamente no se suele utilizar */
// setcookie('nombre', 'valor de la cookie que solo puede ser texto', caducidad, ruta, dominio);

// Cookie básica
setcookie( 'micookie', 'valor de mi galleta' );

// Cookie con expiración
setcookie( 'unyear', 'valor de mi cookie por 365 días', time()+( 60*60*24*365 ) );

header('Location:ver_cookies.php');

?>

<a href="ver_cookies.php">Ver cookies</a>
