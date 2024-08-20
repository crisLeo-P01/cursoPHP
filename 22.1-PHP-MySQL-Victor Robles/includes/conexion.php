<?php

$servidor = 'localhost';
$usuario = 'crisleodev';
$password = '1234';
$basededatos = 'blog_master';

$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");