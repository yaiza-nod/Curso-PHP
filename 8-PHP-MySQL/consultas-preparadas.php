<?php

$id = $_GET['id'];

try {

    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

    // MUESTRO USUARIOS

    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id or :id2');

    $statement->execute(
        array(':id' => $id,
        ':id2' => 3)
    );

    $resultados = $statement->fetchAll();
    
    foreach ($resultados as $usuario) {

        print_r($usuario['nombre'].'<br/>');
    }

    // INSERTO USUARIO

    $statement = $conexion->prepare('INSERT INTO usuarios VALUES(null, "María José", "mjose@correo.com")');

    $statement->execute();


} catch (PDOException $e) {

echo 'ERROR: '.$e->getMessage();
}