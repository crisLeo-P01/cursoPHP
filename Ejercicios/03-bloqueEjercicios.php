<?php

/*
  Ejercicio 1
  Crear una sesión que aumente su valor en uno o disminuya en 1
  en función de si el parámetro get counter está en 1 o en 0
*/

session_start();

if( !isset($_SESSION['numero']) ) {
  $_SESSION['numero'] = 0;
}

if( isset($_GET['counter']) && $_GET['counter'] == 1 ) {
  $_SESSION['numero']++;
}
if( isset($_GET['counter']) && $_GET['counter'] == 0 ) {
  $_SESSION['numero']--;
}

?>

<h3>El valor de la sesión es el número: <?=$_SESSION['numero']?></h3>

<a href="03-bloqueEjercicios.php?counter=1">Aumentar el valor en 1</a><br>
<a href="03-bloqueEjercicios.php?counter=0'">Disminuir el valor en 1</a>

<?php

/*
  Ejercicio 2
  Crear una sesión que aumente su valor en uno o disminuya en 1
  en función de si el parámetro get counter está en 1 o en 0
*/


?>