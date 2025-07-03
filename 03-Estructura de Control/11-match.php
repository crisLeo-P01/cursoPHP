<?php

$name = 'Cristian';
$isDev = true;
$age = 75;

$output = "Hola $name, con una edad de $age.";

$outputAge = match (true) {
    $age < 2 => "Eres un bebe, $name.👼",
    $age < 10 => "Eres un niño, $name.👦",
    $age < 18 => "Eres un adolecente, $name.🧑‍🦰",
    $age < 40 => "Eres un adulto joven, $name. 🍻",
    $age < 60 => "Eres un adulto viejo, $name. 👴",
    default => "Hueles mas a madera que a fruta, $name",
}

?>

<h1><?= $outputAge ?></h1>