<?php

    declare(strict_types=1); // estrictamente debe ser int, aunque ponga '8' lo cogerá como string

    // Permite especificar qué tipo de valor queremos devolver

    function obtenerEdad() : int {
        $edad = 23;
        return $edad;
    };

    echo obtenerEdad();