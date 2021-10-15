<?php

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
    header('Location: error.php');
}

// recibir datos

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {

    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement = $conexion->prepare("SELECT * FROM articulos WHERE titulo LIKE :busqueda OR texto LIKE :busqueda");
    $statement->execute(array(':busqueda' => "%$busqueda%"));
    $resultado = $statement->fetchAll();

    if (empty($resultado)) {

        $titulo = 'No se encontraron artículos con el resultado: '.$busqueda;

    } else {
        $titulo = 'Resultados de la búsqueda: '.$busqueda;
    }

} else {

    header('Location: '.RUTA.'/index.php');
}

require 'views/buscar.view.php';

?>