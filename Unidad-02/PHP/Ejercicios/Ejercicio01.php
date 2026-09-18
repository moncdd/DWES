<?php
// Escribe un programa PHP para intercambiar dos variables. Se debe mostrar su valor antes y después del intercambio.

$a = 5;
$b = 10;

echo "Antes del intercambio: a = $a, b = $b<br>";

// Intercambio de variables
$temp = $a;
$a = $b;
$b = $temp;

echo "Después del intercambio: a = $a, b = $b<br>";
?>