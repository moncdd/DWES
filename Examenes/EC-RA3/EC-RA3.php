<?php

// Array inicial de tareas
$tareas = array(
    "Tarea 1" => "pendiente",
    "Tarea 2" => "realizada",
    "Tarea 3" => "pendiente"
);

// Función para comprobar si una tarea existe
function existeTarea($tareas, $nombre) {
    foreach($tareas as $key=>$val)
    {
        if($nombre==$key) return true;
    }
    return false;
    // return isset($tareas[$nombre]);
}

// Comprobar si se ha enviado el formulario
if (isset($_POST["enviar"]) && $_SERVER["REQUEST_METHOD"] === "POST") {

    // Recuperar los datos del formulario
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"]))
        $nombre = $_POST["nombre"];
    else $mensaje = "El nombre de la tarea no puede estar vacío.";

    if(isset($_POST["estado"]) && !empty($_POST["estado"]))
        $estado = $_POST["estado"];
    else $mensaje = "La tarea no puede estar vacía.";

    // Comprobar si la tarea ya existe
    if (existeTarea($tareas, $nombre)) 
    {
        // Actualizar el estado de la tarea
        $mensaje = "La tarea ya existe. Se ha actualizado su estado.";
    } 
    else 
    {
        // Añadir una nueva tarea
        $mensaje = "Tarea añadida correctamente.";
    }

    // Añadir o actualizar la tarea
    $tareas[$nombre] = $estado;

}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Lista de tareas</title>
    </head>
    <body>

        <h1>Mi lista de tareas</h1>

        <h2>Tareas registradas</h2>

        <?php // Comprobar si hay tareas
            if (count($tareas) == 0):
        ?> 
        <p>No hay tareas registradas.</p>
        <?php
            else:
        ?>
            <table style="border: 1px solid black;">;
            <tr><th>Tarea</th><th>Estado</th></tr>";
        <?php
            // Recorrer el array y mostrar las tareas
            foreach ($tareas as $nombre => $estado) {
        ?>
            <tr>
                <td><?= $nombre; ?></td>
                <td><?= $estado; ?></td>
            </tr>
        <?php } ?>
        
            </table>
        <?php endif; ?>

        <h2>Añadir o actualizar tarea</h2>

        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">

            <label>Nombre de la tarea:</label>
            <input type="text" name="nombre">

            <br><br>

            <label>Estado:</label>

            <select name="estado">
                <option value="pendiente">Pendiente</option>
                <option value="realizada">Realizada</option>
            </select>

            <br><br>

            <input type="submit" name="enviar" value="Guardar">

        </form>

        <?php

        // Mostrar mensajes al usuario
        if (isset($mensaje)) {
        ?>    
            <p><?= $mensaje; ?></p>
        <?php } ?>

    </body>
</html> 