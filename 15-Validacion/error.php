<?php
  if( !empty( $_GET['error'] ) ) {
    $error = $_GET['error'];
    if($error === 'faltan_datos') {
      echo '<strong style="color: red;">Introduce todos los datos en los campos requeridos</strong>';
    }

    if($error === 'nombre') {
      echo '<strong style="color: red;">Introduce un nombre válido</strong>';
    }

    if($error === 'apellido') {
      echo '<strong style="color: red;">Introduce un apellido válido</strong>';
    }

    if($error === 'edad') {
      echo '<strong style="color: red;">Introduce una edad válida</strong>';
    }

    if($error === 'email') {
      echo '<strong style="color: red;">Introduce un email válido</strong>';
    }

    if($error === 'pass') {
      echo '<strong style="color: red;">Introduce un password de mas de 5 caracteres</strong>';
    }
  }

?>
