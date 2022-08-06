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

  <h1>Validación de formulario con PHP</h1>

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
    }
  ?>

  <form action="procesar_formulario.php" method="POST">
    <label for="nombre">Nombre</label> <br>
    <input type="text" name="nombre"> <br>

    <label for="apellido">Apellido</label> <br>
    <input type="text" name="apellido"> <br>

    <label for="edad">Edad</label> <br>
    <input type="number" name="edad"> <br>

    <label for="email">Email</label> <br>
    <input type="text" name="email"> <br>

    <label for="pass">Contraseña</label> <br>
    <input type="password" name="pass"> <br>

    <input type="submit" value="Enviar">

  </form>

</body>
</html>