<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>

<h1>functions  in PHP</h1>

<?php

//function definition
function writeMsg() {
    echo"hello world";
}

// factorial numbers

function factorial($a){
    $fact=0;
    $i=1;
    for($i=1; $i<=$a; $i++){  
       $fact*=$i;
    }
    echo "the factorial of $a is $fact";
}

factorial(5)




// passing and returning array



?>
    
</body>
</html>