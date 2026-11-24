<?php

$tuplas = array();

if(($fp = fopen("MisDatos.csv", "r")) !== FALSE) {
   while (($datos = fgetcsv($fp,null,";")) !== FALSE) {
      $tuplas[] = array($datos);
   }
   fclose($fp);

   for($i=1;$i<count($tuplas);$i++)
   {
      foreach($tuplas[$i] as $row)
      {
         echo $row[0]." ".$row[1]." ".$row[2];
      }
      echo "<br>";
   }
   //var_dump($tuplas);
}
?>