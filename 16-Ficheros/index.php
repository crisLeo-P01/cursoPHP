<?php

// Abrir el archivo
$archivo = fopen('fichero_texto.txt', "a+");

/*
Permisos de archivo PHP
  r  => Permiso de lectura
  x  => Permiso de ejecucion
  w  => Permiso de escritura
  w+ => Permiso de escritura y lectura
  a  => Permiso de leer
  a+ => Permiso de leer y escribir
*/

// Leer el archivo
while( !feof($archivo) ) { // feof => Recorre todas las líneas del archivo
  $contenido = fgets($archivo);
  echo $contenido . "<br>";
}

// Escribir un texto en el fichero_texto desde PHP
fwrite($archivo, "<br>Soy un texto introducido desde PHP <br>");

// Copiar un archivo
copy('fichero_texto.txt', 'fichero_copiado.txt') or die('Error al copiar');

// Cerrar archivo
fclose($archivo);

// Renombrar un archivo
rename('fichero_texto.txt', 'texto_fichero.txt');

// Eliminar un archivo
// unlink('fichero_copiado.txt') or die('Error al eliminar el archivo');
if(file_exists('fichero_texto')) {
  unlink(('fichero_texto'));
} else {
  echo 'El archivo no existe';
};

// Comprueba si existe un archivo
if( file_exists('fichero_texto.txt') ) {
  echo 'El archivo existe';
} else {
  echo 'El archivo no existe';
}