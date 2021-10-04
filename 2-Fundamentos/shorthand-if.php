<?php

    // SHORTHAND IF -- CONDICIÓN TERNARIA

    //isset nos permite saber si una variable tiene un valor o no

    $edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad';

    // Lo de antes equivale a: 

    /* 
    
    if (isset($edad)) {
        $edad = $edad;
    } else {
        $edad = 'El usuario no estableció su edad';
    };

    */

    echo 'Edad: '.$edad;

?>