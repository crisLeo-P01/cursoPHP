<?php
    // Operadores aritméticos
    $a = 10;
    $b = 5;

    echo "<h2>Operadores Aritméticos</h2>";

    echo "Suma: $a + $b es = " . ($a + $b) . "<br>"; // Suma: 15
    echo "Resta: $a - $b es = " . ($a - $b) . "<br>"; // Resta: 5
    echo "Multiplicación: $a * $b es = " . ($a * $b) . "<br>"; // Multiplicación: 50
    echo "División: $a / $b es = " . ($a / $b) . "<br>"; // División: 2
    echo "Módulo: $a % $b es = " . ($a % $b) . "<br>"; // Módulo (resto de la división): 0
    echo "Exponente: $a ** $b es = " . ($a ** $b) . "<br>"; // Exponente (potencia): 100000

    // Operadores de asignación
    $c = 20;

    echo "<h2>Operadores de Asignación</h2>";

    $c += 5; // Equivalente a $c = $c + 5
    echo "Asignación con suma: c += 5 es = $c <br>"; // Asignación con suma: 25
    $c -= 3; // Equivalente a $c = $c - 3
    echo "Asignación con resta: c -= 3 es = $c <br>"; // Asignación con resta: 22
    $c *= 2; // Equivalente a $c = $c * 2
    echo "Asignación con multiplicación: c *= 2 es = $c <br>"; // Asignación con multiplicación: 44
    $c /= 4; // Equivalente a $c = $c / 4
    echo "Asignación con división: c /= 4 es = $c <br>"; // Asignación con división: 11
    $c %= 3; // Equivalente a $c = $c % 3
    echo "Asignación con módulo: c %= 3 es = $c <br>"; // Asignación con módulo: 2
    $c **= 3; // Equivalente a $c = $c ** 3
    echo "Asignación con exponente: c **= 3 es = $c <br>"; // Asignación con exponente: 8

    $frase = "Hola, buenos dias";
    $frase .= " mundo"; // Equivalente a $frase = $frase . " mundo"
    echo "Asignación con concatenación: frase .= ' mundo' es = $frase <br>"; // Asignación con concatenación: Hola, buenos dias mundo

    // Operadores de comparación
    $x = 10;
    $y = "20";
    $t = 10;

    echo "<h2>Operadores de Comparación</h2>";

    var_dump($x == $y); // Igual (valor): true
    var_dump($x === $y); // Identidad (igualdad de tipo): false
    var_dump($x != $y); // Desigualdad (valor): true
    var_dump($x !== $y); // No identidad (diferente tipo): true
    var_dump($x < $y); // Menor que: true
    var_dump($x > $y); // Mayor que: false
    var_dump($x <= $t); // Menor o igual que: true
    var_dump($x >= $t); // Mayor o igual que: true
    var_dump($x <= 5); // Menor o igual que: false

    // Operadores de incremento y decremento
    $x = 30;

    echo "<h2>Operadores de Incremento y Decremento</h2>";

    echo "valor inicial de x: $x <br>";
    $x++; // Incremento en 1
    echo "Incremento en 1: x++ es = $x <br>"; // Incremento en 1: 31
    $x--; // Decremento en 1
    echo "Decremento en 1: x-- es = $x <br>"; // Decremento en 1: 30
    ++$x; // Incremento en 1 (prefijo)
    echo "Incremento en 1 (prefijo): ++x es = $x <br>"; // Incremento en 1 (prefijo): 31
    --$x; // Decremento en 1 (prefijo)
    echo "Decremento en 1 (prefijo): --x es = $x <br>"; // Decremento en 1 (prefijo): 30

    // Operadores lógicos
    $esAdmin = true;
    $estaLogueado = false;

    echo "<h2>Operadores Lógicos</h2>";

    echo "esAdmin Y estaLogueado: ";
    var_dump($esAdmin && $estaLogueado); // AND lógico: false

    echo "<br>esAdmin O estaLogueado: ";
    var_dump($esAdmin || $estaLogueado); // OR lógico: true

    echo "<br>NO esAdmin: ";
    var_dump(!$esAdmin); // NOT lógico: false