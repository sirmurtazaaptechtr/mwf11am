<?php
$filepath = 'webdictionary.txt';

// echo readfile('webdictionary.txt');

$myfile = fopen($filepath,'r');
// echo fread($myfile,filesize($filepath));
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";
// echo "<p>" . fgets($myfile) . "</p>";

echo "<ul>";
while(!feof($myfile)) {
    echo "<li>" . fgets($myfile) . "</li>";
}
echo "</ul>";


fclose($myfile);