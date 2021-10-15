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

        <?php require 'header.php' ?>
            <div class="contenedor">
                <div class="post">
                    <article>
                        <h2 class="titulo">Editar Artículo</h2>
                        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <input type="hidden" value="<?php echo $post['id']; ?>" name="id">
                            <input type="text" name="titulo" value="<?php echo $post['titulo']; ?>">
                            <input type="text" name="extracto" value="<?php echo $post['extracto']; ?>">
                            <textarea name="texto" value="<?php echo $post['texto']; ?>"></textarea>
                            <input type="file" name="thumb">
                            <input type="hidden" value="<?php echo $post['thumb']; ?>" name="thumb-guardada">

                            <input type="submit" value="Modificar Artículo">
                        </form>
                    </article>
                </div>
            </div>
            
        <?php require 'footer.php' ?>

    </body>

</html>