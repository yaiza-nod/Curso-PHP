
<?php

    $errores = '';

    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        if(!empty($nombre)) {
            /*$nombre = trim($nombre);
            $nombre = htmlspecialchars($nombre);
            $nombre = stripslashes($nombre);*/

            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

            echo 'Tu nombre es: '.$nombre.'<br/>';
        } else {
            $errores .= 'Por favor, agrega un nombre.';
        };

        if(!empty($correo)) {
            /*$nombre = trim($nombre);
            $nombre = htmlspecialchars($nombre);
            $nombre = stripslashes($nombre);*/

            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $errores .= 'Por favor, ingresa un correo válido <br/>';
            }

            echo 'Tu correo es: '.$correo.'<br/>';
        } else {
            $errores .= 'Por favor, agrega un correo.';
        };
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color:red;}
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" placeholder="Nombre:">
        <input type="email" name="correo" placeholder="Correo:">

        <?php if(!empty($errores)) : ?>
            <div class="error"><?php echo $errores; ?></div>
        <?php endif; ?>

        <input type="submit" name="submit">
    </form>
</body>
</html>