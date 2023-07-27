<?php
// FUNCIÓN PARA REALIZAR LA SUMA
function sumar($num1, $num2) {
    return $num1 + $num2;
}

// FUNCIÓN PARA REALIZAR LA RESTA
function restar($num1, $num2) {
    return $num1 - $num2;
}

// FUNCIÓN PARA REALIZAR LA MULTIPLICACIÓN
function multiplicar($num1, $num2) {
    return $num1 * $num2;
}

// FUNCIÓN PARA REALIZAR LA DIVISIÓN
function dividir($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: No se puede dividir por cero.";
    }
}

// DECLARACIÓN DE VARIABLES DE ENTRADA
$num1 = 0;
$num2 = 0;
$operacion = "";

//PROCESO
echo "Ingrese el primer número: ";
fscanf(STDIN, "%f", $num1);

echo "Ingrese el segundo número: ";
fscanf(STDIN, "%f", $num2);

echo "Seleccione la operación a realizar (+ para suma, - para resta, * para multiplicación, / para división): ";
fscanf(STDIN, "%s", $operacion);

// Realizar la operación seleccionada
switch ($operacion) {
    case '+':
        $resultado = sumar($num1, $num2);
        break;
    case '-':
        $resultado = restar($num1, $num2);
        break;
    case '*':
        $resultado = multiplicar($num1, $num2);
        break;
    case '/':
        $resultado = dividir($num1, $num2);
        break;
    default:
        echo "Operación no válida.";
        exit; // Salir del programa si se ingresa una operación no válida
}

// Mostrar el resultado de la operación
echo "El resultado de la operación es: $resultado\n";
?>