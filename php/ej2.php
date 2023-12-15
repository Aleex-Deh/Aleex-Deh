<html>

<!-- Formulario de entrada -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="frase">Introduce una frase:</label>
    <input type="text" name="frase" id="frase" required>
    <br>
    <button type="submit">Contar Vocales</button>
</form>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar la frase después de que el formulario ha sido enviado
    $frase = $_POST["frase"];
    $vocales = array("a", "e", "i", "o", "u");






function contador($vocales) {
    // Inicializar un array para almacenar los resultados
    $resultados = array();

    // Realizar el bucle según la cantidad ingresada

        // Almacenar el número en el array de resultados
        $resultados[] = $numeroAleatorio;
    }

    // Devolver el array de resultados
    return $resultados;
}
?>




</html>
