<?php

require 'funciones.php';

$fotos_pag = 8;
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_pag - $fotos_pag : 0;

$conexion = conexion('galeria_practica', 'root', '');

if (!$conexion) {

    die();
}

$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_pag");
$statement->execute();

$fotos = $statement->fetchAll();

if (!$fotos) {

    header('Location: index.php');
}

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_pag);

require 'views/index.view.php';