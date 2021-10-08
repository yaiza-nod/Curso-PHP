<?php

//$id = '2 or id = 4';

try {

    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

    //$inserto = $conexion->query('INSERT INTO usuarios VALUES(null, "Sandra", "sandra@correo.com")');

    $resultados = $conexion->query("SELECT * FROM usuarios");

    foreach ($resultados as $fila) {

        print_r($fila['id'].' - '.$fila['nombre'].'<br/>');
    }

} catch (PDOException $e) {

    echo 'ERROR: '.$e->getMessage();
}