<?php
// Functions
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}

// PHP Indexed Arrays
$names = ["Maaz","Sufiyan","Rizwan","Sameer","Nimrah","Muniba","Chand","Ovamir","Hanzala","Samad","Zubaida","Areesha"];
// PHP Associative Arrays
$student = [
    "name" => "Sufiyan Irfan",
    "dob" => "24-Dec-2004",
    "marks" => 63
];

echo "<p>" . $student["name"] . "</p>";

pr($student);

$student["marks"] = 53;

$student += ["gender"=>"male","city"=>"Karachi"];

foreach($student as $key=>$value) {
    echo "<p><b>$key</b> : $value </p>";
}

pr($names);

sort($names);
pr($names);

rsort($names);
pr($names);

asort($student);
pr($student);

ksort($student);
pr($student);

arsort($student);
pr($student);

krsort($student);
pr($student);

// PHP Multidimensional Arrays

$students = [
    ["name" => "Sufiyan Irfan","dob" => "24-Dec-2004","marks" => 63],
    ["name" => "Muniba","dob" => "22-Jan-2003","marks" => 53],
    ["name" => "Ovamir","dob" => "04-Nov-2004","marks" => 73]
];
pr($students);

$students = [
    "Student001"=>["name" => "Sufiyan Irfan","dob" => "24-Dec-2004","marks" => 63],
    "Student002"=>["name" => "Muniba","dob" => "22-Jan-2003","marks" => 53],
    "Student003"=>["name" => "Ovamir","dob" => "04-Nov-2004","marks" => 73]
];
pr($students);