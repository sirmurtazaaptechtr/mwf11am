<?php
function greetarr ($input) {
    foreach($input as $key=>$value) {
        echo "<p>" . $key+1 . ". Hi $value</p>";
    }
}

// Declear an array

// $myArr = array();
// $myArr = [];

$names = ["Maaz","Sufiyan","Rizwan","Sameer","Nimrah","Muniba","Chand","Ovamir","Hanzala","Samad","Zubaida","Areesha"];

// Access Indexed Arrays
echo "<p>Hi " . $names[3] . "</p>";
echo "<pre>";
print_r($names);
echo "</pre>";

for($cnt = 0;$cnt < count($names);$cnt++) {
    echo "<p>" . $cnt+1 ." Hi " . $names[$cnt] . "</p>";
}

foreach($names as $index=>$name) {
    echo "<p>" . $index+1 . ". Hi $name</p>";
}

// Change/Update Value

$names[9] = "Abdul Samad";
greetarr($names); // we have made a UDF to greet elements

// Add Array Items in the end
array_push($names,"Syed Murtaza Hussain");
greetarr($names);

// Remove last Array Items
array_pop($names);
greetarr($names);

// Add Array Items in the start
array_unshift($names,"Syed Murtaza Hussain");
greetarr($names);

// Remove first Array Items
array_shift($names);
greetarr($names);

// append item in between
array_splice($names,6,0,"Nazeer");

// delete item in between
array_splice($names,3,1);

echo "<pre>";
print_r($names);
echo "</pre>";