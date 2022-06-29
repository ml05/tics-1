<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
//require 'vendor/autoload.php'; // include Composer's autoloader

require_once __DIR__ . '/vendor/autoload.php';
$usuario= $_POST["username"];
$pass= $_POST["pass"];
$mail= $_POST["mail"];

$collection = (new MongoDB\Client)->mydb->users;

$usuarios = $collection->find([$usuario]);
$count=0;

foreach($usuarios as $u){
    $count++;
}

//LISTO: user/pass incorrecta. 
//PENDIENTE: nada
if($count==0){
    header('Location: main.php');
    $insertOneResult = $collection->insertOne([
        'username' => $usuario,
        'password' => $pass,
        'mail' => $mail
    ]);

    $_SESSION['user']= ['username' => $user['username'],'password' => $user['password'],'mail' => $user['mail']];;

}
else{
    header('Location: register-2.php?msg=Usuario ya existe');
}

?>