<?php

    //$num = 7;

    function mostrarNumero() {
        $num = 10; // no puedo acceder a variables que estén dentro de una función
        // tampoco puedo utilizar en una funcion variables que estén fuera de ella salvo que las pase como parámetro
        return $num;
    };

    echo mostrarNumero($num);

?>