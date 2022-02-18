<?php
// user defined function
function mycollege(){
    echo "My college is Emobilis Mobile Technology Institute";
}
mycollege();   // this is place to call the function inorder to display
echo "<br>";

// arguement function

function Firefoxnames($firstname,$lastname,$age){
    echo "My first name is $firstname and my second name is $lastname and $age years old <br>";
}
echo "<br>";

Firefoxnames("Japheth", "Zayn", "22");
Firefoxnames("Alvin", "Baranaba", "19");
Firefoxnames("Cynthia", "Grande", "17");
echo "<br>";

// assignment on arguement function
function Familynames ($names,$bloodgroup,$age){
    echo "The names are $names and the bloodgroup is $bloodgroup and $age years old <br>";
}
Familynames("Kennedy gori", "A+","56");
Familynames("Esther kennedy",'AB+', "50");
Familynames("Japheth Zayn","O+","28");
Familynames("Alvin Barnabas", "B+", "25");
Familynames("Cynthia Grande","O+","22");

echo "<br>";

