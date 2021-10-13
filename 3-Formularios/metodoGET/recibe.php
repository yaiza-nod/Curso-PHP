<?php
    // METODO GET

    if (!$_GET) header('Location: http://localhost/3-Formularios/metodoGET/');

    $nombre = $_GET['nombre'];
    $sexo = $_GET['sexo'];
    $anyo = $_GET['anyo'];
    $terminos = $_GET['terminos'];

    if ($nombre) {
        echo $nombre.'<br/>';
    } else {
        echo 'El usuario no estableció su nombre'.'<br/>';
    };

    
    echo $sexo.'<br/>';
    echo $anyo.'<br/>';
    echo $terminos.'<br/>';

?>