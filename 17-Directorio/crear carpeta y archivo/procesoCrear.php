<?php

// Verificar si la carpeta miCarpeta existe, si no, crearla
if (is_dir('miCarpeta')) {
  echo 'La carpeta ya existe<br>';
} else {
  mkdir('miCarpeta', 0777);
  echo 'La carpeta ha sido creada<br>';
}

$archivoGoku = './miCarpeta/goku.txt';

// Abrir o crear el archivo dentro de miCarpeta
if (!file_exists($archivoGoku)) {
  $archivo = fopen($archivoGoku, 'w');
  echo 'El archivo ha sido creado<br>';
} else {
  // Abre el archivo en modo de añadir para no sobrescribir el contenido existente
  $archivo = fopen($archivoGoku, 'a');
  echo 'El archivo ya existe, abriendo para añadir contenido<br>';
}

// Verificar si el archivo se abrió correctamente
if ($archivo) {
  // Escribir en el archivo
  fwrite($archivo, "Soy Goku, y soy el más fuerte del planeta\n");
  echo 'El contenido ha sido escrito en el archivo<br>';

  // Cerrar el archivo
  fclose($archivo);
} else {
  echo 'No se pudo abrir o crear el archivo<br>';
}