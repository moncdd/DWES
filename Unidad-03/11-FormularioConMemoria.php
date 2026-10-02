<?php

$memoria = $_POST["memoria"] ?? "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["enviar"]))
    {
        if(isset($_POST["datos"]) && !empty($_POST["datos"]))
            $memoria .= $_POST["datos"]."#";
    }//fi enviar 
}//fi request_method
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulario con memoria</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="datos">Dato </label>
            <input type="text" id="datos" name="datos" required>
            <input type="hidden" id="memoria" name="memoria" value="<?= $memoria; ?>">
            <input type="submit" id="enviar" name="enviar" value="Enviar dato">
        </form>
        <?php if(!empty($memoria)): ?>
        <p>Listado</p>
        <ul>
            <?php 
               $memoria = substr($memoria, 0, -1); // quitamos el último #
               $arrListado = explode("#", $memoria);
               foreach($arrListado as $listado):
                  echo "<li>$listado</li>"; 
               endforeach;   
            ?>
        </ul>
        <?php endif; ?>
    </body>
</html>