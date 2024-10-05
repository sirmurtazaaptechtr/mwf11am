<?php
    function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("The Division by zero");
    }
    return $dividend / $divisor;
    }

    try {
        echo divide(5, 2);
    }catch (Exception $exp) {
        echo "<pre>";
        var_dump($exp);
        echo "</pre>";

        echo $exp->getMessage();
        echo "<p>Unable to divide!</p>";
    }finally {
        echo "<p>The End</p>";
    }
