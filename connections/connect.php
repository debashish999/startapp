<?php

$server = 'localhost';
$username = 'root';
$password = 'root';
$db = 'startwork';

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn){
    die('error'.mysqli_connect_error());
}






?>