<?php
/* Para mostrar el valor de las cookies, se debe usar
la variable $_COOKIE, de la cual es una variable super global
y además es un array asociativo
*/

if( isset( $_COOKIE['micookie'] ) ) {
  echo "<h3>" . $_COOKIE['micookie'] . "</h3>";
} else {
  echo 'No existe ninguna cookie';
}

if( isset( $_COOKIE['unyear'] ) ) {
  echo "<h3>" . $_COOKIE['unyear'] . "</h3>";
} else {
  echo 'No existe ninguna cookie';
}

?>

<a href="crear_cookies.php">Crear mis cookies</a>
<a href="borrar_cookies.php">Borrar mis cookies</a>