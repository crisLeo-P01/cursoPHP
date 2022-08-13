<?php

$archivo = $_FILES['archivo']; // variable superglabal

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if( $tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/git' ) {
  if( !is_dir('images') ) { // si el directorio no existe...
    mkdir('images', 0777); // me crea uno con todos los permisos (0777)
  }

  move_uploaded_file($archivo['tmp_name'], "images/".$nombre); // Mueve un archivo subido a una nueva ubicación
  header('Refresh: 5; URL=index.php');
  echo 'El archivo fue subido exitosamente';

} else {
  header('Refresh: 5; URL=index.php');
  echo 'El formato de imagen no es el correcto. Seleccione un formato permitido';
}

?>