<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=l., initial-scale=1.0">
    <title>Chapter 4 Array</title>
</head>
<body>
    <h1>chapter 4 array practice</h1>
    <?php
    // declare array
    $array=array("ahmed",25,"Jungale", true);
    echo "$array[0]";     

    // display array details using var_dump()     
      echo "<pre>";
         var_dump($array);
      echo"</pre>";

     // manually set index         
     
     $array= array(4=>"mohamed", 6=>26, 9=>"yaqshid");

     echo"<br>$array[6] <br/>";


     // printing array elements using for loop      
     $names=array("ahmed", "mohamed", "fatima", "husein");
     echo "Array elements are:<br>";
     for($i=0;  $i<count($names); $i++){
        echo "  $names[$i] , ";
     }

     // printing arrays with foreach loop    

     $numbers=array(2,3,-4,9,20,23);
     echo " <br>the numbers are :<br>";
     foreach ($numbers as $v){
         echo " $v , ";
     }

     // see what's inside an array using print_r() 

     echo "<pre>";
     print_r($numbers);
     echo "</pre>";

     // foreach loop
        $numbers = array(26, 11, 13, -4, 14, 17);
        foreach ($numbers as $value){
            echo" $value, ";
        }


        $person = array("name"=>"ahmed", "age"=>23, "address"=>"yaqshid");
        echo "<br> the person info are: <br>";
        foreach($person as $v){
            echo "$v , ";
        }
          // Getting Both Keys and Values
         echo "the keys and the values <br>";
        foreach ($person as $key=>$value){
            echo "<pre>";
            echo " $key : $value";
            echo "</pre>";
        }

        //Adding (Summing) the Elements of One Array
        $numbers = array(26, 11, 13, -4, 14, 17, 5, 52, 7, 9, 21, 32, 2, 4, 5);
        $total=0;
        foreach($numbers as $n){
            $total+=$n;
        }

        echo "<br>the total numbers are : $total ";

              // adding two arrays
        $array1 = array(1, 2, 3, 4, 5);
        $array2 = array(6, 7, 8, 9, 10);
        $array3 = array(); // empty array to store results
        for($i=0; $i<count($array1); $i++){
            $array3[$i]=$array1[$i]+$array2[$i];
        }


        echo "the elements in array3 are: <br>";

        foreach ($array3 as $a3){
            echo " $a3 , ";
        }
    ?>
    
</body>
</html>