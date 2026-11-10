<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["enviar"]))
    {

        // Eliminamos la sesión
        session_unset(); // Eliminamos todas las variables de la sesión
        session_destroy(); // Elimina todos los datos y la información de la sesión

        // Redireccionamos....
        header("Location: login.php");
        exit();
        
    }// enviar
  
   
}// request_method
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($_SESSION["acceso"]) && $_SESSION["acceso"]): ?> 
        <h3 style="color:blue;">Bienvenido, admin. Has accedido al área privada</h3>
        <form action="<?=  $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="submit" id="enviar" name="enviar" value="Cerrar sesión">
        </form>
        <?php else: ?>
        <h3 style="color:red;">Acceso no autorizado</h3>
        <?php endif; ?>
    </body>
</html>
