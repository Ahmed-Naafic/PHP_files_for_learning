<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Magic Square</title>
</head>
<body>

<h1>Name: Ahmednor Mahad Ahmed</h1>
<h2>ID: C1220696</h2>
<h3>CLASS: CA226</h3>


  <?php


// Step 1: Define 9 consecutive numbers
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Step 2: Validation
if (count($numbers) != 9) {
    die("Error: The array must contain exactly 9 numbers.");
}

// Check if they are consecutive
sort($numbers);
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] - $numbers[$i - 1] != 1) {
        die("Error: The numbers are not consecutive.");
    }
}

// Step 3: Calculate key values
$total = array_sum($numbers);
$magic_constant = $total / 3;
$median = $numbers[4]; // middle number (5)

// Step 4: Use formulas to fill the magic square
$m = $median;
$a = $m + 1; // 6
$b = $m + 3; // 8
$c = $m - 3; // 2
$d = $m - 1; // 4

// Calculate other cells
$row1_mid = $magic_constant - ($a + $b); // 15 - (6+8) = 1
$row2_left = $magic_constant - ($a + $c); // 15 - (6+2) = 7
$row2_right = $magic_constant - ($b + $d); // 15 - (8+4) = 3
$row3_mid = $magic_constant - ($c + $d); // 15 - (2+4) = 9

// Step 5: Build the 3x3 square
$magicSquare = [
    [$a, $row1_mid, $b],   // 6 1 8
    [$row2_left, $m, $row2_right], // 7 5 3
    [$c, $row3_mid, $d]    // 2 9 4
];

// Step 6: Display output with table including "15" sides
echo "<h2 style='font-family:Arial;'>3 × 3 Magic Square</h2>";
echo "<p><b>Numbers:</b> " . implode(", ", $numbers) . "</p>";
echo "<p><b>Magic Constant:</b> $magic_constant</p>";
echo "<p><b>Median:</b> $median</p>";

echo "<table border='1' cellpadding='10' style='border-collapse:collapse;text-align:center;font-size:18px;'>";

// Top 15
echo "<tr><td colspan='5'><b>15&nbsp;&nbsp;15&nbsp;&nbsp;15&nbsp;&nbsp;15&nbsp;&nbsp;15</b></td></tr>";

// Row 1
echo "<tr>
<td><b>15</b></td>
<td>{$magicSquare[0][0]}</td>
<td>{$magicSquare[0][1]}</td>
<td>{$magicSquare[0][2]}</td>
<td><b>15</b></td>
</tr>";

// Row 2
echo "<tr>
<td><b>15</b></td>
<td>{$magicSquare[1][0]}</td>
<td>{$magicSquare[1][1]}</td>
<td>{$magicSquare[1][2]}</td>
<td><b>15</b></td>
</tr>";

// Row 3
echo "<tr>
<td><b>15</b></td>
<td>{$magicSquare[2][0]}</td>
<td>{$magicSquare[2][1]}</td>
<td>{$magicSquare[2][2]}</td>
<td><b>15</b></td>
</tr>";

// Bottom 15
echo "<tr><td colspan='5'><b>15&nbsp;&nbsp;15&nbsp;&nbsp;15&nbsp;&nbsp;15&nbsp;&nbsp;15</b></td></tr>";

echo "</table>";
?>

    
</body>
</html>