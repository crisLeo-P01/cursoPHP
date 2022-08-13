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
echo "<h1>Contenido de la carpeta</h1>";

if( $gestor = opendir( './mi_carpeta' ) ) { // abriendo el directorio
  while ( false !== ( $archivo = readdir( $gestor ) ) ) {
    if( $archivo != '.' && $archivo != '..' ) {
      echo $archivo . '<br>';
    }
  }
}