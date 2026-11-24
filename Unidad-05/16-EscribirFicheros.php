<?php

$fp = fopen("miarchivo.txt", "a");
fwrite($fp, "Hola que tal");
fwrite($fp, ", ¿Cómo estás? \n");
fclose($fp);

?>