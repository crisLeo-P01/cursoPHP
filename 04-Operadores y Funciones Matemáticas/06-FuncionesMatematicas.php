<?php
echo "<h1>Funciones Matemáticas</h1>";
echo "Visitar página sobre referencias: <a href='https://www.php.net/manual/es/ref.math.php' target='_blank'>Funciones Matemáticas</a><br>";

//Número aleatorio
$num1 = rand();
echo "El número aleatorio es el " . $num1 . "<br>";

//Número aleatorio con rangos de mínimo y máximo
$num2 = rand(0,10);
echo "El número elegido entre 0 y 10 es el " . $num2 . "<br>";

//abs - Devuelve el valor absoluto de un número
$num3 = abs(-4.2);
echo "El número absoluto de -4.2 es " . $num3 . "<br>";

//ceil - Devuelve el siguiente valor entero mayor redondeando hacia arriba value si fuera necesario.
$num4 = ceil(2.3);
echo "El número con ceil(2.3) es de " . $num4 . "<br>";

//floor - Devuelve el siguiente valor de tipo integer (como float), redondeando value si fuera necesario.
$num5 = floor(2.9);
echo "El número con floor(2.8) es de " . $num5 . "<br>";

//pow - Devuelve el valor de base elevado a la potencia exp.
$num6 = pow(8, 2);
echo "El número 8 elevado a la 2 es " . $num6 . "<br>";

//round - Devuelve el valor redondeado de val con la precision especificada (número de dígitos desde el punto decimal). precision puede también ser negativo o cero (valor predeterminado).
$num7 = round(5.75);
echo "El número redondeado de 5.75 es " . $num7 . "<br>";
$num8 = round(8.326578, 2);
echo "El número redondeado de 8.326578 con dos decimales es de " . $num8 . "<br>";

echo "<h3>Casting</h3>";
/*
 * PHP no requiere (ni soporta) la definición explicita de tipos en la declaración de variables; el tipo de la variable se determina por el contexto en el cual se emplea la variable. Es decir, si se asigna un valor string a una variable $var, entonces $var se convierte en un string. Si un valor integer es entonces asignado a la misma variable $var, ésta se convierte en integer.

Un ejemplo de la conversión de tipos automática de PHP es el operador suma '+'. Si al menos uno de los operandos es float, entonces ambos operandos son evaluados como floats y el resultado será un float. De otra manera, los operandos serán interpretados como integers, y el resultado será entonces integer. Tenga en cuenta que esto no implica que se cambien los tipos de los propios operandos; el único cambio es en como se evalúan los operandos y en el tipo de expresión en sí mismo.
 */
$number01 = "5";
$number01 += 2; //El $number01 es un string pero al colocarle un incremento PHP, interpreta que es de tipo entero.
$number01 += 5.75; //PHP ahora interpreta que es de tipo float. Implícitamente interpreta que es una variable de tipo float
echo $number01 . "<br>";

//Casting explícito
$number02 = "14";
$resultado = (int)$number02;
echo $number02;



