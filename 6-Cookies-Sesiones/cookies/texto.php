<?php

    if (isset($_COOKIE['font-size'])) {
        $tamanyo = htmlspecialchars($_COOKIE['font-size']);
    } else {
        $tamanyo = '15px';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
        p {
            font-size: <?php echo $tamanyo; ?>;

        }
    </style>
</head>
<body>
    <p> 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nobis eius a voluptatibus facilis perferendis 
        possimus fuga tempora aperiam! Incidunt, non voluptas! Sit totam reiciendis mollitia natus alias doloribus 
        distinctio!
    </p>
</body>
</html>