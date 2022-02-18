<?php
$my_server= "localhost";
$username= "root";
$pass= "";

// creating connection using object orientated way

$connect= new mysqli($my_server, $username, $pass);

// confirm if is connected to the database
if ($connect->connect_error){
    die("failed to connect to the database".$connect->connect_error);
} else{
    echo "successfully connected to the database";
}