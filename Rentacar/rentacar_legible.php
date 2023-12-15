<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración del documento HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentacars en Mallorca</title>

    <!-- Estilos y Scripts necesarios para el funcionamiento -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <style>
        /* Estilos CSS para el aspecto visual */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        h2 {
            margin-top: 20px;
        }

        /* Distribuir radio buttons en columnas */
        .radio-column {
            column-count: 2;
            column-gap: 20px;
        }

        .radio-column label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
    <script>
        // Funciones ejecutadas cuando el documento está listo
        $(document).ready(function () {
            // Configuración de DataTables
            var table = $('#resultados').DataTable({
                "paging": true,
                "ordering": true,
                "searching": true
            });

            // Manejadores de eventos para los botones de orden
            $('#ordenAlfabetico').on('click', function () {
                table.order([1, 'asc']).draw();
            });

            $('#ordenCochesMayorMenor').on('click', function () {
                table.order([3, 'desc']).draw();
            });

            $('#ordenCochesMenorMayor').on('click', function () {
                table.order([3, 'asc']).draw();
            });
        });
    </script>
</head>
<body>

<?php
// Cargar el XML con la información de rentacars en Mallorca
$url = "https://catalegdades.caib.cat/resource/rjfm-vxun.xml";
$dom = new DOMDocument;
$dom->load($url);

// Informar que el XML se ha cargado correctamente
echo "XML cargado correctamente. Puedes comenzar a procesarlo.";
?>

<!-- Formulario de búsqueda -->
<form method="post" action="">
    <!-- Entrada de texto para el término de búsqueda -->
    <label for="buscador">Introduzca el nombre pertinente o su nombre comercial:</label>
    <input type="text" id="buscador" name="buscador" placeholder="Ingrese término de búsqueda">

    <!-- Selección del municipio con radio buttons distribuidos en columnas -->
    <label>Seleccione el municipio:</label>
    <?php
    $municipios = [];
    foreach ($dom->getElementsByTagName('row') as $row) {
        $municipio = $row->getElementsByTagName('municipi')->item(0)->nodeValue;
        if (!in_array($municipio, $municipios)) {
            $municipios[] = $municipio;
        }
    }
    echo "<div class='radio-column'>";
    foreach ($municipios as $municipio) {
        echo "<label><input type='radio' name='municipio' value='$municipio'> $municipio</label> ";
    }
    echo "<label><input type='radio' name='municipio' value='todos'> Todos</label>";
    echo "</div>";
    ?>

    <!-- Selección del código postal mediante un menú desplegable -->
    <label for='codigo_postal'>Seleccione el código postal:</label>
    <select id='codigo_postal' name='codigo_postal'>
        <?php
        $codigos_postales = [];
        foreach ($dom->getElementsByTagName('row') as $row) {
            $direccion_completa = $row->getElementsByTagName('adre_a_de_l_establiment')->item(0)->nodeValue;

            if (preg_match('/\b(\d{5})\b/', $direccion_completa, $matches)) {
                $codigo_postal = $matches[1];

                if (!in_array($codigo_postal, $codigos_postales)) {
                    $codigos_postales[] = $codigo_postal;
                }
            }
        }

        // Generar opciones para códigos postales
        echo "<option value='todos'>Todos los códigos postales</option>";
        foreach ($codigos_postales as $codigo_postal) {
            echo "<option value='$codigo_postal'>$codigo_postal</option>";
        }
        ?>
    </select>

    <!-- Botones de ordenación y botón de búsqueda -->
    <button type="button" id="ordenAlfabetico">Ordenar Alfabéticamente</button>
    <button type="button" id="ordenCochesMayorMenor">Ordenar por Coches (Mayor a Menor)</button>
    <button type="button" id="ordenCochesMenorMayor">Ordenar por Coches (Menor a Mayor)</button>

    <input type="submit" value="Buscar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar el formulario y mostrar resultados
    $nombre_busqueda = isset($_POST['buscador']) ? strtolower($_POST['buscador']) : '';
    $municipio_filtro = isset($_POST['municipio']) ? $_POST['municipio'] : '';
    $codigo_postal_filtro = isset($_POST['codigo_postal']) ? $_POST['codigo_postal'] : '';

    echo "<h2>Resultados de la búsqueda:</h2>";
    $total_vehiculos = 0;

    // Crear tabla para mostrar resultados
    echo "<table id='resultados'>";
    echo "<thead>
            <tr>
                <th>Licencia de rentacar</th>
                <th>Nombre comercial</th>
                <th>Dirección completa</th>
                <th>Número de vehículos</th>
            </tr>
          </thead>
          <tbody>";

    foreach ($dom->getElementsByTagName('row') as $row) {
        $nombre_explotador = strtolower($row->getElementsByTagName('nom_explotador_s')->item(0)->nodeValue);

        if (
            (empty($nombre_busqueda) || stripos($nombre_explotador, $nombre_busqueda) !== false) &&
            (empty($municipio_filtro) || $municipio_filtro === 'todos' || $row->getElementsByTagName('municipi')->item(0)->nodeValue === $municipio_filtro) &&
            (empty($codigo_postal_filtro) || $codigo_postal_filtro === 'todos' ||
                (preg_match('/\b(\d{5})\b/', $row->getElementsByTagName('adre_a_de_l_establiment')->item(0)->nodeValue, $matches) &&
                $matches[1] == $codigo_postal_filtro))
        ) {
            // Mostrar resultados en la tabla
            $total_vehiculos += (int)$row->getElementsByTagName('nombre_de_vehicles')->item(0)->nodeValue;

            echo "<tr>
                    <td>{$row->getElementsByTagName('signatura')->item(0)->nodeValue}</td>
                    <td>{$row->getElementsByTagName('denominaci_comercial')->item(0)->nodeValue}</td>
                    <td>{$row->getElementsByTagName('adre_a_de_l_establiment')->item(0)->nodeValue}</td>
                    <td>{$row->getElementsByTagName('nombre_de_vehicles')->item(0)->nodeValue}</td>
                  </tr>";
        }
    }

    // Mostrar total de vehículos
    echo "<tr>
            <td colspan='3'>Total de vehículos</td>
            <td>$total_vehiculos</td>
          </tr>";

    echo "</tbody></table>";
}
?>

</body>
</html>
