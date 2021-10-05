<?php

    $texto = 'Yaiza';
    $numero = 9;
    $numero2 = '3';
    $array = ['Yaiza', 'Alvaro', 'Iris'];
    $array_asoc = ['Nombre' => 'Yaiza', 'Edad' => 22];
    $booleano = false;

    /*echo '<pre>';
    var_dump($texto); // no necesito poner echo para que lo muestre en navegador
    echo '</pre>';*/

    echo '<pre>';
    print_r($array);
    echo '</pre>';
    // no muestra el tipo, esa es la diferencia con var_dump
    // print_r muestra solo el valor de la variable



?>