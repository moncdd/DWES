<?php

require_once("DatosConexionBD.inc.php");
// Funciones de CRUD con Base de datos

function crearConexion()
{
    global $host,$username,$password,$dbname;

    // 1. Create database connection
    $mysqli = new mysqli($host, $username, $password, $dbname);

    // 2. Check connection
    if ($mysqli == null) {
        die("Connection failed ");
    }

    return $mysqli;
}

function cerrarConexion($stmt,$mysqli)
{
    // 4. Destroy object
    $stmt->close();
    $mysqli->close();
}
function insertarUsuario($p_suario,$p_contrasenia,$p_rol)
{
    $mysqli = crearConexion();

    // Consulta preparada, paso 1: preparación
    $stmt = $mysqli->prepare("INSERT INTO `usuarios`(`usuario`, `contrasenia`, `rol`) 
            VALUES (?,?,?)");

    // Consulta preparada, paso 2: enlaza los valores y ejecuta la consulta
    $usuario = $p_suario;
    $contrasenia = $p_contrasenia;
    $rol = $p_rol;
    $stmt->bind_param("sss", $usuario, $contrasenia, $rol); 

    $stmt->execute();

    cerrarConexion($stmt,$mysqli);
}

?>