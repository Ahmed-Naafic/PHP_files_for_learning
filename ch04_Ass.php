<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chapter 4 Assignment</title>
</head>
<body>
    <h1>NAME: Ahmednor Mahad Ahmed</h1>
    <h2>ID: C1220696</h2>
    <h3>Class: CA226</h3>


<?php

// question one 
echo"question one ---------------------------------------------1 </br>";

$number = 35;
   // the decimal number 
   echo"Decimal: $number </br>";
   //decimal to binary
   echo "binary: " .decbin($number)."</br>";
   //decimal to octal
   echo "octal:" .decoct($number) ."</br>";
   //decimal to hexadecimal
   echo "hexadecimal:".dechex($number) ."</br>";



//question two
echo"question two ---------------------------------------------2 </br>";
   // create associative array of students
   $students=array(
    "id"=>"c1220696",
    "Name"=>"Ahmednor Mahad Ahmed",
    "phone"=>"619690404",
    "Club"=>"Jamhuuriya" 
   );


// Print in a table
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Index</th><th>Value</th></tr>";
foreach($students as $index=>$value){
    echo "<tr>";
    echo "<td>$index</td><td>$value</td>";
    echo "</tr>";
}
echo "</table>";




//question three
echo"  question three---------------------------------------------------3</br>";


// Declare a two-dimensional associative array
$info = array(
    "Student" => array(
        "ID" => "STD201908001",
        "Name" => "Ahmednor Mahad Ahmed",
        "Description" => "Newly Admitted"
    ),
    "Course" => array(
        "ID" => "CRS201905003",
        "Name" => "Web Design and Development II (PHP)",
        "Description" => "Core course"
    ),
    "Lecturer" => array(
        "ID" => "LCT201904005",
        "Name" => "Abdisalaan Yusuf Abdi",
        "Description" => "Senior Lecturer"
    )
);

// Print table
echo "<table border='1' cellspacing='0' cellpadding='8' style='border-collapse: collapse; text-align:center;'>";
echo "<tr style='background-color:#ddd;'>
        <th></th>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>";

// Loop through rows
foreach ($info as $role => $details) {
    echo "<tr>";
    echo "<th style='background-color:#f2f2f2;'>$role</th>";
    foreach ($details as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";






// question 4
echo"  question four---------------------------------------------------4 </br>";
// 1) Declare and initialize array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

$rows = count($array);
$cols = count($array[0]);

$totalOdd = 0;
$totalEven = 0;
$totalAll = 0;
$rowTotals = [];
$colTotals = array_fill(0, $cols, 0);
$diag1 = 0; // main diagonal
$diag2 = 0; // secondary diagonal
$minVal = $array[0][0];
$maxVal = $array[0][0];
$minPos = [];
$maxPos = [];

// ---- Calculations ----
for ($i = 0; $i < $rows; $i++) {
    $rowTotals[$i] = 0;
    for ($j = 0; $j < $cols; $j++) {
        $val = $array[$i][$j];

        $rowTotals[$i] += $val;
        $colTotals[$j] += $val;

        if ($i == $j) $diag1 += $val; // main diagonal
        if ($i + $j == $rows - 1) $diag2 += $val; // secondary diagonal

        if ($val % 2 == 0)
            $totalEven++;
        else
            $totalOdd++;

        $totalAll += $val;

        if ($val < $minVal) {
            $minVal = $val;
            $minPos = [[$i, $j]];
        } elseif ($val == $minVal) {
            $minPos[] = [$i, $j];
        }

        if ($val > $maxVal) {
            $maxVal = $val;
            $maxPos = [[$i, $j]];
        } elseif ($val == $maxVal) {
            $maxPos[] = [$i, $j];
        }
    }
}

// ---- Output ----
echo "<table border='1' cellspacing='0' cellpadding='8' style='border-collapse: collapse; text-align:center;'>";
echo "<tr><td colspan='4' style='background:#e0e0e0; font-weight:bold;'>Total odd elements = $totalOdd</td></tr>";
echo "<tr><td colspan='4' style='background:#e0e0e0; font-weight:bold;'>Total even elements = $totalEven</td></tr>";
 // Print elements and row totals
for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $cols; $j++) {
        echo "<td>{$array[$i][$j]}</td>";
    }
    echo "<td style='background:#f2f2f2; font-weight:bold;'>{$rowTotals[$i]}</td>";
    echo "</tr>";
}

// Column totals row (include both diagonals)
echo "<tr>";
for ($j = 0; $j < $cols; $j++) {
    echo "<td style='background:#f2f2f2; font-weight:bold;'>{$colTotals[$j]}</td>";
}
echo "<td style='background:#f2f2f2; font-weight:bold;'>Diag1=$diag1<br>Diag2=$diag2</td>";
echo "</tr>";

// Total, min, and max info
echo "<tr><td colspan='4' style='background:#ddd; font-weight:bold;'>Total all elements = $totalAll</td></tr>";

echo "<tr><td colspan='4'>Min element is: $minVal in " . count($minPos) . " positions: ";
foreach ($minPos as $p) echo "[" . $p[0] . "," . $p[1] . "], ";
echo "</td></tr>";

echo "<tr><td colspan='4'>Max element is: $maxVal in " . count($maxPos) . " positions: ";
foreach ($maxPos as $p) echo "[" . $p[0] . "," . $p[1] . "], ";
echo "</td></tr>";

echo "</table>";   



?>
    
</body>
</html>