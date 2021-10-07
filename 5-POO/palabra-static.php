<?php

class PersonaSt {

    public static $dia = '3 de Junio';


    public static function saludo($nombre = null) {

        if ($nombre) {
            return "Hola, buenos días $nombre!! :) <br/>";
        } else {
            return "Hola, buenos días!! :) <br/>";
        }
    }
}


echo PersonaSt::saludo('Yaiza');
echo PersonaSt::saludo();