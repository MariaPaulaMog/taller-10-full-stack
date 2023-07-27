<?php
// DECLARACIÓN DE VARIABLES DE ENTRADA
const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

// PROCESO
echo "Ingrese su tipo de afiliación (A, B, C o D): ";
fscanf(STDIN, "%s", $membershipType);

echo "Ingrese el número de personas: ";
fscanf(STDIN, "%d", $personNumber);

$totalPay = $personNumber * TICKET_PRICE;

// Aplicar descuento según el tipo de afiliación
switch ($membershipType) {
    case 'A':
        $descuento = 0.3;
        break;
    case 'B':
        $descuento = 0.25;
        break;
    case 'C':
        $descuento = 0.1;
        break;
    case 'D':
        $descuento = 0.05;
        break;
    default:
        $descuento = 0; // No se aplica descuento si no es un tipo válido
}

if ($descuento > 0) {
    $descuentoAplicado = $totalPay * $descuento;
    $totalPay -= $descuentoAplicado;
    echo "Se ha aplicado un descuento del " . ($descuento * 100) . "% por su membresía.\n";
} else {
    echo "Tipo de afiliación no válido. No se aplicará descuento.\n";
}

// Mostrar el total a pagar con o sin descuento
echo "Total a pagar: $totalPay\n";
?>