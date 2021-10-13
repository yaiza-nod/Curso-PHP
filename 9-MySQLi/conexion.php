<?php

$conexion = new mysqli('localhost', 'root', '', 'mysqli');

if ($conexion->connect_errno) {

    die('Lo siento, hubo un problema con el servidor.'); // matamos la ejecucion de la página

} else {

    

}
