<?php

// Trabajamos con ficheros desde PHP
/**
 * Los modos de acceso existentes para fopen son:

Modo 	Descripción
r 	Apertura para lectura. Puntero al principio del archivo
r+ 	Apertura para lectura y escritura. Puntero al principio del archivo
w 	Apertura para escritura. Puntero al principio del archivo y lo sobreescribe. Si no existe se intenta crear.
w+ 	Apertura para lectura y escritura. Puntero al principio del archivo y lo sobreescribe. Si no existe se intenta crear.
a 	Apertura para escritura. Puntero al final del archivo. Si no existe se intenta crear.
a+ 	Apertura para lectura y escritura. Puntero al final del archivo. Si no existe se intenta crear.
x 	Creación y apertura para sólo escritura. Puntero al principio del archivo. Si el archivo ya existe dará error E_WARNING. Si no existe se intenta crear.
x+ 	Creación y apertura para lectura y escritura. Mismo comportamiento que x.
c 	Apertura para escritura. Si no existe se crea. Si existe no se sobreescribe ni da ningún error. Puntero al principio del archivo.
c+ 	Apertura para lectura y escritura. Mismo comportamiento que C.

Algunas consideraciones de la tabla:

    Si el archivo no es escribible, abrirlo con r+ fallará, incluso cuando sólo se intenta leer.
    w y w+ eliminarán el contenido de cualquier archivo. Para sólo añadir y no borrar, se usa a y a+.
    Si quieres crear nuevos archivos y evitar sobreescribir sin querer un archivo existente, utiliza x o x+.
    Cuando se trabaja con archivos binarios, como imágenes, hay que añadir 'b' después del modo. Como rb o r+b

 */

// Abrimos un fichero de texto plano
$fp = fopen("miarchivo.txt", "r");

// Leemos el fichero mediante la función fread.
// Debemos indicar el fichero y el tamaño del fichero
$contents = fread($fp, filesize("miarchivo.txt"));

if (!$fp = fopen("miarchivo.txt", "r")){
   echo "No se ha podido abrir el archivo";
}

// Cerramos el fichero
fclose($fp);

var_dump($contents);

?>