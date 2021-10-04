<?php

$mes = 'Junio';

    switch ($mes) {

        case 'Junio':
            echo 'Mi cumple';
            break;
        
        case 'Enero':
            echo 'Feliz Año Nuevo';
            break;

        default: 
            echo 'Otro mes';
            break;

    };

    if ($mes === 'Diciembre') {
        echo 'Feliz Navidad';        
    } else if ($mes === 'Enero') {
        echo 'Feliz Año Nuevo';
    } else {
        echo 'En este mes no se celebra nada.';
    };

?>