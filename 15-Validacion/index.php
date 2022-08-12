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

  <?php include 'error.php' ?>

  <form action="formEvalua.php" method="POST">
    <label for="nombre">Nombre</label> <br>
    <input type="text" name="nombre" required="required"> <br>

    <label for="apellido">Apellido</label> <br>
    <input type="text" name="apellido"required="required"> <br>

    <label for="edad">Edad</label> <br>
    <input type="number" name="edad" required="required"> <br>

    <label for="email">Email</label> <br>
    <input type="text" name="email" required="required"> <br>

    <label for="pass">Contraseña</label> <br>
    <input type="password" name="pass" required="required" minlength="5"> <br>

    <input type="submit" value="Enviar">

  </form>

</body>
</html>