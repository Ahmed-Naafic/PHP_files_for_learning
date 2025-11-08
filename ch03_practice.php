<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>the date is 07/11/2025   9:17 pm</h1>

<?php

// IF STATEMENT
$a=2;
$b=3;
//  check if a is greater than b 
if($a>$b)
    echo " $a is greater than $b";
// check if a is less than b
if ($a<$b)
    echo "<br>$a is less than $b ";
// check if a is greater than or equal to b 
if ($a>=$b)
    echo ("<br>$a is greater than or equal to $b");
// check if a is less than or equal to b
if ($a<=$b)
    print'<br>$a is less than or equal to $b';


// IF...ELSE STATEMETS
$marks=60;

if($marks>=50)
    echo "<br>passed";
else
    print("failed");

// IF...ELSEIF...ELSE
$marks=-5;
if($marks>100)
    echo "<br>the marks cannot greater than 100";
else if($marks>=90)
    echo "<br>A+";
    
else if($marks>=80)
    echo "<br>B+";
else if ($marks>=70)
    echo "<br>C+";
else if($marks>=60)
    echo "<br>D+";
else if($marks>=50)
    echo "<br>E+";
else if($marks>=0)
    echo "<br>F";
else if($marks<0)
    echo "<br>marks cannot be negative";
else 
    echo " <br>invalid input";

// switch statemnts
// 1. Weekday Finder
$day=4;

switch($day){
case(1):
    echo "<br>monday";
    break;
case(2):
    echo "<br>tuesday";
    break;
case (3):
    echo "<br>wednesday";
    break;
case (4):
    echo "<br>thrusday";
    echo "<br> it is a university day";
    break;
case (5):
    echo "<br>friday";
   break;
case(6):
    echo "<br>satarday";
    break;
case(7):
    echo "<br>sunday";
    break;
default:
    echo "<br>invalid day";

}


//LOOPS
// while loop
echo "<br>display 1 upto 5";
$i=1;

while($i<=5){
    print("<br>$i");
    $i++;
}

echo "<br>display odd numbers between 5 and 20";
$j=5;

while($j<20){
    if($j%2!=0)
    print("<br> $j");
    $j++;

}

echo "<br> sum of the nmbers 1 to 5";
$sum=0;
$i=1;

while($i<=5){
    $sum+=$i;

    $i++;
    
}
echo "<br> the sum of the numbers from 1 to 5 is $sum ";

echo "<br> sum of the even numbers 1 to 10";
$sum=0;
$i=1;

while($i<=10){
    if($i%2==0)
    $sum+=$i;

    $i++;
    
}
echo "<br> the sum of the even numbers from 1 to 10 is $sum ";

?>
    
</body>
</html>