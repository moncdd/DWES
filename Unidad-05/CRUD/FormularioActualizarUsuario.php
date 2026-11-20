<?php 
// Incluimos la biblioteca de funciones
require_once("BibliotecaBD.inc.php");

// si entramos en el script mediante el enlace de ConsultarDatos....
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    // Llamo a la función de consultar usuarios para obtener el array asociativo de los usuarios
    $id = $_GET["id"];
    $tupla = consultarUsuarios($_GET["id"]);
    $usuario = $tupla[0]["usuario"];
    $contrasenia = $tupla[0]["contrasenia"];
    $rol = $tupla[0]["rol"];
}

// si recibimos los datos del formulario....
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["formInsertarUsuario"]))
{
    if(isset($_POST["usuario"]) && !empty($_POST["usuario"]))
    {
        $usuario = $_POST["usuario"];
    }
    else 
    {
        $errorUsuario = true;
    }// $_POST["usuario"]

    if(isset($_POST["contrasenia"]) && !empty($_POST["contrasenia"]))
    {
        $contrasenia = $_POST["contrasenia"];
    }
    else 
    {
        $errorContrasenia = true;
    }// $_POST["contrasenia"]

    if(isset($_POST["rol"]) && !empty($_POST["rol"]))
    {
        $rol = $_POST["rol"];
    }
    else 
    {
        $errorRol = true;
    }// $_POST["rol"]

    // Si todos los datos son correctos...
    if(!isset($errorUsuario) && !isset($errorContrasenia) && !isset($errorRol))
    {
        $id = $_POST["id"];
        actualizarUsuario($id,$usuario,$contrasenia,$rol);
    }
    
}// request_method

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de alta de usuarios</title>
    </head>
    <body>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="hidden" id="id" name="id" value="<?php if(isset($id)) echo $id; else echo ""; ?>">
            <?php
            if(isset($errorUsuario) && $errorUsuario):
            ?>
                <p style="color:red;">El campo usuario está vacío o no es válido</p>
            <?php
            endif;
            ?>
            <label for="usuario">Usuario: </label>
            <input type="text" id="usuario" name="usuario" value="<?php if(isset($usuario)) echo $usuario; else echo ""; ?>"><br>
            <?php
            if(isset($errorContrasenia) && $errorContrasenia):
            ?>
                <p style="color:red;">El campo contraseña está vacío o no es válido</p>
            <?php
            endif;
            ?>
            <label for="contrasenia">Contraseña: </label>
            <input type="text" id="contrasenia" name="contrasenia" value="<?php if(isset($contrasenia)) echo $contrasenia; else echo ""; ?>"><br>
            <?php
            if(isset($errorRol) && $errorRol):
            ?>
                <p style="color:red;">El campo rol está vacío o no es válido</p>
            <?php
            endif;
            ?>
            <label for="rol">Rol: </label>
            <input type="text" id="rol" name="rol" value="<?php if(isset($rol)) echo $rol; else echo ""; ?>"><br>
            <input type="submit" name="formInsertarUsuario" value="Insertar usuario">
        </form>
    </body>
</html>