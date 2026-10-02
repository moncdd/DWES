<?php
/*
Ejercicio 1. Crea una página PHP que muestre los números del 1 al 1000 pero de forma que aparezcan 
en 5 columnas y se lean de izquierda a derecha. Ejemplo de resultado (se muestran las primeras y 
las últimas filas) 
*/
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 1</title>      
   </head>
   <body>
      <table>
         <tr>
            <?php
               for($i=1;$i<1001;$i++){
                  echo '<td style="border: 1px solid black;">'.$i.'</td>';
                  //al llegar a la columna 5, saltamos de fila
                  if($i%5==0) echo '</tr><tr>';
               }//for
            ?>
         </tr>   
      </table>
   </body>
</html>

