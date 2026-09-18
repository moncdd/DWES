<?php
/*
Escribe un script PHP que devuelva como resultado una página web con el siguiente contenido:
Mañana aprenderé las variables globales de PHP.
Este es un comando incorrecto: del c:\*.*
Ampliación: busca la forma de que se muestren también con el mismo formato (negrita y cursiva).
Ampliación II: busca qué es la sintaxis heredoc y cómo se utiliza. Pruébala en un script.
*/
?>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
            echo "<p>Mañana aprenderé las <strong>variables globales de PHP.</strong></p>";
            echo "<p><em>Este es un comando incorrecto: del c:\*.*</em></p>";

            // Con sintaxis heredoc
            echo <<<EOT
            Mañana aprenderé las <strong>variables globales de PHP.</strong><br/>
            <em>Este es un comando incorrecto: del c:\*.*</em>
            EOT;
        ?>
    </body>
</html> 

