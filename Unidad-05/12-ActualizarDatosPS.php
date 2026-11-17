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
$stmt = $mysqli->prepare("UPDATE `usuarios` SET `contrasenia` = 'pepito1' 
          WHERE `usuario` = ?");

// Consulta preparada, paso 2: enlaza los valores y ejecuta la consulta
$usuario = 'userPS';
$stmt->bind_param("s", $usuario); 

$stmt->execute();


// 4. Destroy object
$stmt->close();
$mysqli->close();


?>