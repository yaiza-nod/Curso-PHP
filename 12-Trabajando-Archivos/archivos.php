<?php

// file_exists('documento.txt'); -> devuelve true si existe el fichero y false si no existe

// file_get_contents('documento.txt'); -> devuelve el contenido del fichero

# ESCRIBO EN FICHERO, 1er par el docu, 2do par el texto a escribir, 3er par si quiero no sobreescribirlo

// file_put_contents('documento.txt', "\n En el segundo parámetro sobreescribe la info con la que quiero añadir", FILE_APPEND);

file_get_contents('/home/yaizafernandez/Escritorio/Curso-PHP/12-Trabajando-Archivos'); // deja el archivo en blanco

for ($i=1; $i <= 10; $i++) {
    file_put_contents('/home/yaizafernandez/Escritorio/Curso-PHP/12-Trabajando-Archivos', "$i \n", FILE_APPEND);
}

//$archivo = file('documento.txt');