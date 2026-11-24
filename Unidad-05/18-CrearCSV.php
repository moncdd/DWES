<?php

$faltas = array (
   array ("Animales","Jaula","Tipo"),
   array ("Perro","No","Mamífero"),
   array ("Delfín","No","Acuático")
   
);

if(($fp = fopen("MisDatos.csv", "c")) !== FALSE) {
    foreach ($faltas as $row){
       fputcsv($fp, $row,";");
    }
    fclose($fp);
}
?>