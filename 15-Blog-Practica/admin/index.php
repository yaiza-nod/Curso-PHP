<?php session_start();

ini_set('display_errors', 1); // Habilita la muestra de errores
error_reporting(E_STRICT); // Muestra el tipo de error que quiero, en este caso los errores estrictos

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

// Comprobar sesión:

comprobarSession();

// Comprobar conexion: 

if (!$conexion) {

    header('Location: ../error.php');
}

// Si todo va bien, traigo los posts:

$posts = obtenerPost($blog_config['postPag'], $conexion);



require '../views/admin_index.view.php';

?>