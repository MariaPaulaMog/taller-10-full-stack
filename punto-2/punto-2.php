<?php
// Definir las constantes
define('NUMERO1', 5);
define('NUMERO2', 10);

// Definir la variable
$variable = 0;

// Sumar los números utilizando las constantes y guardar el resultado en la variable
$variable = NUMERO1 + NUMERO2;

// Mostrar el resultado de la primera suma
echo "Resultado de la primera suma: " . $variable . "\n";

// Cambiar el valor de la variable y sumar los números nuevamente
$variable = 15; // Cambiar el valor de la variable a cualquier número que desees

// Realizar la segunda suma
$variable = $variable + NUMERO1 + NUMERO2;

// Mostrar el resultado de la segunda suma
echo "Resultado de la segunda suma: " . $variable;
?>