<?php

$conexion = new mysqli('localhost', 'root', '', 'mysqli');

if ($conexion->connect_errno) {

    die('Lo siento, hubo un problema con el servidor.'); // matamos la ejecucion de la página

} else {

    $statement = $conexion->prepare("INSERT INTO usuarios(id, nombre, correo, edad) VALUES(?, ?, ?, ?)");

    $statement->bind_param('sssi', $id, $nombre, $correo, $edad);

    $id = NULL;
 
    if (isset($_GET['nombre']) && isset($_GET['correo']) && isset($_GET['edad'])) {

        $nombre = $_GET['nombre'];

        $correo = $_GET['correo'];

        $edad = $_GET['edad'];
    }

    $statement->execute();

    echo 'Filas añadidas: '.$conexion->affected_rows;

}
