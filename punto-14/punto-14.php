<?php
// FUNCIÓN PARA VALIDAR LA CONTRASEÑA
function validarContrasena($contrasena) {
    // Verificar si tiene 8 o más caracteres
    if (strlen($contrasena) < 8) {
        return false;
    }

    // Verificar si tiene al menos una letra mayúscula y al menos un número
    if (!preg_match('/[A-Z]/', $contrasena) || !preg_match('/[0-9]/', $contrasena)) {
        return false;
    }

    return true;
}

// DECLARACIÓN DE VARIABLES DE ENTRADA
$contrasenaUsuario = "";

//PROCESO
echo "Ingrese su contraseña: ";
fscanf(STDIN, "%s", $contrasenaUsuario);

// Validar la contraseña
if (validarContrasena($contrasenaUsuario)) {
    echo "La contraseña es segura.\n";
} else {
    echo "La contraseña no cumple con los criterios de seguridad.\n";
}
?>