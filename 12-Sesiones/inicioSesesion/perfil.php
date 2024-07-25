<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
  session_destroy();
  header('Location: login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Perfil</title>

  <style>
    :root {
      color-scheme: light dark;
    }
  </style>
</head>

<body>
  <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
  <form method="post" action="perfil.php">
    <button type="submit" name="logout">Cerrar Sesión</button>
  </form>
</body>

</html>