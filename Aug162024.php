<?php

// PHP Shorthand if Statements
// Short Hand If
$a = 5;
if($a<10) $b = "Aptech";

//Ternary Operators, or Conditional Expressions
$b = $a < 10 ? "Aptech" : "";

// PHP Nested if Statement
// Nested If

$fingurePrint = true;
$keypass = 123;

// if($fingurePrint) { 
//     if($keypass == 1234) {
//         echo "<p>open the door</p>";
//     }else {
//         echo "$keypass is incorrect";
//     }
// }else {
//     echo "<p>fingureprint missmatch</p>";
// }

if($fingurePrint && $keypass == 1234) {
    echo "<p>Open the door</p>";
}else {
    echo "<p>fingureprint or keypass is invalid</p>";
}

// PHP Multi-if and switch Statement

$num1 = 15;
$num2 = 5;

$op = 5;

// if($op == 1) {
//     echo "<p>$num1 + $num2 = ".$num1+$num2."</p>";
// }
// if($op == 2) {
//     echo "<p>$num1 - $num2 = ".$num1-$num2."</p>";
// }
// if($op == 3) {
//     echo "<p>$num1 * $num2 = ".$num1*$num2."</p>";
// }
// if($op == 4) {
//     echo "<p>$num1 / $num2 = ".$num1/$num2."</p>";
// }
// if($op<1 || $op>4) {
//     echo "<p>Invalid Option!</p>";
// }

switch($op) {
    case 1:
        echo "<p>$num1 + $num2 = ".$num1+$num2."</p>";
    break;
    case 2:
        echo "<p>$num1 - $num2 = ".$num1-$num2."</p>";
    break;
    case 3:
        echo "<p>$num1 * $num2 = ".$num1*$num2."</p>";
    break;
    case 4:
        echo "<p>$num1 / $num2 = ".$num1/$num2."</p>";
    break;
    default:
        echo "<p>Invalid Option!</p>";
    break;
}