<html>
<title>Validacion dni</title>
    
<?php
$dni = $_GET['dni'];

function validarDNI($dni) {
    $dni = strtoupper($dni); // Convertir la letra del DNI a mayúscula
    $longitud = strlen($dni);

    // Comprobar la longitud del DNI
    if ($longitud < 9) {
        return "El DNI es muy corto, asegúrese de introducirlo correctamente.";
    } elseif ($longitud > 9) {
        return "El DNI es muy largo, asegúrese de introducirlo correctamente.";
    }

    // Expresión regular para validar el formato del DNI
    $patron = '/^[0-9]{8}[A-Z]$/';

    // Comprobar si el formato es válido
    if (!preg_match($patron, $dni)) {
        return "El formato del DNI es incorrecto, asegúrese de introducirlo correctamente.";
    }

    $letra = substr($dni, -1); // Obtener la letra del DNI
    $numero = substr($dni, 0, 8); // Obtener el número del DNI
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE"; // Letras de validación

    // Calcular la letra correcta para el número
    $indice = $numero % 23;
    $letra_correcta = $letras[$indice];

    // Comprobar si la letra del DNI es válida
    if ($letra != $letra_correcta) {
        return "La letra del DNI no es correcta, asegúrese de introducirla correctamente.";
    }

    return "El DNI es válido";
}

$numeroDNI = $dni;
$validacion = validarDNI($numeroDNI);
echo $validacion;
?>


    
 

















</html>
