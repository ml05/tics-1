<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

// include 'hola.php';

$datos = (new MongoDB\Client)->mydb->arduino;
// America/New_York misma zona horaria de chile
date_default_timezone_set("America/New_York"); 

$diaActual = date("Y/m/d");

$dataFinal = $datos->find(['dia' => $diaActual]);

$hora;
$humedad;
$tempExt;
$tempInt;
$caudal;
$consumo;
$periodo;




foreach ($dataFinal as $d) {
    
    $hora = $d['hora'];
    $periodo = $d['periodo'];
    $humedad = $d['humedad'];
    $tempExt = $d['tempExt'];
    $tempInt = $d['tempInt'];
    $caudal = $d['caudal'];
    $consumo = $d['consumo'];

}

// $filter = array();
// $options = array(
//     "sort" => array('dia' => -1),
// );

// $manager = new MongoDB\Driver\Manager("mongodb://localhost");
// $query = new MongoDB\Driver\Query($filter, $options);

// $result = $manager->executeQuery("mydb.arduino", $query);

// foreach ($result as $document) {
//     echo $document->hora . " \n";
// }

// datos tabla
// cada valor es por hora

$h1 = 0;
$dataFinal = $datos->find(['periodo' => '23']);
foreach ($dataFinal as $d) {
    $h1 = $d['consumo'];

}
$h2 = 0;
$dataFinal = $datos->find(['periodo' => '00']);
foreach ($dataFinal as $d) {
    $h2 = $d['consumo'] ?? 0;

}
$h3 = 0;
// $dataFinal = $datos->find(['periodo' => '10']);
// foreach ($dataFinal as $d) {
//     $h3 = $d['consumo'] ?? 0;
// }
$h4 = 0;
// $dataFinal = $datos->find(['periodo' => '11']);
// foreach ($dataFinal as $d) {
//     $h4 = $d['consumo'] ?? 0;
// }
$h5 = 0;
// $dataFinal = $datos->find(['periodo' => '12']);
// foreach ($dataFinal as $d) {
//     $h5 = $d['consumo'] ?? 0;
// }
$h6 = 0;
// $dataFinal = $datos->find(['periodo' => '13']);
// foreach ($dataFinal as $d) {
//     $h6 = $d['consumo'] ?? 0;
// }






?>