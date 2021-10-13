<?php

try {

    $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');

} catch (PDOException $e) {

    echo "ERROR: ".$e->getMessage();
    die();
}

// Establezco la pagina o cogiendo donde esta el usuario, o si no en 1

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPag = 5; // numero de post por pagina

// Establezco el inicio si la pagina es mayor que 1 en el calculo, y si no en 0

$inicio = ($pagina > 1) ? ($pagina * $postPag - $postPag) : 0;

// Establezco los articulos seleccionando todo de la bbdd limitando de 5 en 5 (desde inicio hasta post por pag)

$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $postPag");

// ejecuto

$articulos->execute();

// sobreescribo los articulos con fetchAll

$articulos = $articulos->fetchAll();

// si no hay articulos, redirigo al index.php

if (!$articulos) {

    header('Location: index.php');
}

// establezco el total de articulos como las filas encontradas

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

// redondeo hacia arriba el numero de paginas, las calculo diviendo el total entre los post por pagina que son 5
// con ceil consigo que si me salen 4.2 páginas, el numero de paginas sea 5

$numeroPaginas = ceil($totalArticulos / $postPag);

// require el index view es decir el html

require 'index.view.php';

