<?php

    function calcularAreaTriangulo($base, $altura) {
        // b*a/2
        return ($base*$altura)/2;
    }

    $area = calcularAreaTriangulo(10, 10);

    echo 'El área del triángulo es: '.$area.' metros cuadrados.';

?>