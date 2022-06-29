<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//include_once("header.php");
session_start();
require_once __DIR__ . '/vendor/autoload.php';

$collection = (new MongoDB\Client)->mydb->users;

$usuario= $_POST["username"];
$pass= $_POST["pass"];

$users = $collection->find(['username'=>$usuario,'password'=>$pass]);
$count=0;

foreach($users as $u){
    $count++;
    $_SESSION['user'] = ['username' => $u['username'],'password' => $u['password'],'mail' => $u['mail']];
}

//LISTO: user/pass incorrecta.
//PENDIENTE:
if($count>0){
    header('Location: main.php');
}
else{
    header('Location: login-2.php?msg=Usuario o clave incorrecta');
}


?>