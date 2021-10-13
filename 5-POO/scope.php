<?php

class Usuario {

    private $nombre;
    private $correo;

    function __construct($nombre, $correo) {
        
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo() {

        return $this->correo;
    }
}

class Miembro extends Usuario {


}

$yaiza = new Miembro('Yaiza', 'yaiza@gmail.com');
echo $yaiza->mostrarInfo();