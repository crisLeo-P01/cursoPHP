<?php

// arrays asociativas
$personas = array(
  'nombre'=> 'Cristian',
  'apellido' => 'Paiva',
  'edad' => 36,
);

var_dump( $personas );
var_dump( $personas[ 'apellido' ] );

// arrays multidimencionales
$contactos = array(
  array(
    'nombre' => 'Male',
    'email' => 'male@gmail.com',
  ),
  array(
    'nombre' => 'Emiliano',
    'email' => 'emiliano@gmail.com',
  ),
  array(
    'nombre' => 'Cristian',
    'email' => 'cristian@gmail.com',
  ),
);

var_dump($contactos);

// Para extraer un dato en concreto
echo '<br>';
echo $contactos[1]['nombre'];

echo '<br>';
foreach($contactos as $key => $contacto) {
  var_dump($contacto['nombre']);
}