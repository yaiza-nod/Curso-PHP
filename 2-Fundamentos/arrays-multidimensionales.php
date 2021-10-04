<?php

// ARRAYS MULTIDIMENSIONALES, array dentro de array

$amigos = array(
    array('Alejandro', 20, array('asd', array(5, 'holaaa'))), 
    array('Alvaro', 23), 
    array('Iris', 16)
);

//Accediendo al valor:

echo $amigos[0][0].'<br />';
echo $amigos[1][0].'<br />';
echo $amigos[2][0].'<br />';

// Accediendo al super array:

echo $amigos[0][2][1][1].'<br />'; // muestra el string 'holaaa'

?>