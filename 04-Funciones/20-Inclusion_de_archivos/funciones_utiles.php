<?php

function saludar($nombre) {
    return "Hola, $nombre! Bienvenido a" . NOMBRE_SITIO;
}

function calcular_area_rectangulo($largo, $ancho) {
    return $largo * $ancho;
}

function formatear_fecha($fecha) {
    return date('d/m/Y H:i:s', strtotime($fecha));
}

function validar_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

echo "<p style='color: blue;'>Archivo funciones_utiles.php cargado correctamente.</p>"

?>
