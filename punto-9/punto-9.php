<?php
// DECLARACIÓN DE VARIABLES DE ENTRADA
$number = 0;
$x = 0;

//PROCESO
echo "Escriba el número a multiplicar: ";
fscanf(STDIN,"%d", $number);

while($x <= 30) {
    $result = $number * $x;
    echo $number . " X " . $x . " = " . $result . "\n";
    $x++;
}

?>