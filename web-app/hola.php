<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$datos = (new MongoDB\Client)->mydb->arduino;

date_default_timezone_set("America/New_York"); 

$dia = date("Y/m/d");
$hora = date("H:i:s");

$h = date("H");

$tempExterior = $_POST["tempext"] ?? 0;
$tempInterior = $_POST["tempint"] ?? 0;
$humedad = $_POST["humedad"] ?? 0;
$caudal = $_POST["caudal"] ?? 0;
$consumo = $_POST["consumo"] ?? 0;


$insertOneResult = $datos->insertOne([
    'dia' => $dia,
    'hora' => $hora,
    'tempExt' => $tempExterior,
    'tempInt' => $tempInterior,
    'humedad' => $humedad,
    'caudal' => $caudal,
    'consumo' => $consumo,
    'periodo' => $h
]);

?>
