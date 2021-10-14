<header>
    <div class="contenedor">
        <div class="logo izquierda">
            <p><a href="<?php echo RUTA; ?>">Este es mi blog :)</a></p>
        </div>

        <div class="derecha">

            <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="GET">
                <input type="text" name="busqueda" placeholder="Buscar">
                <button type="submit" class="icono fa fa-search"></button>
            </form>

            <nav class="menu">
                <ul>
                    <!--En los href irían los links a las RRSS-->
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
                </ul>
            </nav>

        </div>

    </div>
</header>