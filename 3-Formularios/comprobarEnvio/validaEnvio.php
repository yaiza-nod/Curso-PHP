<?php

    /*
    FORMA 1:

    if ($_SERVER['REQUEST_METHOD'] == 'GET') { // ACCEDEMOS A METODO ENVIO
        echo 'Se enviaron por GET';
    } else {
        echo 'Se enviaron por POST';
    };*/

    # FORMA 2:

    if (isset($_POST['submit'])) {
        echo 'Se han enviado los datos correctamente';
        print_r($_POST['submit']);
    };


?>