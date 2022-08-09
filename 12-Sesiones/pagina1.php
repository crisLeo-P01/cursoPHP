<?php

session_start();
/* Para replicar la variable de sesión siempre ha que iniciar
sesión con session_start() */

/* La variable normal no va a funcionar fuera de la página principal */
echo $variable_normal;
echo $_SESSION['variable_persistente'];