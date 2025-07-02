<?php
    // String
    $nombre = "Juan"; // Comillas dobles
    $apellido = 'Pérez'; // Comillas simples

    $infoPersona = "Mi nombre es $nombre $apellido."; // interpolación de variables

    echo $infoPersona . "<br>";

    // Integer
    $edad = 30;
    $altura = 1.75;

    $infoAltura = 'Tengo ' . $edad . ' años y mi altura es de ' . $altura . ' metros.'; // concatenación de cadenas

    echo $infoAltura . "<br>";

    // Float
    $decimal1 = 3.14;
    $decimal2 = -2.5;
    $decimal3 = 1.2e3;

    echo "Pi: $decimal1<br>";
    echo "Número negativo: $decimal2<br>";
    echo "Número en notación científica: $decimal3<br>";

    // Boolean
    $esEstudiante = true;
    $tieneTrabajo = false;

    echo "¿Es estudiante? " . ($esEstudiante ? 'Sí' : 'No') . "<br>";
    echo "¿Tiene trabajo? " . ($tieneTrabajo ? 'Sí' : 'No') . "<br>";

    // Array
    $colores = array("Rojo", "Verde", "Azul"); // Array indexado
    $frutas = ["Manzana", "Pera", "Naranja"]; // Array indexado (otra sintaxis)

    $persona = array(
        "nombre" => "Cristian",
        "edad" => 34,
        "altura" => 1.80,
    ); // Array asociativo 

    echo "Frutas: " . implode(", ", $frutas) . "<br>";
    echo "Primer color del array: " . $colores[0] . "<br>";
    echo "Nombre de la persona: " . $persona["nombre"] . "<br>";

    // Object (objeto)
    class Animal {
        public $nombre;
        public $especie;

        public function __construct($nombre, $especie) {
            $this->nombre = $nombre;
            $this->especie = $especie;
        }
    }

    $miPerro = new Animal("Rex", "Perro");
    echo "Mi mascota es un " . $miPerro->especie . " llamado " . $miPerro->nombre . ".<br>";

    $miTortuga = new Animal("Alberto", "Tortuga");
    echo "Mi mascota es una " . $miTortuga->especie . " llamada " . $miTortuga->nombre . ".<br>";

    // Null
    $variableNula = null;
    $otraVariableNula; // No se ha inicializado, por lo que también es null

    echo "Variable nula: " . ($variableNula === null ? 'Sí' : 'No') . "<br>";
?>