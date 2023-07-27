<?php
// DECLARACIÓN DE VARIABLES DE ENTRADA
$nombre = "";
$edad = 0;

// PROCESO
echo "Ingrese su nombre: ";
fscanf(STDIN, "%s", $nombre);

echo "Ingrese su edad: ";
fscanf(STDIN, "%d", $edad);

// Generar el mensaje y verificar si es mayor de edad
if ($edad >= 18) {
    echo "Hola, $nombre. Usted es mayor de edad.\n";
} else {
    echo "Hola, $nombre. Usted no es mayor de edad.\n";
}
?>