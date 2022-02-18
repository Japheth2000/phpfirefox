<?php
// if statement...... if the time is less than 20,,,it says good day

$time = date("Hours");
if ($time<20) {
    echo "Have a good day!";
}
echo "<br>";
echo "<br>";


//if...else statement.... if the time is less than 20, says good day and more than 20, says goodnight

$time = date("Hours");

if ($time>"20") {
    echo "Have a good day!";
} else {
    echo "Have a goodnight!";
}
echo "<br>";
echo "<br>";

//if...elseif...else statement

$time = date("Hours");

if ($time<"10") {
    echo "Have a good morning!";
} elseif ($time<"20") {
    echo "Have a good day!";
} else {
    echo "Have a goodnight!";
}
