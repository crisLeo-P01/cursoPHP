<?php

$gestor = opendir('./images');

if( $gestor ) { // $gestor == true
  while( $image = readdir($gestor) !== false ) {
    if( $image != '.' && $image != '..' ) {
      echo "<img src='images/$image' width=200px /><br>";
    }
  }
}