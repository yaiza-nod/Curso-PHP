<?php

# echo 10 <=> 11; // compara entre dos numeros, menor o mayor o igual

/*
1 cuando el valor de la izq es mayor que el de la dch
0 si son iguales
-1 si el de la izq es menor que el de la dch
*/

$array = [3,1,5,2,4];

/*function comparar ($a, $b) {
    if ($a == $b) {
        return 0;
    } else if ($a > $b) {
        return 1;
    } else {
        return -1;
    };
};*/

function comparar ($a, $b) {
    return $a <=> $b;
}

usort($array, 'comparar');

echo implode(' ~ ', $array);

