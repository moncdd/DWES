<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 8 bis</title>
   </head>
   <body>
      <form action="Ejercicio2bisb.php">
         <label for="numero">Escribe un número</label>
         <input type="number" name="numero" min="1" value="<?php if(isset($_GET['numero'])) echo $_GET['numero'];?>"/><br/>
         <input type="submit" name="enviar"/>
      </form>
   </body>
</html>

