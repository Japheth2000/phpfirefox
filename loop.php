<?php
// while loop ( for increment)
$num1=6; //start her or you can call these initialize counter

while ($num1<=15){      // this is the condition
    echo "The number is: $num1<br>";
    $num1+=2;   // increase counter by the value of 2....
}
echo "<br>";

//while loop ( for decrement)
$num1= 40;

while ($num1>=10){
    echo "The number is $num1<br>";
    $num1-=5;
}
echo "<br>";

// do....while  loop (increment)
$num2=1;
do{
    echo "The number is: $num2<br>";
    $num2++;  // ++ means the value is increasing by 1...
}while ($num2<=5);
echo "<br>";

// do ....while loop (decrement)
$num2=10;
do{
    echo "The number is:$num2<br>";
    $num2--;   // -- means the value is decreasing by 1...
}while ($num2>=1);
echo "<br>";

//for loop
// init counter, test counter, increment or decrement counter

for($num3=20; $num3<=50; $num3+=5){
    echo "The number is $num3<br>";
}
