<?php
    $students = ["Maaz","Sufiyan","Rizwan","Nimrah","Muniba","Chand","Ovamir","Samad","Areesha","Zubaida"];

    // echo "<p>Hi, This is Murtaza</p>";
    // echo "<p>Hi, This is Murtaza</p>";
    // echo "<p>Hi, This is Murtaza</p>";
    // echo "<p>Hi, This is Murtaza</p>";
    // echo "<p>Hi, This is Murtaza</p>";
    // echo "<p>Hi, This is Murtaza</p>";
    // echo "<p>Hi, This is Murtaza</p>";
    // echo "<p>Hi, This is Murtaza</p>";
    // echo "<p>Hi, This is Murtaza</p>";
    // echo "<p>Hi, This is Murtaza</p>";

    for($cnt = 0;$cnt < count($students);$cnt++) {
        echo "<p>Hi, This is " . $students[$cnt] . "</p>";
    }

    for($cnt = 6;$cnt <= 5;$cnt++) {
        echo "<p>$cnt</p>";
    }

    $cnt = 6;
    while($cnt <= 5) {
        echo "<p>$cnt</p>";
        $cnt++;
    }

    $cnt = 6;
    do {
        echo "<p>$cnt</p>";
        $cnt++;
    }while($cnt <= 5);

    for($cnt = 1; $cnt <= 10; $cnt++) {
        if($cnt%2 == 0) {
            continue;
        }
        echo "<p>$cnt</p>";
    }

    for($cnt = 1; $cnt <= 10; $cnt++) {
        if($cnt == 5) {
            break;
        }
        echo "<p>$cnt</p>";
    }