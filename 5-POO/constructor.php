<?php

class PersonaConst {

    public $nombre;
    public $edad;
    public $pais;

    function __construct ($nombre, $edad, $pais) {

        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInfo() {

        echo $this->nombre.' tiene '.$this->edad.' años y nació en '.$this->pais.'.<br/>';
    }

}

$yaiza = new PersonaConst('Yaiza', 23, 'España');
$yaiza->mostrarInfo();

$alvaro = new PersonaConst('Alvaro', 23, 'España');
$alvaro->mostrarInfo();