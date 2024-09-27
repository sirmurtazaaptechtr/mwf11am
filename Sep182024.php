<?php
$filepath = 'webdictionary.txt';
// method 01
// echo readfile('webdictionary.txt');

// method 02
$myfile = fopen($filepath,'r');
// echo fread($myfile,filesize($filepath));
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";

// method 03
echo "<ul>";
while(!feof($myfile)) {
    echo "<li>" . fgets($myfile) . "</li>";
}
echo "</ul>";

// close open file by fopen
fclose($myfile);

//Write File
// $myfile = fopen("testfile.txt", "w");
//append File
$myfile = fopen("testfile.txt", "a");

fwrite($myfile,"<p>this is new content to a new file.</p>");

fclose($myfile);

//Read File
// echo readfile('testfile.txt');

$myfile = fopen('testfile.txt','r');

echo "<ul>";
while(!feof($myfile)) {
    echo "<li>" . fgets($myfile) . "</li>";
}
echo "</ul>";

fclose($myfile);