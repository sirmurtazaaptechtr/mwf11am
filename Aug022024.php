<?php
$data = 01234567;// octa number input

$a = 012;
$b = 014;
$c = 016;
$d = 18;

var_dump($data);// decimal output

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$text = '"Hanzala" is my friend\'s friend';

echo "<p>$text</p>";

echo PHP_INT_MAX . "<br>";

$num = 12;
var_dump(is_int($num));

echo "<br>";

$num = 12.75;
var_dump(is_int($num));

echo "<br>";

$num = 9223372036854775809e289;
var_dump($num);

echo "<br>";

$num = 9223372036854775809e290;
var_dump($num);
