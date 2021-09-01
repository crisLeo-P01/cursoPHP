<?php

//VARIABLES SUPERGLOBALES
echo '<h1>';
echo $_SERVER['SERVER_ADDR']; //muestra la dirección IP desde el servidor remoto
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_NAME']; //muestra el nombre del servidor
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE']; //muestra el software con el que estoy trabajando
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT']; //muestra con el navegador que estoy usando
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR']; //muestra la IP del cliente