<?php
include_once("Vehiculo.php");
$nuevaMoto = Vehiculo::crear("moto",2);

echo "La ".$nuevaMoto->getTipo() ." tiene " . $nuevaMoto->ruedas . " ruedas. <br>";

$nuevoCarro = Vehiculo::crear("carro",4);
echo "EL ".$nuevoCarro->getTipo() ." tiene " . $nuevoCarro->ruedas . " ruedas";
?>