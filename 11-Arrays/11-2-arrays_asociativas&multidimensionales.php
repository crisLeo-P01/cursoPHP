<?php

// arrays asociativas
/* Los arrays asociativos son arrays cuyos keys son strings 
con valores personalizados. Un array asociativo puede 
llevar también valores numéricos */
$personas = array(
  'nombre' => 'Cristian',
  'apellido' => 'Paiva',
  'edad' => 36,
);

var_dump( $personas );
var_dump( $personas[ 'apellido' ] );

// arrays multidimencionales
/* Los arreglos multidimensionales son muy poderosos porque permiten 
que aún mas información sea almacenada en una variable, 
convirtiendo en portables a inmensos conjuntos de datos, 
como veremos cuando comenzemos a trabajar con bases de datos. */
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
echo 'Mi nombre es ' . $contactos[1]['nombre'] . ' y mi mail es ' . $contactos[1]['email'];

echo '<br>';
foreach($contactos as $key => $contacto) {
  var_dump($contacto['nombre']);
};

///////////////////////////////////

// Multidimensional array
$superheroes = array(
  "spider-man" => array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
  ),
  "batman" => array(
    "name" => "Bruse Wayne",
    "email" => "brusewayne@mail.com",
  ),
  "iron-man" => array(
    "name" => "Harry Potter",
    "email" => "harrypotter@mail.com",
  )
);

/* array_keys Devuelve todas las claves de un array 
o un subconjunto de claves de un array */
$keys = array_keys($superheroes);
for($i = 0; $i < count($superheroes); $i++) {
  echo $keys[$i] . "{<br>";
  foreach($superheroes[$keys[$i]] as $key => $value) {
    echo $key . " : " . $value . "<br>";
  }
  echo "}<br>";
}