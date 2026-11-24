<?php

// Creamos un array de PHP
$usuario = array("Nacho",18);
// Convertimos el array a formato JSON
echo json_encode($usuario);

class Alumno{
    public $nombre;
    public $edad;
    
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}
$objAlumno = new Alumno("Nacho",18);
// Convertimos el objeto a formato JSON
echo json_encode($objAlumno);
?>