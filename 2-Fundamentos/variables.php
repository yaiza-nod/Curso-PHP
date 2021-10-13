<?php

/*
En una variable puedo almacenar strings, números... NO pongo int, String como en Java
*/

$nombre = 'Yaiza'; // string, pueden ser con doble o comilla simple, pero hay diferencias
$numero = 9; // entero
$decimal = 9.6; // double
$booleano = true; //booleano

/*
Diferencia entre comillas simples o dobles:

    - Simples: Muestra texto pero no variables
    - Dobles: Nos permiten llamar variables
*/

// echo "Hola $nombre!!!"; -> con dobles

echo 'Hola ' . $nombre . '!!! :)'; // con simples, es MAS SEGURO ASÍ QUE CON DOBLES

gettype($nombre); // nos dice el tipo de variable que le pasemos


//echo $nombre;
//echo $numero;

?>