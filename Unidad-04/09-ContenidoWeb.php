<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($_SESSION["acceso"]) && $_SESSION["acceso"]): ?> 
        <h3 style="color:blue;">Has llegado!!!</h3>
        <a href="09-Logout.php">Logout</a>
        <?php else: ?>
        <h3 style="color:red;">Acceso no autorizado</h3>
        <?php endif; ?>
    </body>
</html>
