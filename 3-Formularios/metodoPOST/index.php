<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="recibe.php" method="post">
        <input type="text" placeholder="Nombre:" name="nombre"> <!-- El name me permite conectarme con php -->
        <br/>
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <br/>
        <br>
        <select name="anyo" id="anyo">
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
        </select>
        </br>
        <br>
        <label for="terminos">¿Aceptas los términos de usuario?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        </br>
        <br/>
        <input type="submit" name="submit" value="Enviar">

    </form>
    
</body>
</html>