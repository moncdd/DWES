<?php
// Incluimos la biblioteca de funciones
require_once("BibliotecaBD.inc.php");

// Llamo a la función de consultar usuarios para obtener el array asociativo de los usuarios
$tupla = consultarUsuarios(8);

?>

<table style="border: 1px solid black;">
    <tr style="border: 1px solid black;">
        <th style="border: 1px solid black;">Usuario</th>
        <th style="border: 1px solid black;">Contraseña</th>
        <th style="border: 1px solid black;">Rol</th>
        <th style="border: 1px solid black;">Modificar</th>
    </tr>
     <!-- "Pintar" las tuplas de base de datos -->
     <?php
     foreach($tupla as $row):
        echo "<tr style=\"border: 1px solid black;\">
                  <td style=\"border: 1px solid black;\">".$row["usuario"]."</td>
                  <td style=\"border: 1px solid black;\">".$row["contrasenia"]."</td>
                  <td style=\"border: 1px solid black;\">".$row["rol"]."</td>
                  <td style=\"border: 1px solid black;\"><a href=\"\">Modificar</a></td>
              </tr>";
     endforeach;   
     ?>
</table>