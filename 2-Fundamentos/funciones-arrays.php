<?php

    /*$amigo = [
        'telefono' => 999887766,
        'edad' => 22,
        'pais' => 'España'
    ];

    // Extrae elementos de arrays asociativos en variables:

    extract($amigo);*/

    $semana = [
        'Lunes', 'Martes', 'Miércoles', 'Jueves',
        'Viernes', 'Sábado', 'Domingo'
    ];

    /*echo array_pop($semana).'<br/>'; // quita el último elemento

    foreach ($semana as $dia) {
        echo $dia.'<br/>';
    };*/

    # echo join (' - ', $semana); // muestra elementos separados por lo que pasemos como primer parámetro

    # echo count($semana); // cuenta los elementos del array

    /*sort($semana); // ordena el array

    echo join (' - ', $semana);*/
 
    echo join (' - ', array_reverse($semana)); // invierte el orden de los elementos del array

?>