<?php

// arrays asociativas
$personas = array(
    'nombre' => 'Cristian',
    'apellido' => 'Paiva',
    'edad' => 36,
);

var_dump($personas);
var_dump($personas['apellido']);

// Otra forma de crear un array asociativo
$estudiante = [
    'nombre' => 'Francisco',
    'apellido' => 'Pérez',
    'edad' => 18,
];

echo "Estudiante: " . $estudiante['nombre'] . ' ' . $estudiante['apellido'] . ', Edad: ' . $estudiante['edad'] . '<br>';

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

function saludar($nombre)
{
    echo "Hola, mi nombre es $nombre";
}

saludar('Francisco');


var_dump($contactos);

// Para extraer un dato en concreto
echo '<br>';
echo 'Mi nombre es ' . $contactos[1]['nombre'] . ' y mi mail es ' . $contactos[1]['email'];

echo '<br>';
foreach ($contactos as $key => $contacto) {
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
for ($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . "{<br>";
    foreach ($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}
