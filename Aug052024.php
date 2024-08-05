<?php
    $a = 1;
    $b = 2.5;

    $res = $a + $b;

    var_dump($res);
    echo "<br>";

    $b = 2;

    $res = $a + $b;
    
    var_dump($res);
    echo "<br>";

    $res = $a / $b;
    
    var_dump($res);
    echo "<br>";

    $b = "22.7";

    var_dump((float)$b);
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL
    
    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (int) $f;
    $g = (int) $g;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    var_dump($f);
    echo "<br>";
    var_dump($g);
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    
    $a = (float) $a;
    $b = (float) $b;
    $c = (float) $c;
    $d = (float) $d;
    $e = (float) $e;
    $f = (float) $f;
    $g = (float) $g;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    var_dump($f);
    echo "<br>";
    var_dump($g);
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    var_dump($f);
    echo "<br>";
    var_dump($g);
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL


    var_dump($a);
    echo "<br>";

    unset($a);
    var_dump($a);