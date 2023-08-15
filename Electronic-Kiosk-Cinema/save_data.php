<?php
$value =0;
$value = $_GET["value"];

# Prepare the data
$data = sprintf("%s\n", $value);
# Save it
file_put_contents("data.txt", $data, FILE_APPEND);

$archivo = 'cobro.txt';
$datos = file($archivo);
$cobro = rtrim($datos[0]);

$retorno = $value - $cobro;

file_put_contents("cobro.txt","");

sleep(4);

echo $retorno;
