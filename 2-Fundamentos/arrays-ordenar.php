<?php

    // ORDENAR ARRAY

    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    );

    $numeros = [1, 22, 23, 10, 9, 5, 70, 3, 100, 20, 4];

    # Orden Meses

    sort($meses); // En este caso, los ordena de forma alfabética

    # rsort($meses); // A la inversa, recursive sort

    # Orden números

    rsort($numeros); // recursive

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>

    <h1> Meses del año. </h1>
    <ul>
        <?php 
        
            foreach($meses as $mes) {
                echo '<li>'.$mes.'</li>';
            }

        ?>
    </ul>

    <h1> Numeros. </h1>
    <ul>
        <?php 
        
            foreach($numeros as $num) {
                echo '<li>'.$num.'</li>';
            }

        ?>
    </ul>
    
</body>
</html>