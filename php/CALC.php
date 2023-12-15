<?php
$operador1 = $_GET['operador1'];
$operador2 = $_GET['operador2'];
$operacion = $_GET['operacion'];

if (is_numeric($operador1) && is_numeric($operador2)) {
    $resultado = 0;

    switch ($operacion) {
        case 'suma':
            $resultado = $operador1 + $operador2;
            break;
        case 'resta':
            $resultado = $operador1 - $operador2;
            break;
        case 'multiplicacion':
            $resultado = $operador1 * $operador2;
            break;
        case 'division':
            if ($operador2 != 0) {
                $resultado = $operador1 / $operador2;
            } else {
                echo "No se puede dividir por cero.";
                exit;
            }
            break;
        default:
            echo "Operación no válida. Debes seleccionar suma, resta, multiplicacion o division.";
            exit;
    }
} else {
    echo "Los operadores deben ser números válidos.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .result-box {
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <h1>Resultado</h1>
        <p>El resultado de <?php echo $operacion; ?> entre <?php echo $operador1; ?> y <?php echo $operador2; ?> es: <?php echo $resultado; ?></p>
    </div>
</body>
</html>
