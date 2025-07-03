<?php

    for($i = 1; $i <= 5; $i++) {
        echo "Número: $i <br>";
    }

    $numero = 10;
    for($i = 1; $i <= $numero; $i++) {
        if($i % 2 ==0) {
            echo "El número $i es par.<br>";
        } else {
            echo "El número $i es impar.<br>";
        }
    }