<?php

    # Antes lo haciamos asi -> $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

    /*
    Lo de arriba equivale a:

    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
    } else {
        $nombre = 'Anonimo';
    }
    */

    // Ahora se hace así: 

    $nombre = $_GET['nombre'] ?? 'Anonimo';

    echo $nombre;

?>