<?php
// PHP Math
echo(pi() . "<br>");

echo (min(25,35,24,8,20,16,19,17,31,21,27,14,7) . "<br>");
echo (max(25,35,24,8,20,16,19,17,31,21,27,14,7) . "<br>");

echo (abs(-315.789) . "<br>");
echo(sqrt(64) . "<br>");
echo(round(0.60) . "<br>");
echo(round(0.49) . "<br>");
echo(rand() . "<br>");
echo(rand(1, 50) . "<br>");

// PHP Constants

define("COMPANY_NAME","Aptech Learning");
define("ADDRESS","435/C/2, PECHS BLOCK 2 COMMERCIAL, NEAR LIBERTY CHOWK, TARIQ ROAD, KARACHI");
const MY_BOOK = "Learn HTML with examples";
define("STUDENTS", ["Sufiyan", "Maaz", "Rizwan", "Sameer", "Zubaida", "Areesha", "Muniba", "Nimrah", "Chand", "Ovaimir", "Hanzala", "Abdul Samad", "Ahmer"]);

echo COMPANY_NAME . "<br>";
echo ADDRESS . "<br>";
echo PHP_INT_MAX . "<br>";// php predifined constant
echo MY_BOOK . "<br>";
echo "<pre>";// we use pre tag to preserve the array structure otherwise html will eliminate the white spaces.
print_r(STUDENTS) ;// we use print_r to display all array elements.
echo "</pre>";
echo STUDENTS[2] . "<br>";

echo __FILE__ . "<br>";// php predifined magic constant
echo __DIR__ . "<br>";
echo __LINE__ . "<br>";

// PHP Operators
// 1. Arithmetic operators

$num1 = 15;
$num2 = 5;

echo "$num1 + $num2 = " . $num1 + $num2 . "<br>";
echo "$num1 - $num2 = " . $num1 - $num2 . "<br>";
echo "$num1 x $num2 = " . $num1 * $num2 . "<br>";
echo "$num1 / $num2 = " . $num1 / $num2 . "<br>";
echo "$num1 ^ $num2 = " . $num1 ** $num2 . "<br>";

// 2. Assignment operators