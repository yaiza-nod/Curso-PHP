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

    <?php require 'views/header.php'; ?>

    <div class="contenedor">

        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['titulo']; ?></h2>
                <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                <div class="thumb">
                    <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo']; ?>">
                </div>
                <p class="extracto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore omnis porro aliquam optio officiis
                    voluptatem doloribus fuga quis quaerat modi enim, obcaecati error corporis eius quod quisquam
                    necessitatibus aliquid repudiandae, temporibus, molestiae qui ducimus. Suscipit assumenda quis
                    aspernatur corporis accusamus cumque veritatis ab aliquam? Accusantium delectus nam autem porro
                    deleniti!
                </p>
            </article>
        </div>

    </div>

    <?php require 'views/footer.php'; ?>

</body>

</html>