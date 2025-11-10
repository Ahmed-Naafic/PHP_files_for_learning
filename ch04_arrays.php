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
        };




        // associative arrays 
        //declare associative arrays

        $assocc = array(
            'name' => "Ahmed",
            'nickname' => "Naafic",
            'age' => 25,
            'sex' => "male"

        );

        // accessing and printing associative arrays using 
           // 1) print only favlues
        echo "<br> Associative array elements are:<br>";

        foreach ($assocc as $v){
            echo "$v , ";
        }

          // 2) printing keys and values
         echo "<br> Associative array elements keys:values<br>";
          foreach ($assocc as $keys => $values){
            echo " [$keys]:$values, <br>";
          }







    // Multi-Dimensional arrays
     // declare Multi-Dimensional Array

     $students = array(
        array("ahmed", 2000, "yaqshid", "619690404"),
        array("Mohamud", 1986, "shangani", "619565223"),
        array("Ali", 1990, "kaxda", "617898976"),
     );

     // accessing multidimensional array using nested foreach loop
     // printing only values
     echo "the students list are: <br> ";
     foreach($students as $s){
      echo " <pre>";
          foreach ($s as $v){
            echo "$v , ";
          }
     echo " <pre>";
     }

     //printing keys and values 

     echo "the keys and their values:<br>";
     foreach ($students as $key1 => $s){
         echo " <pre>";
        foreach ($s as $key2 => $v){
            echo "[$key1, $key2] : $v ,";
        }
         echo " </pre>";
     }

     //access one element 
    echo $students[0][2];




    // Two-Dimensional Associative array

    $products= array(
        'paper'=>array(
            'copier'=>"Copier & multi-purpose",
            'inkjet'=> "InkjetPrinter",
            'laser' => "laser Printer"
        ),
        'misc' =>array(
            'tape'=> "Sticky Tape",
            'glue' => "Adhesive",
            'Clips' => "PaperClips"
        )
    )
    ?>
    
</body>
</html>