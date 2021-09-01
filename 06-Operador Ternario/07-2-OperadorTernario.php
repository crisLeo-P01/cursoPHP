<?php
$edad = 18;

($edad >= 18) ? print "Eres mayor de edad <br>" : print "Eres menor de edad <br>"; //Con echo da error.

echo $edad >= 18 ? "Eres mayor de edad <br>" : "Eres menor de edad <br>";

//otra forma de presentar el operador ternario
$resultado = $edad >= 18 ? "Eres mayor de edad <br>" : "Eres menor de edad <br>";
echo $resultado;