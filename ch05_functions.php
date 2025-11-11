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
    echo"hello world <br>";
}

writeMsg();


// a function with argument

function greet($name){
    echo " <br>hello, $name!";
}
 
greet("Ahmed ");





// factorial of a  numbers

function factorial($a){
    $fact=1;
    for($i=2; $i<=$a; $i++)
        $fact*=$i;
    echo " <br>the factorial of $a is: $fact";
}

factorial(5)




// passing and returning array



?>
    
</body>
</html>