<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fd11422aa1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Galería</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Galería de fotos en PHP y MySQL</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto): ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id'] ?>">
                        <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="paginacion">
            
            <?php if ($pagina_actual > 1):  ?>
                <a href="index.php?p=<?php echo $pagina_actual - 1 ?>" class ="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
            <?php endif; ?>

            <?php if ($total_paginas != $pagina_actual):  ?>
                <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class ="derecha">Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
            <?php endif; ?>
            
        </div>
    </section>

    <footer>
        <p class="copyright">Galería creada por Yaiza Fernández :)</p>
    </footer>

</body>
</html>