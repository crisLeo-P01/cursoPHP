<?php
$server = "localhost";
    $username = "crisleodev";
    $password = "1234";
    $database = "finanzas_personales";

    // Esta es la forma procedural
    // $mysqli = mysqli_connect(($server, $username, $password, $database); // El orden es primordial

    // Esta es la foma orientada a objetos
    $mysqli = new mysqli($server, $username, $password, $database); // El orden es primordial

    // Comprobar conexión de manera procedural
    // if(!$mysqli)
    //   die("Falló la conexión" . mysqli_connect_error());

    // Comprobar conexión de manera orientada a objetos
    if($mysqli->connect_errno)
      die("Falló la conexión {$mysqli->connect_error}");

    // Esto nos ayuda a poder usar cualquier caracter en nuestras consultas
    $setnames = $mysqli->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    $this->connection = $mysqli;