<?php 

/*
 * Estructuras de control
 */

// if
if (true) {
    echo "La condición es verdadera <br>";
}

// if-else
if (false) {
    echo "La condición es verdadera <br>";
} else {
    echo "La condición es falsa <br>";
}

// if-elseif-else
$numero = 10;
if ($numero > 0) {
    echo "El número es positivo <br>";
} elseif ($numero < 0) {
    echo "El número es negativo <br>";
} else {
    echo "El número es cero <br>";
}

// switch
$color = "rojo";
switch ($color) {
    case "rojo":
        echo "El color es rojo <br>";
        break;
    case "verde":
        echo "El color es verde <br>";
        break;
    default:
        echo "El color es azul <br>";          
}

// while
$contador = 0;
while ($contador < 5) {
    echo "Contador: $contador <br>";
    $contador++;
}

// do-while
$contador = 0;
do {
    echo "Contador: $contador <br>";    
    $contador++;
} while ($contador < 5);

// for
for ($i = 0; $i < 5; $i++) {
    echo "Contador: $i <br>";
}

// break
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "Contador: $i <br>";
}   

// continue
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo "Contador: $i <br>";
}       


?>