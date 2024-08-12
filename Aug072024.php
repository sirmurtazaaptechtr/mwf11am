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

$x = 15;
$y = 2;

echo "<p>(x,y) = ($x,$y)</p>";

$x = $y;
echo "<p>(x,y) = ($x,$y)</p>";

$x += $y;// $x = $x + $y;
echo "<p>(x,y) = ($x,$y)</p>";

// 3. PHP Comparison Operators

echo "<pre>$x > $y = ";
var_dump($x > $y); 
echo "</pre>";

echo "<pre>$x < $y = ";
var_dump($x < $y); 
echo "</pre>";

echo "<pre>$x >= $y = ";
var_dump($x >= $y); 
echo "</pre>";

echo "<pre>$x <= $y = ";
var_dump($x <= $y); 
echo "</pre>";

$y = "4";

echo "<pre>$x == $y = ";
var_dump($x == $y); 
echo "</pre>";

echo "<pre>$x != $y = ";
var_dump($x != $y); 
echo "</pre>";

echo "<pre>$x <> $y = ";
var_dump($x <> $y); 
echo "</pre>";

echo "<pre>$x === $y = ";
var_dump($x === $y); 
echo "</pre>";

echo "<pre>$x !== $y = ";
var_dump($x !== $y); 
echo "</pre>";

echo "<pre>$x <=> $y = ";
var_dump($x <=> $y); 
echo "</pre>";

$y = 2;

echo "<pre>$x <=> $y = ";
var_dump($x <=> $y); 
echo "</pre>";

$y = 6;

echo "<pre>$x <=> $y = ";
var_dump($x <=> $y); 
echo "</pre>";

// 4. PHP Increment / Decrement Operators

$x = 1;
$y = 1;

echo "<p>($x,$y)</p>";
//$z = $x + ++$y; // pre-increment
$z = $x + $y++; // post-increment
echo "<p>$z</p>";
echo "<p>($x,$y)</p>";

// 5. PHP Logical Operators
echo "<pre>true && true = ";
var_dump(true && true); 
echo "</pre>";
echo "<pre>true && false = ";
var_dump(true && false); 
echo "</pre>";
echo "<pre>false && true = ";
var_dump(false && true); 
echo "</pre>";
echo "<pre>false && false = ";
var_dump(false && false); 
echo "</pre>";

echo "<pre>true || true = ";
var_dump(true || true); 
echo "</pre>";
echo "<pre>true || false = ";
var_dump(true || false); 
echo "</pre>";
echo "<pre>false || true = ";
var_dump(false || true); 
echo "</pre>";
echo "<pre>false || false = ";
var_dump(false || false); 
echo "</pre>";

echo "<pre>true xor true = ";
var_dump(true xor true); 
echo "</pre>";
echo "<pre>true xor false = ";
var_dump(true xor false); 
echo "</pre>";
echo "<pre>false xor true = ";
var_dump(false xor true); 
echo "</pre>";
echo "<pre>false xor false = ";
var_dump(false xor false); 
echo "</pre>";

// 6. PHP String Operators
$text1 = "Aptech";
$text2 = "Learning";

echo "</p>" . $text1 . " " . $text2 . "</p>";

$text3 = '';
$text3 .= $text1;
$text3 .= " ";
$text3 .= $text2;

echo "<p>$text3</p>";

// 7. PHP Conditional Assignment Operators
$data4mdb = NULL;
$data4mdb = 18;
$data = $data4mdb ?? 0;
$res = $data/2;
echo "<p>$res</p>";

