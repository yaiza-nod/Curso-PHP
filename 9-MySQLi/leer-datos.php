<?php

$conexion = new mysqli('localhost', 'root', '', 'mysqli');

if ($conexion->connect_errno) {

    die('Lo siento, hubo un problema con el servidor.'); // matamos la ejecucion de la página

} else {

    $sql = "SELECT * FROM usuarios";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows) {

        //$resultado->fetch_assoc()['nombre']; // si la ejecutamos una vez solo traera un resultado

        while ($fila = $resultado->fetch_assoc()) { // mientras haya resultados
            
            echo $fila['id'].' - '.$fila['nombre'].'<br/>';
        }

    } else {

        echo 'No hay datos';
    }

}
