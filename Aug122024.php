<?php
//1. PHP if Statements (PHP Conditional Statements)
// if & else

$num = 11;
$rem = $num % 2;
if($rem == 0) {
    echo "<p>$num is Even</p>";
}else {
    echo "<p>$num is Odd</p>";
}

$maxmarks = 75;
$obtmarks = 50;

$percentage = round($obtmarks/$maxmarks * 100,2);

if($percentage >= 40) {
    echo "<p>You have successfully passed the exam with $percentage% marks</p>";
}else {
    echo "<p>You failed the exam and just got $percentage% marks</p>";
}
// elseif

if($percentage >= 80) {
    echo "<p>Grade : A+</p>";
}elseif($percentage >= 70) {
    echo "<p>Grade : A</p>";
}elseif($percentage >= 60) {
    echo "<p>Grade : B</p>";
}elseif($percentage >= 50) {
    echo "<p>Grade : C</p>";
}elseif($percentage >= 40) {
    echo "<p>Grade : D</p>";
}else {
    echo "<p>Grade : F</p>";
}