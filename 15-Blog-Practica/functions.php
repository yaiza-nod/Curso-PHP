<?php

ini_set('display_errors', 1); // Habilita la muestra de errores
error_reporting(E_STRICT); // Muestra el tipo de error que quiero, en este caso los errores estrictos

// Compruebo que la conexión ha sido correcta:

    function conexion($bd_config) {

        try {
            $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], 
            $bd_config['usuario'], $bd_config['pass']);
            return $conexion;
    
        } catch (PDOException $e) {
            return false;
        }
    }

// Así evito que el usuario inserte código: 

    function limpiarDatos($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

// Obtener los post del blog: 

    function obtenerPost($postPag, $conexion) {

        $inicio = (paginaActual() > 1) ? paginaActual() * $postPag - $postPag : 0;
        $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT {$inicio}, {$postPag}");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

// Obtener la página actual: 

    function paginaActual() {
        return isset($_GET['p']) ? (int)$_GET['p'] : 1;
    }

// Así evitamos que el usuario pueda poner texto, solo podrá insertar números:

    function idArticulo($id) {

        return (int)limpiarDatos($id);
    }

// Así obtengo el post por el id: 

    function obtenerPostPorId($conexion, $id) {
        
        $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id");
        $resultado = $resultado->fetchAll();
        return ($resultado) ? $resultado : false;
    }

// Recibimos fecha y la formateamos:

    function fecha($fecha) {

        $timestamp = strtotime($fecha);
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        $dia = date('d', $timestamp);
        $mes = date('m', $timestamp) - 1;
        $anyo = date('Y', $timestamp);

        $fecha = $dia.' de '.$meses[$mes].' del '.$anyo;

        return $fecha;
    }

// Obtengo el número de páginas:

    function numeroPaginas($postPag, $conexion) {

        $totalPosts = $conexion->prepare('SELECT FOUND_ROWS() AS total'); // aqui llamo al calculo que he hecho en funcion obtener post (sql_calc_found_rows)
        $totalPosts->execute();
        $totalPosts = $totalPosts->fetch()['total'];

        return ceil($totalPosts / $postPag);
    }

// Compruebo la session:

    function comprobarSession() {
        if (!isset($_SESSION['admin'])) {
            header('Location: '.RUTA);
        }
    }

?>