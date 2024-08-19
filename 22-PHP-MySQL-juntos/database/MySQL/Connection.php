<?php

namespace Database\MySQL;

class Connection {
  private static $instance;

  private $connection;

  private function __construct() {
    $this->make_connection();
  }

  public static function getInstance() {
    // El self hace referencia a la clase. Reemplaza a Connection
    if(!self::$instance instanceof self)
      self::$instance = new self();

    return self::$instance;
  }

  public function get_database_instance() {
    return $this->connection;
  }  

  private function make_connection() {
    $server = "localhost";
    $username = "crisleodev";
    $password = "1234";
    $database = "finanzas_personales";

    $mysqli = new \mysqli($server, $username, $password, $database);

    if($mysqli->connect_errno)
      die("Falló la conexión {$mysqli->connect_error}");

    $setnames = $mysqli->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    $this->connection = $mysqli;
  }
}