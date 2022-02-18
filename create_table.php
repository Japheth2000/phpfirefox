<?php
$connection= new mysqli("localhost", "root", "", "firefox2");

// confirm if is connected to the database
if ($connection->connect_error){
    die("failed to connect to the database".$connection->connect_error);
} else{
    echo "successfully connected to the database";
}

// create table
$createtable = "CREATE TABLE class (
No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname VARCHAR(30) NOT NULL,
Lastname VARCHAR(30) NOT NULL,
Email VARCHAR(50),
Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($connection->query($createtable)=== TRUE){
    echo "Successfully created table";
} else {
    echo "failed to create table".$connection->error;
}
$connection->close();