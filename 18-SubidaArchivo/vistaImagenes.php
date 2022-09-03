<?php

$dir = './images/';

if( is_dir( $dir ) ) {
  if( $gestor = opendir( $dir ) ) {
    while( ( $image = readdir( $gestor ) ) !== false ) {
      if( $image != '.' && $image != '..' ) {
        echo "<img src='images/$image' width=250px /><br>";
      }
    }
    closedir( $gestor );
  }
}