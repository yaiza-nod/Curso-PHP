<?php

require 'admin/config.php';
require 'views/header.php';

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error</title>
        <script src="https://kit.fontawesome.com/fd11422aa1.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilo.css">
    </head>

    <body>
        <div class="contenedor">
            <div class="post">
                <article>
                    <h2 class="titulo">ERROR</h2>
                    <br>
                    <p class="extracto">Se ha producido un error.</p>
                </article>
            </div>
        </div>
    </body>

</html>


<?php

require 'views/footer.php';

?>