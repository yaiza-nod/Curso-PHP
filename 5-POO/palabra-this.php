<?php

class Persona {

    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInfo() {

        echo $this->nombre.' tiene '.$this->edad.' años y nació en '.$this->pais.'.';
    }

}

$yaiza = new Persona;
$yaiza->nombre = 'Yaiza';
$yaiza->edad = 23;
$yaiza->pais = 'España';

$yaiza->mostrarInfo();

echo '<br/>';

$alvaro = new Persona;
$alvaro->nombre = 'Alvaro';
$alvaro->edad = 23;
$alvaro->pais = 'España';


$alvaro->mostrarInfo();