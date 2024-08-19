<?php

$server = "localhost";
$username = "crisleodev";
$password = "1234";
$database = "finanzas_personales";

$connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);

$setnames = $connection->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);