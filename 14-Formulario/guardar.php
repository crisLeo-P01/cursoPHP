<?php

if( isset( $_POST['titulo'] )  && isset( $_POST['descripcion'] ) ) {
  echo '<h3>' . $_POST['titulo'] . '</h3>';
  echo '<h4>' . $_POST['descripcion'] . '</h4>';
}