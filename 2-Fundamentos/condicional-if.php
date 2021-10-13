<?php

    // CONDICIONAL IF

    // Los operadores de comparación son los mismos que en Java

    /*

    == Igualdad
    < Menor que
    > Mayor que
    <= Menor o igual que
    >= Mayor o igual que
    != Diferente de
    ! Negación

    */

    $edad = 18;
    $nombre = 'Yaiza';

    // Operadores lógicos && y ||

    if ($edad >= 18 && $nombre === 'Yaiza') {
        // Dentro las instrucciones que se ejecutarán si la condición se cumple

        echo '<h3>'.'Eres mayor de edad o te llamas Yaiza, ¡Bienvenido!'.'</h3>';

    } else {

        echo '<h3>'.'Eres menor de edad y no te llamas Yaiza, no puedes continuar.'.'</h3>';
    }

?>