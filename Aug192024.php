<?php
    $num = 27;

    if($num > 15 && $num < 20) {
        echo "<p> $num is between 15 and 20 but not 15 and 20</p>";
    }else {
        echo "<p> $num is not between 15 and 20 could be 15 or 20</p>";
    }

    $obtmarks = 23;
    $maxmarks = 25;

    echo "<p>Obtained Marks : $obtmarks<br>Maximum Marks : $maxmarks<br></p>";
    
    $percentage = round($obtmarks/$maxmarks*100,2);
    echo "<p>Percentage : $percentage%</p>";
    
    if($percentage < 40.00) {
        echo "<p>Status : FAIL</p>";
    }else {
        echo "<p>Status : PASS</p>";
    }

    if($percentage >= 85.00) {
        echo "<p>Grade : D</p>";
    }elseif($percentage >= 75.00) {
        echo "<p>Grade : C</p>";
    }elseif($percentage >= 40.00) {
        echo "<p>Grade : P</p>";
    }else {
        echo "<p>Grade : F</p>";
    }

    // $name = 'Rizwan';
    // $sales = 175000;
    // $grade = 'N';
    // $comm = 0;
    // $name = 'Zubaida';
    // $sales = 75000;
    // $grade = 'S';
    // $comm = 0;
    $name = 'Ovamir';
    $sales = 5200000;
    $grade = 'J';
    $comm = 0;


    if($grade == 'S') {
        $comm += $sales * 0.02;
        if($sales >= 5000000) {
            $comm += $sales * 0.05;
        }elseif($sales >= 1100000) {
            $comm += $sales * 0.02;
        }elseif($sales >= 100000) {
            $comm += $sales * 0.01;
        }else {
            $comm += $sales * 0.00;
        }
        echo "<p>$name<br>$sales<br>$comm</p>";
    }elseif($grade == 'J'){
        $comm += $sales * 0.01;
        if($sales >= 5000000) {
            $comm += $sales * 0.05;
        }elseif($sales >= 1100000) {
            $comm += $sales * 0.02;
        }elseif($sales >= 100000) {
            $comm += $sales * 0.01;
        }else {
            $comm += $sales * 0.00;
        }
        echo "<p>$name<br>$sales<br>$comm</p>";
    }elseif($grade == 'N') {
        if($sales >= 5000000) {
            $comm += $sales * 0.05;
        }elseif($sales >= 1100000) {
            $comm += $sales * 0.02;
        }elseif($sales >= 100000) {
            $comm += $sales * 0.01;
        }else {
            $comm += $sales * 0.00;
        }
        echo "<p>$name<br>$sales<br>$comm</p>";
    }else {
        echo "Invalid Grade!";
    }

    $comm = 0;
    switch($grade) {
        case 'S' :
            $comm += $sales * 0.02;
            if($sales >= 5000000) {
                $comm += $sales * 0.05;
            }elseif($sales >= 1100000) {
                $comm += $sales * 0.02;
            }elseif($sales >= 100000) {
                $comm += $sales * 0.01;
            }else {
                $comm += $sales * 0.00;
            }
            echo "<p>$name<br>$sales<br>$comm</p>";
        break;
        case 'J' :
            $comm += $sales * 0.01;
            if($sales >= 5000000) {
                $comm += $sales * 0.05;
            }elseif($sales >= 1100000) {
                $comm += $sales * 0.02;
            }elseif($sales >= 100000) {
                $comm += $sales * 0.01;
            }else {
                $comm += $sales * 0.00;
            }
            echo "<p>$name<br>$sales<br>$comm</p>";
        break;
        case 'N' :
            $comm += $sales * 0.00;
            if($sales >= 5000000) {
                $comm += $sales * 0.05;
            }elseif($sales >= 1100000) {
                $comm += $sales * 0.02;
            }elseif($sales >= 100000) {
                $comm += $sales * 0.01;
            }else {
                $comm += $sales * 0.00;
            }
            echo "<p>$name<br>$sales<br>$comm</p>";
        break;
        default:
            echo "<p>Invalid Grade!</p>";
        break;
    }
?>