<?php

  $error = 'faltan_datos';

  if( !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass']) ) {

    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if( !is_string($nombre) || preg_match('/[0-9]+/', $nombre) ) {
      $error = 'nombre';
    }

    if( !is_string($apellido) || preg_match('/[0-9]+/', $apellido) ) {
      $error = 'apellido';
    }

    if( !is_int($edad) || !filter_var( $edad, FILTER_VALIDATE_INT ) ) {
      $error = 'edad';
    }

    if( !is_string($email) || !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
      $error = 'email';
    }

    if( empty($pass) || strlen($pass)<5 ) {
      $error = 'pass';
    }
  } else {
    $error = 'faltan_datos';
  }

  if( $error != 'ok' ) {
    header("Location:index.php?error=$error");
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formulario con PHP</title>
    <style>
      input {
        margin-bottom: 15px;
      }
    </style>
  </head>
  <body>
      
    <?php if($error == 'ok') ?>
    <h1>Datos validados correctamente</h1>
    <p><?= $nombre ?></p>
    <p><?= $apellido ?></p>
    <p><?= $edad ?></p>
    <p><?= $email ?></p>

  </body>
</html>