<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Operadores</title>
</head>
<body>
<h1>Operadores</h1>

<form method="POST" action="">
  <label for="num1"></label>
  <input type="text" name="num1" id="num1">

  <label for="num2"></label>
  <input type="text" name="num2" id="num2">

  <label for="selOperador"></label>
  <select name="selOperador" id="selOperador">
    <option>Suma</option>
    <option>Resta</option>
    <option>Multiplicación</option>
    <option>División</option>
    <option>Incremento</option>
    <option>Decremento</option>
  </select>

  <input type="submit" name="button" id="button" value="ENVIAR">
</form>

<?php

  if(isset($_POST["button"])) {
    $numero01 = $_POST["num1"];
    $numero02 = $_POST["num2"];
    $operacion = $_POST["selOperador"];

    calcular($operacion);

  }

  function calcular($calculo) {
    if(!strcmp("Suma", $calculo)) {
      global $numero01;
      global $numero02;
      echo "El resultado es: " . ($numero01 + $numero02);
    }elseif(!strcmp("Resta", $calculo)) {
      global $numero01;
      global $numero02;
      echo "El resultado es: " . ($numero01 - $numero02);
    }elseif (!strcmp("Multiplicación", $calculo)) {
      global $numero01;
      global $numero02;
      echo "El resultado es de " . ($numero01 * $numero02);
    }elseif (!strcmp("División", $calculo)) {
      global $numero01;
      global $numero02;
      echo "El resultado es de " . ($numero01 / $numero02);
    } elseif (!strcmp("Incremento", $calculo)) {
      global $numero01;
      $numero01++;
      echo "El resultado del incremento es de " . $numero01;
    }else {
      global $numero01;
      $numero01--;
      echo "El resultado del decremento es de " . $numero01;
    }
  }

?>

<?php
$num1 = 14;
$num2 = 8;

echo 'La suma entre número 1 y número 2 es ' . ($num1 + $num2) . '<br>';
echo 'La resta entre número 1 y número 2 es ' . ($num1 - $num2) . '<br>';
echo 'La multiplicación entre número 1 y número 2 es ' . ($num1 * $num2) . '<br>';
echo 'La división entre número 1 y número 2 es ' . ($num1 / $num2) . '<br>';
echo 'El resto entre número 1 y número 2 es ' . ($num1 % $num2) . '<br>';

//OPERADORES DE INCREMENTO
$year = 2020;
echo $year . '<br>';

//INCREMENTO
$year++;
echo $year . ' :INCREMENTO<br>';

//PRE-INCREMENTO
++$year;
echo $year . ' : PRE-INCRMENTO<br>';

//DECREMENTO
$year--;
echo $year . ' : DECREMENTO<br>';

//PRE-DECREMENTO
--$year;
echo $year . ' : PRE-DECREMENTO<br>';

//OPERADORES DE ASIGNACIÓN
$edad = 34;
$edad += 4; //lo mismo sería con las demás operaciones

echo "La edad que tendré dentro de 4 años será de $edad años <br>";
?>

</body>
</html>



