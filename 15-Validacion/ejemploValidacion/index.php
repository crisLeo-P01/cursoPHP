<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validación de Formulario con PHP</title>

  <style>
    :root {
      color-scheme: light dark;
    }
  </style>
</head>
<body>
  <h2>Formulario de Registro</h2>
  <form action="procesar_formulario.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">

    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

    <br><br>

    <label for="fecha">Fecha de Nacimiento:</label>
    <input type="date" id="fecha" name="fecha">

    <br><br>
    
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
