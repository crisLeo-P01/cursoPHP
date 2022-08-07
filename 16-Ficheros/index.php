<?php

// Abrir el archivo
$archivo = fopen('fichero_texto.txt', "a+");

/*
Permisos de archivo PHP
  r => Permiso de lectura
  x => Permiso de ejecucion
  w => Permiso de esctura
  a+ => Permiso de leer y escribir
*/

// Leer el archivo
while( !feof($archivo) ) {
  $contenido = fgets($archivo);
  echo $contenido . "<br>";
}

// Escribir un texto en el fichero_texto desde PHP
fwrite($archivo, "Soy un texto introducido desde PHP <br>");

// Cerrar archivo
fclose($archivo);