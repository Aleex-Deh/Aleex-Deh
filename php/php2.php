<?php
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$fecha = date("Y"); 

$edad_2050 = $edad + (2050 - $fecha)

echo '$nombre tendrá en el año 2050 la $edad de $edad_2050'   ;
?>
