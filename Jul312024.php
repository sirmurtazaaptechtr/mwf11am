<?php
    $text = "Mr. Ovaimir Shamsi";
    $msg = " Hello World! ";

    $res1 = strlen($text);
    $res2 = str_word_count($text);
    $res3 = strpos($text,"Ovaimir");
    $res4 = strpos($text,"Murtaza");
    $res5 = strlen($msg);
    $res6 = strlen(trim($msg));
    $fullName = explode(" ",$text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stings in Php</title>
</head>
<body>
    <main>
        <p><?php echo $res1; ?></p>
        <p><?php echo $res2; ?></p>
        <p><?php echo $res3; ?></p>
        <p><?php var_dump($res4); ?></p>
        <p><?php echo strtoupper($text);?></p>
        <p><?php echo strtolower($text);?></p>
        <p><?php echo str_replace("Mr.","Syed",$text);?></p>
        <p><?php echo strrev($text);?></p>
        <p><?php echo $msg;?></p>
        <p><?php echo $res5;?></p>
        <p><?php echo trim($msg);?></p>
        <p><?php echo $res6;?></p>
        <pre><?php print_r($fullName);?></pre>
        <p><?php echo "$fullName[2], $fullName[1]";?></p>
        <p><?php echo $fullName[2] . ", " . $fullName[1];?></p>
        <p><?php echo substr($text,4,7);?></p>
        
    </main>
</body>
</html>