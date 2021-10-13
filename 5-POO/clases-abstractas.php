<?php

abstract class PersonaAbs {

    public function saludo() {

        return "Hola!! :)";
    }
}

class Estudiante extends PersonaAbs {

}

//$yaiza = new Estudiante;
echo $yaiza->saludo();