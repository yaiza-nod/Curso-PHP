<?php

    function sumar ($num1, $num2) {
        if (gettype($num1) == 'integer' && gettype($num2) == 'integer') {
            $resultado = $num1 + $num2;
        } else {
            $resultado = 'No se ha introducido el mismo tipo de dato y/o se han introducido datos que no son números.';
        }
        
        return $resultado;
    }

    echo sumar(8, 4);
    echo '<br/>';

    function saludo ($usuario) {
        return 'Hola, '.$usuario.'!'.'<br />';
    };

    echo saludo('Yaiza');
    echo saludo('Alvaro');
    echo saludo('Iris');

?>