<?php
// stores multiple value in one single variable

// indexed arrays
$cars=array("volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] .  " . ";
echo "<br>";

//loop through an indexed arrays
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for ($x=0; $x< $arrlength; $x++){
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";

// associative arrays
$age =array("Japheth"=>"22", "Zayn"=>"30", "Japh"=>"25");
echo "Japheth is " . $age['Japheth'] . "  years old." ;

echo "<br>";
echo "<br>";
// loop through an associative array
$age =array("Japheth"=>"22", "Zayn"=>"30", "Japh"=>"25");

foreach ($age as $x=> $x_value){
    echo "key=" . $x . " value=" . $x_value;
    echo "<br>";
}

//multidimensional arrays

