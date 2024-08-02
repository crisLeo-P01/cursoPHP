<?php

$dir = './images/';

if (is_dir($dir)) {
  $images = scandir($dir); // scandir lee todos los archivos y directorios dentro de $dir y devuelve un array de nombres.

  // iteración y fitrado
  foreach ($images as $image) {
    // Recorremos cada archivo en el directorio, excluyendo . y .., y generamos una etiqueta <img> para cada imagen
    if ($image != '.' && $image != '..') {
      echo "<img src='images/$image' width='250px' /><br>";
    }
  }
}

// if( is_dir( $dir ) ) {
//   if( $gestor = opendir( $dir ) ) {
//     while( ( $image = readdir( $gestor ) ) !== false ) {
//       if( $image != '.' && $image != '..' ) {
//         echo "<img src='images/$image' width=250px /><br>";
//       }
//     }
//     closedir( $gestor );
//   }
// }