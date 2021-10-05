<?php
declare(strict_types=1);
//no hace falta cerrarlo

function cuadrado(int $num) {
    return $num*$num;
};

$num = 6;

echo 'El cuadrado de '.$num.' es '.cuadrado($num);