<?php

require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);

if (!$conexion) {

    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $id = limpiarDatos($_POST['id']);
    $thumb = $_FILES['thumb'];
    $thumbGuardada = limpiarDatos($_POST['thumb-guardada']);

    if (empty($thumn['name'])) {

        $thumb = $thumbGuardada;

    } else {

        $archivoSubido = '../'.$blog_config['carpetaImagenes'].$_FILES['thumb']['name'];
        move_uploaded_file($_FILES['thumb']['tmp-name'], $archivoSubido);
        $thumb = $_FILES['thumb']['name'];
    }

    $statement = $coenxion->prepare(
        "UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb WHERE id = :id"
    );

    $statement->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $thumb,
        ':id' => $id,
    ));

    header('Location: '.RUTA.'admin');

} else {
    
    $idArt = idArticulo($_GET['id']);

    if (empty($idArt)) {
        
        header('Location: '.RUTA.'admin');
    }

    $post = obtenerPostPorId($conexion, $idArt);

    if (!$post) {

        header('Location: '.RUTA.'admin');
    }
}

require '../views/editar.view.php';

?>