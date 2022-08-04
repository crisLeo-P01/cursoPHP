<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con PHP</title>
</head>
<body>
  <h3>Formulario</h3>
  <!-- multipart/form-data: Permite eivar archivos desde el formulario al servidor -->
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="name">Nombre:</label>
    <input type="text" name="nombre">

    <label for="name">Apellido:</label>
    <input type="text" name="apellido">
    
    <input type="submit" value="Enviar">
  </form>
</body>
</html>