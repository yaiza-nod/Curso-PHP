<?php
    // METODO POST

    //print_r($_POST);

    # Si se han enviado datos los aloja, sino, redirige al formulario

    if (!$_POST) header('Location: http://localhost/3-Formularios/metodoPOST/');

    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $anyo = $_POST['anyo'];
    $terminos = $_POST['terminos'];

    echo 'Hola, '.$nombre.' eres '.$sexo;

    

?>