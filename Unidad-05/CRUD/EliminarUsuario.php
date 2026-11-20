<?php
// Incluimos la biblioteca de funciones
require_once("BibliotecaBD.inc.php");

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["eliminar"]))
{
    eliminarUsuario($_POST["id"]);
    header("Location:ConsultarUsuarios.php");
    exit();
} // request_method

?>
