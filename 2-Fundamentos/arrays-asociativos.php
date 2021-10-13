<?php

    // ARRAYS ASOCIATIVOS

    $yaiza = ['Teléfono' => '666777888', 'Edad' => 22, 'Apellido' => 'Fernandez', 'País de Nacimiento' => 'España'];

    // Modificar el valor de una posición:

    $yaiza['Teléfono'] = '999887766';

    // Recorrer el array sin for:

    echo $yaiza['Teléfono'] . '<br />'; 
    echo $yaiza['Edad'] . '<br />'; 
    echo $yaiza['Apellido'] . '<br />'; 
    echo $yaiza['País de Nacimiento'] . '<br />'; 

    // Para mostrarlos no funciona poner $yaiza[0]

    echo 'El teléfono de Yaiza es: ' . $yaiza['Teléfono'] . '<br />';

?>