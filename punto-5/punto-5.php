<?php
// DECLARACIÓN DE VARIABLES DE ENTRADA
const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

// PROCESO
echo "Ingrese su tipo de afiliación: ";
fscanf(STDIN, "%s", $membershipType);

echo "Ingrese el número de personas: ";
fscanf(STDIN, "%d", $personNumber);

$totalPay = $personNumber * TICKET_PRICE;

if ($membershipType == "A" || $membershipType == "B") {
    $totalPay = $totalPay - ($totalPay * 0.3);
} else {
    echo "Usted no cuenta con membresia valida para obtener un descuento";
}

// Mostrar el total a pagar con o sin descuento
echo "Total a pagar: $totalPay";
?>
