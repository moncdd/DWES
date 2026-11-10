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
$conn = mysqli_connect($host, $username, $password, $dbname);

// 2. Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Insertamos una tupla en BD
$query = "SELECT * FROM `usuarios`";
$result = mysqli_query($conn, $query);

// Función que nos devuelve el número de tuplas de la consulta
$num = mysqli_num_rows($result);
echo "Tengo $num filas en la base de datos<br>";

while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
    echo $row['usuario']."<br>";
}

?>