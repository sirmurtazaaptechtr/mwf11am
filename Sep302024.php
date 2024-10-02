<?php 
$cookie_name = "data";
$cookie_value = "very important data is here ";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo "<h1>" . $_COOKIE["data"] . "</h1>"; 
        
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "<h1>" . $_COOKIE[$cookie_name] . "</h1>";
        }

        $str = "<h1>Hello World!</h1>";        
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;
        echo $str;
    ?>
    </body>
</html>