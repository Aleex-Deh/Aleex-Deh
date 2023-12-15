<?php
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$ano1 = 2050;
$ano2 = 2023;
$edadparasumar = $ano1 - $ano2;
$edadtotal = $edadparasumar + $edad;

echo "Hola $nombre.";
echo " Tienes $edadtotal años.";
?>




