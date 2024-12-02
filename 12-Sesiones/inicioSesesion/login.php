<?php
session_start();

// Simulación de un usuario y contraseña almacenados
$usuario_valido = 'usuario123';
$contrasena_valida = 'contrasena123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    // Verificar si las credenciales son correctas
    if ($usuario == $usuario_valido && $contrasena == $contrasena_valida) {
        $_SESSION['username'] = $usuario;
        header('Location: perfil.php');
        exit();
    } else {
        $error = "Nombre de usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>

    <style>
        :root {
            color-scheme: light dark;
        }
    </style>
</head>

<body>
    <h1>Iniciar Sesión</h1>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post" action="login.php">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>

</html>