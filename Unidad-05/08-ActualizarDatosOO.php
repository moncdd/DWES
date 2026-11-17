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


// 3. Update data
$query = "UPDATE `usuarios` SET `contrasenia` = 'pepito' 
          WHERE `usuario` = 'userPHPOO'";
$mysqli->query($query);

// 4. Destroy object
$mysqli->close();


?>