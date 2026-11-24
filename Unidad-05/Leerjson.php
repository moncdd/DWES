<?php

$arrayJSON = json_decode('["Nacho",18]');

var_dump($arrayJSON);


class Alumno{
    public $nombre;
    public $edad;
    
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

$objAlumno = json_decode('{"nombre":"Nacho","edad":18}');
var_dump($objAlumno);

?>