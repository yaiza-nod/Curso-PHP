<section class="paginacion">
    <ul>
        <?php $numPaginas = numeroPaginas($blog_config['postPag'], $conexion); ?>

        <?php if (paginaActual() === 1): ?>
            <li class="disabled">&laquo;</li>
        <?php else: ?>
            <li><a href="index.php?p=<?php echo paginaActual() -1 ?>">&laquo;</a></li>
        <?php endif; ?>

        <?php for($i = 1; $i <= $numPaginas; $i++): ?>
            <?php if (paginaActual() === $i): ?>
                <li class="active">
                    <?php echo $i ?>
                </li>
            <?php else: ?>
                <li><a href="index.php?p=<? echo $i ?>"><?php echo $i ?></a></li>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if (paginaActual() == $numPaginas): ?>
            <li class="disabled">&raquo;</li>
        <?php else: ?>
            <li><a href="index.php?p=<?php echo paginaActual() + 1; ?>">&raquo;</a></li>
        <?php endif; ?>
    </ul>
</section>