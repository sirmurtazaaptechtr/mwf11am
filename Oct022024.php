<?php
    session_start();

    $_SESSION["mydata"] = "ye aik khas informaiton hai";
    $_SESSION["isVisiable"] = true;
    $_SESSION["role_id"] = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sessions in Php</h1>

    <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        $json_data = '{"data":[
            {"name":"Sufiyan","age":19},
            {"name":"Rizwan","age":42},
            {"name":"Zubaida","age":21}
        ]}';

        echo "<pre>";
        var_dump($json_data);
        echo "</pre>";
        
        $arr = json_decode($json_data);
        
        echo "<pre>";
        var_dump($arr);
        echo "</pre>";
        
        
        $json_text = json_encode($arr);
        echo "<pre>";
        var_dump($json_text);
        echo "</pre>";
        ?>
    
    <a href="sessions.php">Check Sessions</a>



    
</body>
</html>