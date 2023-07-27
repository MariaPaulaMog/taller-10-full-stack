<?php
// DECLARACIÓN DE VARIABLES DE ENTRADA
$number = 0;

//PROCESO
echo "Ingrese un número para generar la tabla de multiplicar: ";
fscanf(STDIN, "%d", $number);

echo "Tabla de multiplicar del $number:\n";

for ($i = 0; $i <= 30; $i++) {
    $result = $number * $i;
    echo "$number X $i = $result\n";
}
?>