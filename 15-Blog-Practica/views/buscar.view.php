<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0, minimum-scale=1.0">
    <title>Blog de Yaiza</title>
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
    <?php require 'views/header.php';?>
    <div class="contenedor">
        <h2><?php echo $titulo; ?></h2>
        <?php foreach($resultado as $post): ?>
            <div class="post">
                <article>
                    <a href="single.php?id=<?php echo $post['id'] ?>"><h2 class="titulo"><?php echo $post['titulo']; ?></h2></a>
                    <p class="fecha"><?php echo fecha($post['fecha']) ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $post['id'] ?>">
                            <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'] ?>" alt="">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto'] ?></p>
                    <a href="single.php?id=<?php echo $post['id'] ?>" class="continuar">Continuar Leyendo</a>
                </article>
            </div>
        <?php endforeach; ?>

        <?php require 'paginacion.php' ;?>
    </div>

    <?php require 'views/footer.php'; ?>

</body>
</html>