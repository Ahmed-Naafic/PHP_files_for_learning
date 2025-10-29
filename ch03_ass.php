<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my php</title>
</head>
<body>
<h1>Class: CA226</h1>
<h2>ID: C1220696</h2>
<h3>Name: Ahmednor Mahad Ahmed</h3>
 <?php

 // question 1: greatest and smallest integer number




 
 echo "question 1 -------------------------------------</br>";

     $num1= 2;
     $num2= 5;  
     $num3= 16;
     $greatest= $num1;
     $smallest=$num1;

   if ($num2>$greatest) { 
      $greatest=$num2;
   }
   if ($num3>$greatest) {
    $greatest=$num3;
   }
   if ($num2<$smallest) {   
    $smallest=$num2;
   }

   if ($num3<$smallest) {
    $smallest=$num3;
   }

   echo "the greatest integer number is: $greatest </br>";
   echo "the smallest integer number is: $smallest </br>";

   // question 2: reverse of a given number
echo "</br>question 2 : reverse of a given number -------------------------------------</br>";

 
// Program to find the reverse of a given number using for loop

$number = 4565;  // You can change this number
$reverse = 0;

// Copy the number into a temporary variable
$temp = $number;

// Find the number of digits
$count = 0;
for ($i = $temp; $i > 0; $i = (int)($i / 10)) {
    $count++;
}

// Reverse the number using for loop
for ($i = 0; $i < $count; $i++) {
    $remainder = $temp % 10;
    $reverse = ($reverse * 10) + $remainder;
    $temp = (int)($temp / 10);
}

echo " The reverse of $number is: $reverse";

   

//    question 3 : odd numbers from 1 to 20
       echo " </br> question 3------------------------------------- </br>";

       $i=1;
       $num=0;
       do {
        if ($i%2!== 0) 
            echo "   $i </br>";
        $i++;
       } while ($i<20);
       

       //question 4 : all factors of  a numbers
       echo "question 4-------------------------------------<br/>";
       $i= 1;
       $num= 42;
       while( $i<= $num){
        if ($num%$i== 0)
            echo "$i,";
        $i++;
       }
// question 5 : the LCM of two positive numbers 
 echo "</br> question 5-------------------------------------<br/>";
     $num1=6;
     $num2= 8;
     $i=1;
     do {   
        if ($i%$num1== 0 && $i%$num2==0)
            echo " $i </br>";
        $i++;
     } while ($i< $num1*$num2);

     //    question 6 :whether the number is prime or no

      echo "question 6: whether the number is prime or not-------------------------------------<br/>";
   
$number = 15; // You can change this number

$i = 2; // Start checking from 2
$isPrime = true; // Assume number is prime

if ($number <= 1) {
    $isPrime = false; // Numbers <= 1 are not prime
}

while ($i <= $number / 2) {
    if ($number % $i == 0) {
        $isPrime = false; // Found a divisor
        break; // Exit loop early
    }
    $i++;
}

if ($isPrime)
    echo "$number is a Prime number.";
else
    echo "$number is NOT a Prime number.";

//    question 6 :Multiplication Table

echo "</br> question 7: Multiplication Table-------------------------------------<br/>";


echo "<h3>Multiplication Table (1 to 12)</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";

$i = 1; // Row counter

// Outer loop using do...while
do {
    echo "<tr>";
    // Inner loop using for
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
    $i++;
} while ($i <= 12);

echo "</table>";



    ?>
    
</body>
</html>