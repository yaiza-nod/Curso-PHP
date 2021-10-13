<?php

class Persona {

    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInfo() {

        echo 'Hola mundo!!';
    }

}

$yaiza = new Persona; // CREO UNA PERSONA

$yaiza->nombre = 'Yaiza';
$yaiza->edad = 22;
$yaiza->pais = 'España';

$alvaro = new Persona; // CREO OTRA PERSONA

$alvaro->nombre = 'Alvaro';
$alvaro->edad = 23;
$alvaro->pais = 'España';

//$yaiza->mostrarInfo(); ACCEDO A UNA FUNCIÓN

echo $yaiza->nombre.' tiene '.$yaiza->edad.' años.';