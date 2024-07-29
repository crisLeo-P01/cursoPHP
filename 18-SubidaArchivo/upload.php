<?php

// $_FILES['archivo']['name']; // variable superglabal
// $_FILES['archivo']['tmp_name']; // carpeta temporal
// $_FILES['archivo']['type']; // tipo de archivo

if( $_FILES['images']['type'] == 'image/jpg' || $_FILES['images']['type'] == 'image/jpeg' || $_FILES['images']['type'] == 'image/png') {
  if( !file_exists('images') ) { // si el directorio no existe...
    if( !mkdir('images', 0777) ) { // me crea uno con todos los permisos (0777)
      echo 'Error al crear carperta';
      exit(); // detiene la ejecución del script
    }
  }

  chmod('images', 0777); // es para darle permisos de lectura y escritura a una carpeta o archivo

  move_uploaded_file($_FILES['images']['tmp_name'], 'images/'.$_FILES['images']['name']); // REFERENCIA 1
  header('Refresh: 5; URL=index.php');
  echo 'La imagen se subio correctamente';

} else {
  header('Refresh: 5; URL=index.php');
  echo 'El formato de imagen no es el correcto. Seleccione un formato permitido';
}

/* REFERENCIA 1 -> "move_uploaded_file" recibe dos parámetros. El primero es la imagen que se carga en el 
formulario con un nombre temporal. El segundo parámetro es la ruta en donde va a ir el archivo. */
