<?php
echo "<h2>Arrays Multidimensionales</h2>";

$estudiantes = [
    [
        "nombre" => "cristian",
        "edad" => 39,
        "email" => "cristian@gmail.com",
        "materias" => ["matemáticas", "física", "química"]
    ],
    [
        "nombre" => "maría elena",
        "edad" => 37,
        "email" => "male@gmail.com",
        "materias" => ["biología", "literatura", "filosofía"]
    ],
    [
        "nombre" => "victoria",
        "edad" => 9,
        "email" => "vicky@gmail.com",
        "materias" => ["historia", "medicina", "historia"]
    ],
];

echo "<p>Lista de estudiantes</p>";
foreach ($estudiantes as $indice => $estudiante) {
    echo "Estudiante: " . ($indice + 1) . "<br>";
    echo "Nombre: {$estudiante['nombre']} <br>";
    echo "Edad: {$estudiante['edad']} <br>";
    echo "Materias: " . implode(", ", $estudiante['materias']) . "<br><br>";
}

// Para acceder a un elemento específico
echo "<p>La primera materia de {$estudiantes[0]['nombre']} es {$estudiantes[0]['materias'][0]}</p>"

?>