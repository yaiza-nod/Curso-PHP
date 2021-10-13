<?php

    /*$usuario = 'Yaiza';

    function saludo ($usuario) {
        echo 'Hola, '.$usuario.'!'.'<br />';
    };

    saludo($usuario);
    saludo('Alvaro');
    saludo('Iris');*/

    function sumar ($num1, $num2) {
        if (gettype($num1) == 'integer' && gettype($num2) == 'integer') {
            $resultado = $num1 + $num2;
            echo $resultado;
            echo '<br/>';
        } else {
            echo 'No se ha introducido el mismo tipo de dato y/o se han introducido datos que no son números.';
            echo '<br/>';
        }
    }

    // En los tres da 12, es decir, suma los números aunque algunos sean strings

    sumar(8, 4);
    sumar ('8', 4);
    sumar ('8', '4');



?>