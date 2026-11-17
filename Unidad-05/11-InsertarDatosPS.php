<?php
/**
* Primer ejemplo de inserción de datos a una base de datos MySQL/Mariadb
* Este ejemplo corresponde a programación funcional mediante 
* funciones mysqli
*/

// Database credentials
$host = "localhost";
$username = "teleasistencia";
$password = "1234";
$dbname = "teleasistencia";

// 1. Create database connection
$mysqli = new mysqli($host, $username, $password, $dbname);

// 2. Check connection
if ($mysqli == null) {
    die("Connection failed ");
}

// Consulta preparada, paso 1: preparación
$stmt = $mysqli->prepare("INSERT INTO `usuarios`(`usuario`, `contrasenia`, `rol`) 
          VALUES (?,?,?)");

// Consulta preparada, paso 2: enlaza los valores y ejecuta la consulta
$usuario = 'userPS1';
$contrasenia = '1234';
$rol = 'ps';
$stmt->bind_param("sss", $usuario, $contrasenia, $rol); 

$stmt->execute();

// Consulta preparada, paso 2: enlaza los valores y ejecuta la consulta
$usuario = 'userPS2';
$contrasenia = '1234';
$rol = 'ps';
$stmt->bind_param("sss", $usuario, $contrasenia, $rol); 

$stmt->execute();

// Consulta preparada, paso 2: enlaza los valores y ejecuta la consulta
$usuario = 'userPS3';
$contrasenia = '1234';
$rol = 'ps';
$stmt->bind_param("sss", $usuario, $contrasenia, $rol); 

$stmt->execute();

// 4. Destroy object
$mysqli->close();


?>