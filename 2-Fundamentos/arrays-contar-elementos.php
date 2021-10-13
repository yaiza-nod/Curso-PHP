<?php

    // Calcular cuántos valores tenemos: 

    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    );

    // echo 'El array meses tiene '.count($meses).' valores.'; --> muestra la cantidad de valores en el array

    $ultimoMes = count($meses) - 1; // el último mes es la cantidad total (12) - 1 porque las posiciones empiezan en cero

    echo 'El último mes es '.$meses[$ultimoMes]; // muestra cuál es el último mes
?>