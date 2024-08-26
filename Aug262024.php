<?php
// Functions
// 1. Biltin Functions (Functions Developed by PHP)

echo "<p>echo is a builtin Function</p>";
print "<p>print is a builtin Function</p>";
var_dump(12);

// 2. User Defined Functions (Functions Developed by the User(the php Developer))
function myfun1 () {
    // function defination
    echo "<p> hi User, How are you?</p>";
}

// parameterized function (function local variables)
function myfun2 ($name/*function parameter*/) {
    echo "<p> hi $name, How are you?</p>";
}

function myfun3 ($name, $age) {
    echo "<p> Greetings $name, you are $age years old.</p>";
}

// the return jump statement(get value out of a function)
function myfun4 ($num1, $num2) {
    $res = $num1 + $num2;

    return $res;
}

// variable number of parameters
function sum_of_numbers($num1, ...$nums) {
    foreach($nums as $num) {
        $num1 += $num;
    }
    return $num1;
}

myfun1();// function call 

myfun2("Sufiyan"/*function argument*/ );
myfun2("Muniba");

myfun3("Nimrah",21);
myfun3("Sameer",20);

$sum =  myfun4(12,16);
echo "<p>The result is $sum</p>";

$sum = sum_of_numbers(12,13,25,50);
echo "<p>The result is $sum</p>";
