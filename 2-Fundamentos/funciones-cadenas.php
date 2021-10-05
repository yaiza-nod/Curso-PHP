<?php

    $texto = 'Hola Yaiza ';

    echo htmlspecialchars($texto).'<br/>';

    echo trim($texto).'<br/>';

    echo strlen($texto).'<br/>';

    $texto2 = substr($texto, 0, 4).'<br/>';

    echo $texto2;

    echo strtoUpper($texto).'<br/>';

    echo strtoLower($texto).'<br/>';
    
    echo strpos($texto, 'H').'<br/>';


?>