<?php

$jsonData = '{"Nombre":"Pepito","Apellido":"Rrrrr","Rol":"Admin"}';

$dataBack = json_decode($jsonData);

echo $dataBack->Nombre;
?>