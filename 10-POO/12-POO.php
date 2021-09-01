<?php

class Coche {
  //PROPIEDADES
  var $ruedas;
  var $color;
  var $motor;

  function Coche() { //Método constructor - Se encargara de darle un estado inicial al objeto
    $this -> ruedas = 4;
    $this -> color = "";
    $this -> motor = 1600;
  }

  //MÉTODOS O FUNCIONALIDADES
  function arrancar() {
    echo "Estoy arrancando<br>";
  }
  function frenar() {
    echo "Estoy frenando<br>";
  }
  function girar() {
    echo "Estoy girando<br>";
  }

}

$ferrari = new Coche(); //Instancias o ejemplar
$lamborghini = new Coche();

$ferrari -> girar();
echo "El ferrari tiene " . $ferrari -> ruedas . " ruedas<br>";
