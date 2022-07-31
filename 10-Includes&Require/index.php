<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Includes de PHP</title>
</head>
<body>

  <!-- A diferencia del INCLUDE, REQUIRE si se genera un error en uno de los ficheros,
  va a detener todo el proceso de la página sin que se pueda visualizar nada.
  INCLUDE así tenga un problema de ejecución en ese fichero, el resto de la
  página se sigue ejecutando igual. 
  Es por eso que REQUIRE es mucho más estricto que INCLUDE a la hora de la ejecución -->

  <?php include 'inludes/header.php' ?>
  
  <section>
    <h2>Sección de página de INICIO</h2>
    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem consectetur <br> corrupti expedita quos fuga natus similique quasi autem harum beatae, libero voluptatibus <br> porro suscipit minima culpa vel itaque mollitia fugit.</P>
  </section>
  
  <?php include 'includes/footer.php' ?>
  
</body>
</html>