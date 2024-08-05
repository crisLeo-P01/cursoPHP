<?php

class Coche {
  // Propiedades
  public $ruedas;
  public $color;
  public $motor;

  // Constructor que acepta parámetros
  public function __construct ($color = "", $motor = 1600) {
    $this->ruedas = 4;
    $this->color = $color;
    $this->motor = $motor;
  }

  // Métodos o funcionalidades
  public function arrancar () {
    echo "Estoy arrancando<br>";
  }

  public function frenar () {
    echo "Estoy frenando<br>";
  }

  public function girar () {
    echo "Estoy girando<br>";
  }
}

// Instancias o ejemplares
$ferrari = new Coche ("rojo", 3000);
$lamborghini = new Coche ("amarillo", 3500);

$ferrari -> girar ();
echo "El Ferrari es de color " . $ferrari -> color . " y tiene un motor de " . $ferrari -> motor . " cc y " . $ferrari -> ruedas . " ruedas<br>";

$lamborghini -> arrancar ();
echo "El Lamborghini es de color " . $lamborghini -> color . " y tiene un motor de " . $lamborghini -> motor . " cc y " . $lamborghini -> ruedas . " ruedas<br>";
