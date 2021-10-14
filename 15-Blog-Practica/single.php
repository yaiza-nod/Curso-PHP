<?php

require 'admin/config.php';
require 'functions.php';

// Nos conectamos

$conexion = conexion($bd_config);

if (!$conexion) {
    header('Location: error.php');
}

// Obtenemos el id del articulo: 

$idArt = idArticulo($_GET['id']);

if (empty($idArt)) {
    header('Location: index.php');

}

$post = obtenerPostPorId($conexion, $idArt);


if (!$post) {

    header('Location: index.php');
}

$post = $post[0];



require 'views/single.view.php';