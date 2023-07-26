<?php
// DECLARACIÓN DE VARIABLES DE ENTRADA
$firstName = "";
$lastName = "";

// PROCESO
echo "Ingresa tu nombre: ";
fscanf(STDIN, "%s", $firstName);

echo "Ingresa tu apellido: ";
fscanf(STDIN, "%s", $lastName);

echo "Hola, " . $firstName . " " . $lastName . "\n";
?>