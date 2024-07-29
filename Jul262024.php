<?php
    $name = "Aptech Learning";
    $age = 13;
    $msg1 = "Learn PHP";
    $url = "W3Schools.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Variables - Welcome</title>
</head>
<body>
    <h1><?php echo $name;?></h1>
    <p><?php echo $name;?> was established <?php echo $age;?> years ago.</p>

    <?php
        echo "<h1>$name</h1>";
        echo "<p>$name was established $age years ago.</h1>";

        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    ?>
    
</body>
</html>