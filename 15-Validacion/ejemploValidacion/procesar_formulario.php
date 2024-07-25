<?php
$nombreErr = $emailErr = $fechaErr = "";
$nombre = $email = $fecha = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombreErr = "El nombre es requerido";
  } else {
    $nombre = test_input($_POST["nombre"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $nombre)) {
      $nombreErr = "Solo se permiten letras y espacios en blanco";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "El email es requerido";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email inválido";
    }
  }

  if (empty($_POST["fecha"])) {
    $fechaErr = "La fecha de nacimiento es requerida";
  } else {
    $fecha = test_input($_POST["fecha"]);
    // Opcional: Validar formato de fecha
    $fechaFormateada = date("d/m/Y", strtotime($fecha));
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado de Validación</title>

  <style>
    :root {
      color-scheme: light dark;
    }
  </style>
</head>

<body>
  
  <h2 class="titulo-principal" style="color: blueviolet;">Resultado de Validación</h2>
  <?php
  if (!empty($nombreErr)) {
    echo "<p>Error en el nombre: $nombreErr</p>";
  }
  if (!empty($emailErr)) {
    echo "<p>Error en el email: $emailErr</p>";
  }
  if (!empty($fechaErr)) {
    echo "<p>Error en la fecha de nacimiento: $fechaErr</p>";
  }
  if (empty($nombreErr) && empty($emailErr) && empty($fechaErr)) {
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Fecha de Nacimiento: $fechaFormateada</p>";
  }
  ?>

</body>

</html>