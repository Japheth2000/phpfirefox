<?php
// used to select one of many blocks of code to be executed
$favcolor= "red";

switch ($favcolor){
    case "red":
        echo "your favourite color is red";
        echo "<br>";
    case "blue":
        echo "Your favourite color is blue";
        echo "<br>";
    case "green":
        echo "Your favourite colour is green";
        echo "<br>";
    case "yellow":
        echo "Your favourite color is yellow";
    default:
        echo "your favourite color is neither red,blue, yellow nor green";
}


