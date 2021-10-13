<?php

    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    );

    echo '<h1> Bucle For </h1>';

    // En incremento de Enero a Diciembre
    
    for ($i = 0; $i < count($meses); $i++) {

        echo $meses[$i].'<br />';
    };

    echo '<h1> Bucle While </h1>';

    $i = count($meses) -1;

    // En decremento de Diciembre a Enero

    while ($i >= 0) {

        echo $meses[$i].'<br />';
        $i--;
    };

?>