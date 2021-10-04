<?php

    // Dos formas de crear arrays:

    $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

    # echo $semana[0];

    // Añadiendo un valor:

    $semana[7] = 'OtroDiaCreado';

    // Modificando un valor:

    $semana[0] = 'Lunes Cambiado';

    # echo $semana[0];

    // Otra forma de crear un array:

    $array = ['Lunes 2', 'Martes 2', 'Miércoles 2', 'Jueves 2', 'Viernes 2', 'Sábado 2', 'Domingo 2'];

    # echo $array[0];

    // Mostrar array sin for ni nada: 

    echo $semana[0] . '<br />';
    echo $semana[1] . '<br />';
    echo $semana[2] . '<br />';
    echo $semana[3] . '<br />';
    echo $semana[4] . '<br />';
    echo $semana[5] . '<br />';
    echo $semana[6] . '<br />';

?>