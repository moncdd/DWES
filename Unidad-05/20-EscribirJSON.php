<?php

$usuario = array("Nombre" => "Pepito", "Apellido" => "Rrrrr", "Rol" => "Admin");

$jsonData = json_encode($usuario);

echo "\$usuario<br>";
var_dump($usuario);

echo "<br>\$jsonData<br>";
var_dump($jsonData);
?>