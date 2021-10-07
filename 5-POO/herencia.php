<?php

class PersonaHerencia {

    public $nombre;
    public $edad;
    public $pais;

    function __construct ($nombre, $edad, $pais) {

        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInfo() {

        echo $this->nombre.' tiene '.$this->edad.' años, nació en '.$this->pais;
    }

}

class Estudiante extends PersonaHerencia {

    public $carrera;

    function __construct($nombre, $edad, $pais, $carrera) {

        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }

    public function mostrarInfo() {

        echo parent::mostrarInfo().' y estudió '.$this->carrera.'.<br/>';
    }


}

class Trabajador extends PersonaHerencia {

    public $profesion;

    function __construct($nombre, $edad, $pais, $profesion) {

        parent::__construct($nombre, $edad, $pais);
        $this->profesion = $profesion;
    }

    public function mostrarInfo() {

        echo parent::mostrarInfo().' y trabaja como '.$this->profesion.'.<br/>';
    }


}

$yaiza = new Estudiante('Yaiza', 23, 'España', 'DAM');
echo $yaiza->mostrarInfo();

$iris = new Trabajador('Iris', 30, 'España', 'Profesora');
echo $iris->mostrarInfo();