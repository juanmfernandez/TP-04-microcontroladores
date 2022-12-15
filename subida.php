<?php

require 'conexion.php';
session_start();

$apiKeyValue = "edutech";

$apiKey = $_POST['api_key'];
$temperatura = $_POST['temperatura'];
$humedad = $_POST['humedad'];

if ($apiKey == $apiKeyValue) {
    $consulta = "INSERT INTO juan_manuel_fernandez(tempc, hum) VALUES ('$temperatura','$humedad')";
    $resultado = mysqli_query($conexion, $consulta);
    if (!$resultado) {
        echo "Error al guardar en DB";
    }
    mysqli_close($conexion);
    echo "Datos agregados correctamente";
} else echo "API_KEY ERROR or data missing";
