<?php

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['sexo']) && isset($_POST['continente']) && isset($_POST['comentario']) && isset($_POST['peliculas'])) {
    echo 'Nombre: ' . $_POST['nombre'] . '<br>';
    echo 'Apellido: ' . $_POST['apellido'] . '<br>';
    echo 'Telefono: ' . $_POST['tel'] . '<br>';
    echo 'Email: ' . $_POST['email'] . '<br>';

    $fecha = $_POST['date'];
    if (!empty($fecha)) {
        $fechaFormateada = date('d/m/Y', strtotime($fecha));
        echo 'Fecha de nacimiento: ' . $fechaFormateada . '<br>';
    }

    echo 'Sexo: ' . $_POST['sexo'] . '<br>';
    echo 'Continente: ' . $_POST['continente'] . '<br>';
    echo 'Película Favorita: ' . $_POST['peliculas'] . '<br>';
}
