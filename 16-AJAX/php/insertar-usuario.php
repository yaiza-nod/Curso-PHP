<?php

error_reporting(0);

header('Content-type: application/json; charset=utf-8');

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$correo = $_POST['correo'];

// valido datos

function validarDatos($nombre, $edad, $pais, $correo) {

    if ($nombre == '') {

        return false;

    } else if ($edad == '' || is_int($edad)) {

        return false;

    } else if ($pais == '') {

        return false;

    } else if ($correo == '') {

        return false;
    }

    return true;
}

if (validarDatos($nombre, $edad, $pais, $correo)) {

    $conexion = new mysqli('localhost', 'root', '', 'ajax');
    $conexion->set_charset("utf8");

    if ($conexion->connect_errno) {

        $respuesta = ['error' => true];

    } else {

        $statement = $conexion->prepare("INSERT INTO usuarios (nombre, edad, pais, correo) VALUES (?,?,?,?)");
        $statement->bind_param("siss", $nombre, $edad, $pais, $correo);
        $statement->execute();

        // Si hay 0 filas es que ha ocurrido un error, así que lo lanzamos

        if ($conexion->affected_rows <= 0) {

            $respuesta = ['error' => true];
        }

        $respuesta = [];
    }

} else {

    $respuesta = ['error' => true];
}

echo json_encode($respuesta);