<?php
// Incluimos la biblioteca de funciones
require_once("BibliotecaBD.inc.php");

// Llamo a la función de consultar usuarios para obtener el array asociativo de los usuarios
$tupla = consultarUsuarios();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de alta de usuarios</title>
    </head>
    <body>
        <p><a href="FormularioInsertarUsuario.php">Insertar un nuevo usuario</a></p>
        <table style="border: 1px solid black;">
            <tr style="border: 1px solid black;">
                <th style="border: 1px solid black;">Usuario</th>
                <th style="border: 1px solid black;">Contraseña</th>
                <th style="border: 1px solid black;">Rol</th>
                <th style="border: 1px solid black;">Modificar</th>
                <th style="border: 1px solid black;">Eliminar</th>
            </tr>
            <!-- "Pintar" las tuplas de base de datos -->
            <?php
            foreach($tupla as $row):
                echo "<tr style=\"border: 1px solid black;\">
                        <td style=\"border: 1px solid black;\">".$row["usuario"]."</td>
                        <td style=\"border: 1px solid black;\">".$row["contrasenia"]."</td>
                        <td style=\"border: 1px solid black;\">".$row["rol"]."</td>
                        <td style=\"border: 1px solid black;\"><a href=\"FormularioActualizarUsuario.php?id=".$row["id"]."\">Modificar</a></td>
                        <form action=\"EliminarUsuario.php\" method=\"post\">
                        <input type=\"hidden\" id=\"id\" name=\"id\" value=\"".$row["id"]."\" >
                        <td style=\"border: 1px solid black;\"><input type=\"submit\" id=\"eliminar\" name=\"eliminar\" value=\"Eliminar\"></td>
                        </form>
                    </tr>";
            endforeach;   
            ?>
        </table>
    </body>
</html>        