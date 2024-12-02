<?php 

$server = 'localhost';
$user= 'root';
$pass= '';
$db= 'test';

$koneksi = mysqli_connect($server, $user, $pass, $db);
if(!$koneksi){
    die("Database Not Connect");
}


?>