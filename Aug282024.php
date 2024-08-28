<?php
declare(strict_types=1); // strict requirement
$name = '';
$age = 0;

function setData () {
    global $name,$age;// make global variable accessable
    $name = "Rizwan Naqvi";
    $age = 42;
}

function inside() {
    static $cnt = 0;// make variable static to increase its lifetime
    $cnt++;
    echo "<p>$cnt</p>";
}

function swap (&$val1, &$val2) {

    echo "<p>Inside BS : ($val1,$val2)</p>";
    $temp = $val1;
    $val1 = $val2;
    $val2 = $temp;
    echo "<p>Inside AS : ($val1,$val2)</p>";
}

function sum (int $x,int $y) {
    return $x + $y;
}

setData();
echo "<p>Name : $name<br>Age : $age</p>";

inside();
inside();
inside();

// Passing Arguments by Reference

$a = 12;
$b = 24;

echo "<p>Outside BS : ($a,$b)</p>";
swap($a,$b);
echo "<p>Outside AS : ($a,$b)</p>";

// PHP is a Loosely Typed Language use of strict type


echo "<p>" . sum(12,24) . "</p>";