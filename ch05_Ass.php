!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ID: C1220696</h1>
    <h1>Name: Ahmednor Mahad Ahmed</h1>
    <h1>Class: CA226</h1>
    <?php 

        echo "Q1=======================================<br/>";
        function convertToBase($number, $base){
            $digits = '0123456789ABCDEF';

            if ($number== 0) {
                return 0;
            };

            $result = "";

            while ($number> 0) {
                $remainder = $number % $base;
                $result = $digits[$remainder].$result;
                $number = ($number - $remainder)/ $base;
            }
            return $result;

        }
        $decimal = 255;
        echo "Binary : ".convertToBase($decimal, 2) . "<br/>";
        echo "Octal : ".convertToBase($decimal, 8) . "<br/>";
        echo "Hexadecimal : ".convertToBase($decimal, 16) . "<br/>";


        echo "Q2=======================================<br/>";

        // a
        echo "------------------------------- A <br/>";
        $numbers = array(4, -7, 11, 10, 8, 11, -6, 11, 1, -7, 3, 7);
        // b
        function printArrayElements($arr){
            echo "Array Elements are : <br/>";
            for($i = 0; $i<count($arr); $i++){
                echo $arr[$i]. "<br/>";
            }
        }

        printArrayElements($numbers);

        // c
        echo "--------------------------------- C <br/>";

        function printFibonacci($n){
            $a = 0;
            $b = 1;
            $count =0;
            do {
                echo $a . "  ";
                $next = $a + $b;
                $a = $b;
                $b = $next;
                $count++;

            } while ($count< $n);
        }

        printFibonacci(10);

        echo "<br/>--------------------------------- D <br/>";
        function checkPrime($num) {
            if ($num <= 1) {
                echo "$num is NOT a prime number.<br>";
                return;
            }
        
            $isPrime = true; 
        
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $isPrime = false; 
                    break;
                }
            }
        
            if ($isPrime) {
                echo "$num is a PRIME number.<br>";
            } else {
                echo "$num is NOT a prime number.<br>";
            }
        }
        
        checkPrime(7);
        checkPrime(10);
        checkPrime(23);

        echo "Q3=======================================<br/>";

        function printPrimeBetween($start, $end) {
            echo "Prime numbers between $start and $end are:<br>";
        
            $num = $start;
        
            do {
                if ($num > 1) {
                    $isPrime = true;
                    $i = 2;
        
                    while ($i < $num) {
                        if ($num % $i == 0) {
                            $isPrime = false;
                            break;
                        }
                        $i++;
                    }
        
                    if ($isPrime) {
                        echo $num . " ";
                    }
                }
        
                $num++;
            } while ($num <= $end);
        }
        
        printPrimeBetween(10, 30);

    ?>
</body>
</html>