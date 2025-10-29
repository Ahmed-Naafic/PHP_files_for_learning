<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ass1</title>
</head>
<body>
    <?php
     $num1= 2;
     $num2= 3;  
     $num3= 4;
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

   echo`the greatest number is: $greatest`;


    ?>
    
</body>
</html>