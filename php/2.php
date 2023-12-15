<?php
echo "Hola mon";

$Precio = "283";
$Precio = (int) $Precio;

$Rebaja = "15";
$Rebaja = (int) $Rebaja;

$operacion1 = $Precio / $Rebaja;
$operacion1 = (int) $operacion1;

$operacion2= $Precio - $operacion1;


echo "$operacion1 \n";
echo "$operacion2 \n";


$Nombre = "Alex";
$Nombre = (string) $Nombre;
echo "Benvingut a la programació PHP $Nombre \n";
echo $Nombre;



?>
