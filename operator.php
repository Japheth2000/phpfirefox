<?php
// Operators are used to perform operations on variables and values
//arithmetic operators
$x=20;
$y=30;
echo "<br>";
var_dump($x+$y);
echo "<br>";
var_dump($x-$y);
echo "<br>";
var_dump($x*$y);
echo "<br>";
var_dump($x/$y);
echo "<br>";
var_dump($x%$y);
echo "<br>";
var_dump($x**$y);
echo "<br>";

//assignment operators
$x=40;
$y=20;
echo "<br>";
var_dump($x=$y);
echo "<br>";
var_dump($x+=$y);
echo "<br>";
var_dump($x-=$y);
echo "<br>";
var_dump($x*=$y);
echo "<br>";
var_dump($x/=$y);
echo "<br>";
var_dump($x%=$y);
echo "<br>";

//comparison operators
$x=50;
$y=15;
echo "<br>";
var_dump($x==$y);
echo "<br>";
var_dump($x===$y);
echo "<br>";
var_dump($x!=$y);
echo "<br>";
var_dump($x<>$y);
echo "<br>";
var_dump($x!==$y);
echo "<br>";
var_dump($x>$y);
echo "<br>";
var_dump($x<$y);
echo "<br>";
var_dump($x>=$y);
echo "<br>";

//increment/ decrement operators
$x=60;
echo "<br>";
var_dump(++$x);
echo "<br>";
var_dump($x++);
echo "<br>";
var_dump(--$x);
echo "<br>";
var_dump($x--);
echo "<br>";

//logical operators
$x=100;
$y=50;

var_dump($x<$y and $x>=$y);

