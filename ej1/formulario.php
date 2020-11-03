<?php

    $numero = $_POST["numero"];
    $resto = $numero % 2;
    if ($resto == 0){
        echo "el numero $numero es par";
    }
    else {
        echo "el numero $numero es impar";
    }