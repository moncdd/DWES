<?php
/*
Ejercicio 8. Crea un formulario que pida al usuario un número.
Después, en otra página, recoge ese número y muestra la suma de todos los números pares anteriores a él.
Por ejemplo, si el usuario escribe el número 9 saldría por pantalla el número 20, resultado de sumar 2 + 4 + 6 + 8
Mejorar el resultado para que la página que muestra la suma, después muestre un enlace con el que regresar al formulario de modo que, al hacer clic en él, el cuadro de entrada del número muestre el último número introducido
*/
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 2 bis</title>
      <style>
         .error {
                    color: red; 
         }
         .acierto {
                    color: blue; 
         }
      </style>
   </head>
   <body>
      <?php
         //comprobamos si la página recibe el número
         if(isset($_GET["enviar"])){
            if(isset($_GET["numero"]) && !empty($_GET["numero"])){
               $numero = $_GET["numero"];
               if($numero > 1){
                  //alternativa bucle for
                  $suma = 0;
                  
                  for($i = 1; $i < $numero; $i++){
                     if($i % 2 == 0) $suma += $i; //sumamos el número par
                  }
                  
                  echo "<p class= 'acierto' >La suma de los números pares desde el 1 hasta el ".$numero." es ".$suma."</p> ";
               }      
            } else {
               echo "<p class= 'error' >Número erróneo</p> ";
            }
         }//fi enviar
      ?>
      <a href="Ejercicio2a.php?numero=<?php echo $_GET['numero'] ?>">Volver</a>
   </body>
</html>

