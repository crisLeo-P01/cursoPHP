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
  <!-- multipart/form-data: Permite enviar archivos desde el formulario al servidor -->
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre">

    <br>
    
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido">

    <br>

    <label for="tel">Teléfono:</label>
    <input type="tel" name="tel">

    <br>

    <label for="archivo">Archivo:</label>
    <input type="file" name="archivo">

    <br>

    <label for="email">Email:</label>
    <input type="email" name="email">

    <br>

    <label for="date">Fecha:</label>
    <input type="date" name="date">

    <br>

    <label for="color">Color:</label>
    <input type="color" name="color">

    <br>

    <label for="sexo">Color:</label>
    Hombre <input type="checkbox" name="sexo" value="Hombre">
    Mujer <input type="checkbox" name="sexo" value="Mujer">

    <br>

    <label for="color">Color:</label>
    <input type="color" name="color">

    <br>

    <label for="number">Número:</label>
    <input type="number" name="number">

    <br>

    <label for="continente">Continente</label>
    Asia <input type="radio" name="continente" value="Asia">
    América del Norte <input type="radio" name="continente" value="América del Norte">
    América del Sur <input type="radio" name="continente" value="América del Sur">

    <br>

    <label for="url">Introduce tu sitio web:</label>
    <input type="url" name="url">

    <br>
    <label for="comentario">Comentario</label>
    <textarea name="comentario" id="" cols="30" rows="10"></textarea>

    <br>

    <select name="peliculas" id="">
      <option value="Batman">Batman</option>
      <option value="Top Gun">Top Gun</option>
      <option value="El rey León">El rey León</option>
      <option value="Joker">Joker</option>
    </select>

    <br>
    
    <input type="submit" value="Enviar">
  </form>
</body>
</html>