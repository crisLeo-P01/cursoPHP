<?php

// Crear un directorio
if( !is_dir( 'mi_carpeta' ) ) { // is_dir => comprueba si existe la carpeta
  mkdir('mi_carpeta', 0777) or die('La carpeta no pudo ser creada');
  echo "La carpeta fue creada con éxito <br>";
} else {
  echo "La carpeta ya existe <br>";
}

// Borrar un directorio
// rmdir('mi_carpeta');

echo "<hr><h3>Contenido de la carpeta</h3>";

if( $gestor = opendir( './mi_carpeta' ) ) { // abriendo el directorio
  while ( ( $archivo = readdir( $gestor ) ) !== false  ) { // Referencia 1
    if( $archivo != '.' && $archivo != '..' ) { // Referencia 2
      echo $archivo . '<br>';
    }
  }
}

// Referencia 1 ------
/* Mientras no de false, mostrame todos los archivos que estan 
dentro de la carpeta */

// // Referencia 2 ------
/* ." (un punto) es la referencia hacia tu carpeta actual y ".." (
 dos puntos) es la referencia hacia un nivel arriba de la carpeta actual, 
 por eso el if valida que no sea "." ni ".." */
