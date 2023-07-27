<?php
// Inicializar la variable para almacenar la suma
$suma = 0;

//PROCESO
echo "Números pares del 0 al 100:\n";

for ($numero = 0; $numero <= 100; $numero += 2) {
    echo $numero . "\n";
    // Sumar el número actual a la variable $suma
    $suma += $numero;
}

echo "La suma de los números pares es: " . $suma . "\n";
?>

