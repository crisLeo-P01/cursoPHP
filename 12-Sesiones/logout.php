<?php

/* Lo que hace session_destroy es cerrar toda sesión global.
Si regresamos a la página principal se vuelve a crear
esa sesión y poder seguir navegando por las demás páginas. */
session_start();

session_destroy();