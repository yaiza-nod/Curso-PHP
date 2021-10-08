<?php

$conexion = new mysqli('localhost', 'root', '', 'mysqli');

if ($conexion->connect_errno) {

    die('Lo siento, hubo un problema con el servidor.'); // matamos la ejecucion de la página

} else {

    //$sql = "INSERT INTO usuarios VALUES(null, 'Daniel', 'daniel@correo.com', 28)"; //-> cada vez que recargue insertará el mismo dato
    $conexion->query($sql);

    if ($conexion->affected_rows >= 1) {

        echo 'Filas agregadas: '.$conexion->affected_rows;

    }

}
