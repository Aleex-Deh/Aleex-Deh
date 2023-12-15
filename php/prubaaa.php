<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha recibido la variable 'miVariable'
    if (isset($_POST['miVariable'])) {
        // Obtener el valor de 'miVariable' del formulario
        $valorInput = $_POST['miVariable'];

        // Validar si el valor es un número positivo
        if (is_numeric($valorInput) && $valorInput > 0) {
            // Llamar a la función nomFuncio y obtener los resultados
            $resultados = nomFuncio($valorInput);

            // Contar la frecuencia de cada número en el array de resultados
            $frecuencia = array_count_values($resultados);

            // Mostrar el valor ingresado y los resultados
            echo "<p>Usted ha tirado el dado $valorInput veces.</p>";
            echo "<p>Resultados:</p>";
            echo "<ul>";

            // Iterar sobre la frecuencia de cada número
            foreach ($frecuencia as $numero => $cantidad) {
                // Calcular el porcentaje de cada número
                $porcentaje = ($cantidad / $valorInput) * 100;

                // Mostrar el número, la cantidad de veces y el porcentaje
                echo "<li>Número $numero: $cantidad veces (Porcentaje: $porcentaje%)</li>";
            }

            echo "</ul>";
        } else {
            // Manejar el caso en el que el valor no es un número positivo
            echo "<p>Por favor, ingrese un número positivo mayor que cero.</p>";
        }
    } else {
        // Manejar el caso en el que 'miVariable' no está presente
        echo "<p>La variable 'miVariable' no está definida.</p>";
    }
}

// Función para simular las tiradas de un dado
function nomFuncio($cantidad) {
    // Inicializar un array para almacenar los resultados
    $resultados = array();

    // Realizar el bucle según la cantidad ingresada
    for ($i = 0; $i < $cantidad; $i++) {
        // Generar un número aleatorio del 1 al 6
        $numeroAleatorio = rand(1, 6);

        // Almacenar el número en el array de resultados
        $resultados[] = $numeroAleatorio;
    }

    // Devolver el array de resultados
    return $resultados;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirar Dado</title>
</head>
<body>

<!-- Formulario de entrada -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="miVariable">Introduzca las veces que ha de tirarse el dado:</label>
    <input type="number" id="miVariable" name="miVariable" required>
    <button type="submit">Mostrar Valor</button>
</form>

</body>
</html>
