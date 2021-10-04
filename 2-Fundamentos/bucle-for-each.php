<?php

    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    );

    $alvaro = array('Teléfono' => 999887766, 'Edad' => 23, 'País de Nacimiento' => 'España');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>

    <h1>Datos de Álvaro</h1>
    <ul>
        <?php
            /*foreach ($meses as $mes) {
                echo '<li>'.$mes.'</li>';
            }*/

            // con array asociativo:

            foreach ($alvaro as $dato => $valor) {
                echo '<li>'.$dato.' : '.$valor.'</li>';
            };

        ?>
    </ul>
    
</body>
</html>