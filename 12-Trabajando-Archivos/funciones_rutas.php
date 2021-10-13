<?php

# echo pathinfo('documento.txt', PATHINFO_FILENAME);

/*

PATHINFO_DIRNAME -> devuelve el directorio padre del archivo
PATHINFO_BASENAME -> devuelve el nombre del archivo con su extension
PATHINFO_EXTENSION -> devuelve la extension del archivo
PATHINFO_FILENAME -> devuelve el nombre del archivo

*/

/* $resultados = glob('*.{php,txt}', GLOB_BRACE);
print_r($resultados); */

# echo basename('carpeta1/carpeta2/archivo.php', '.php');

echo dirname('carpeta1/carpeta2/archivo.php');