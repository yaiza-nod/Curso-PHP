<?php

// Las constantes son variables que no podemos modificar una vez inicializadas
// SOn accesibles desde cualquier parte del scope/ambito global

define('PI', 3.1416);
// define('PI', 3.141698); --> Da error porque no puedo redefinir una variable

define('NOMBRE', 'Yaiza'); // puedes hacerlos con mayus o con minus, pero las mayus se suelen usar para las constantes

//echo PI;

echo NOMBRE;

?>