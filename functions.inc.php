<?php
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
function prx ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
    die();
}
// data sanitization 
function test_input ($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}