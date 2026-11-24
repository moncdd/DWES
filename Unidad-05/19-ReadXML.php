<?php 

$file = "usuarios2.xml";

$usuarios = new SimpleXMLElement($file,0, true);

if(!$usuarios){
   echo "No se ha podido cargar el archivo";
} else {
   // echo "El archivo se ha cargado correctamente";
   /*
   foreach ($usuarios as $usuario){
      echo 'Nombre: '.$usuario->nombre.'<br>';
      echo 'Apellido: '.$usuario->apellido.'<br>';
      echo 'Dirección: '.$usuario->direccion.'<br>';
      echo 'Ciudad: '.$usuario->ciudad.'<br>';
      echo 'País: '.$usuario->pais.'<br>';
      echo 'Teléfono: '.$usuario->contacto->telefono.'<br>';
      echo 'Url: '.$usuario->contacto->url.'<br>';
      echo 'Email: '.$usuario->contacto->email.'<br>';
      echo "<br>";
   }
   */
   
   
   echo "Nombre de usuario:" . $usuarios->usuario[0]->nombre . "<br>";
   foreach($usuarios->usuario[0]->contacto as $contacto) {
      switch((string) $contacto['tipo']){
         case 'telefono':
            echo "Telefono: " . $contacto . "<br>";
            break;
         case 'email':
            echo "Email: " . $contacto . "<br>";
      }
   }
   
}
?>